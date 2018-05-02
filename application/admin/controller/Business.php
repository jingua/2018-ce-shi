<?php
namespace app\admin\controller;
use think\Controller;
class Business extends Controller{

	/*商家列表*/
	public function index(){
		$business = model("Business")->get_business(1);
		return $this->fetch('',[
			'business' => $business,
		]);
	}

	/*入驻商家列表*/
	public function apply(){
		$business = model("Business")->get_business(0);
		return $this->fetch('',[
			'business' => $business,
		]);
	}

	/*删除商家列表*/
	public function del(){
		$business = model("Business")->get_business(-1);
		return $this->fetch('',[
			'business' => $business,
		]);
	}

	 // 修改状态
    public function status(){
        $data = input('get.');
        $res = model('Business')->save(['status'=>$data['status']], ['id'=>$data['id']]);
        $location = model('BusinessDetail')->save(['status'=>$data['status']], ['bis_id'=>$data['id'], 'is_main'=>1]);
        $account = model('BusinessAccount')->save(['status'=>$data['status']], ['bis_id'=>$data['id'], 'is_main'=>1]);
        if($res && $location && $account) {
            $this->success('状态更新成功');
        }else {
            $this->error('状态更新失败');
        }
    }

	//根据地址获取经纬度
	public function test1(){
		$res = \Map::getLngLat("北京昌平沙河地铁");
		p($res);
	}

	//根据经纬度显示地图位置
	public function test2(){
		return \Map::staticimage("北京昌平沙河地铁");
	}

}
?>