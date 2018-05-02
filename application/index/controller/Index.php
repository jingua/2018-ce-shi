<?php
namespace app\index\controller;
use think\Controller;
use think\Config;
class Index extends Base{

    public function index(){
        //$res = Config::get();
        //$res = config();
        //获取配置文件内容
        //$res = Config::get("app_name");
        //$res = config("app_name");
        //Config::set("app_name","123");
        //$res = Config::get("app_name");
        $datas = model('Deal')->getNormalDealByCategoryCityId(2, $this->city->city_id);
        $meishicates = model('Category')->get_category_page(1, 4);
    	return $this->fetch('',[
            'datas' => $datas,
            'meishicates' => $meishicates,
            'controller' => 'ms',
        ]);
    }


    public function lists(){
        $firstCatIds = [];
        $categorys = model("Category")->get_category();
        foreach($categorys as $category) {
            $firstCatIds[] = $category->category_id;
        }
        $id = input('id', 0, 'intval');
        $data = [];
        // id=0 一级分类 二级分类
        if(in_array($id, $firstCatIds)) { // 一级分类
            // todo
            $categoryParentId = $id;
            $data['category_id'] = $id;
        }elseif($id) { // 二级分类
            // 获取二级分类的数据
            $category = model('Category')->get($id);
            if(!$category || $category->category_status !=1) {
                $this->error('数据不合法');
            }
            $categoryParentId = $category->category_parent_id;
            $data['se_category_id'] = $id;
        }else{ // 0
            $categoryParentId = 0;
        }
        $sedcategorys = [];
        //获取父类下的所有 子分类
        if($categoryParentId) {
            $sedcategorys = model('Category')->get_category($categoryParentId);
        }
        $orders = [];
        // 排序数据获取的逻辑
        $order_sales = input('order_sales','');
        $order_price = input('order_price','');
        $order_time = input('order_time','');
        if(!empty($order_sales)) {
            $orderflag = 'order_sales';
            $orders['order_sales'] = $order_sales;
        }elseif(!empty($order_price)) {
            $orderflag = 'order_price';
            $orders['order_price'] = $orderflag;//这个地方默认写错了。注意修改下哦
        }elseif(!empty($order_time)) {
            $orderflag = 'order_time';
            $orders['order_time'] = $order_time;
        }else{
            $orderflag = '';
        }
        //Log::write('o2o-log-list-id'.$id, 'log');
        trace('o2o-log-list-id'.$id, 'log');
        $data['city_id'] = $this->city->city_id; // add 
        // 根据上面条件来查询商品列表数据
        $deals = model('Deal')->getDealByConditions($data, $orders);
        return $this->fetch('', [
            'categorys' => $categorys,
            'sedcategorys' => $sedcategorys,
            'id' => $id,
            'categoryParentId' => $categoryParentId,
            'orderflag' => $orderflag,
            'deals' => $deals,
        ]);
    	return $this->fetch();
    }


    public function detail($id){
        if(!intval($id)) {
            $this->error('ID不合法');
        }
        $deal = model('Deal')->get($id);
        if(!$deal || $deal->status != 1) {
            $this->error('该商品不存在');
        }
        $category = model('Category')->get($deal->category_id);
        $locations = model('BusinessDetail')->getNormalLocationsInId($deal->location_ids);
        $flag = 0;
        if($deal->start_time > time()) {
            $flag = 1;
            $dtime = $deal->start_time-time();
            $timedata = '';
            $d = floor($dtime/(3600*24)); // 0.6  0 1.2 1
            if($d) {
                $timedata .= $d . "天 ";
            }
            $h = floor($dtime%(3600*24)/3600);
            if($h) {
                $timedata .= $h . "小时 ";
            }
            $m = floor($dtime%(3600*24)%3600/60);
            if($h) {
                $timedata .= $m . "分 ";
            }
            $this->assign('timedata', $timedata);
        }
        return $this->fetch('', [
            'deal' => $deal,
            'title' => $deal->name,
            'category' => $category,
            'locations' => $locations,
            'overplus' => $deal->total_count-$deal->buy_count,
            'flag' => $flag,
            'mapstr' => $locations[0]['xpoint'].','.$locations[0]['ypoint'],
        ]);
    	return $this->fetch();
    }


    public function buy(){
    	return $this->fetch();
    }


    public function login(){
    	return $this->fetch();
    }


    public function register(){
    	return $this->fetch();
    }
   

}
