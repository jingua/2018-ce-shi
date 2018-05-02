<?php
namespace app\business\controller;
use think\Controller;
class Location extends Base{

	/*新增门店*/
	public function add(){
		if(request()->isPost()){
			$data = input('post.');
			$bisId = $this->getLoginUser()->bis_id;
			$data['cat'] = '';
			if(!empty($data['se_category_id'])) {
			    $data['cat'] = implode('|', $data['se_category_id']);
			}
			$lnglat = \Map::getLngLat($data['address']);
			if(empty($lnglat)){
			    $this->error('无法获取数据，或者匹配的地址不精确');
			}
			$locationData = [
			    'bis_id' => $bisId,
			    'name' => $data['name'],
			    'logo' => $data['logo'],
			    'tel' => $data['tel'],
			    'contact' => $data['contact'],
			    'category_id' => $data['category_id'],
			    'category_path' => $data['category_id'] . ',' . $data['cat'],
			    'city_id' => $data['city_id'],
			    'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'].','.$data['se_city_id'],
			    'api_address' => $data['address'],
			    'open_time' => $data['open_time'],
			    'content' => empty($data['content']) ? '' : $data['content'],
			    'is_main' => 0,
			    'xpoint' => empty($lnglat['result']['location']['lng']) ? '' : $lnglat['result']['location']['lng'],
			    'ypoint' => empty($lnglat['result']['location']['lat']) ? '' : $lnglat['result']['location']['lat'],
			];
			$locationId = model('BusinessDetail')->add($locationData);
			if($locationId) {
			    return $this->success('门店申请成功');
			}else {
			    return $this->error('门店申请失败');
			}
		}else {
			//获取一级城市的数据
			$citys = model('City')->get_city_one();
			//获取一级栏目的数据
			$categorys = model('Category')->get_category();
			return $this->fetch('', [
			    'citys' => $citys,
			    'categorys' => $categorys,
			]);
		}
		return $this->fetch();
	}

	public function index(){
		$bisId = $this->getLoginUser()->bis_id;
		$business = model("BusinessDetail")->get_business($bisId);
		return $this->fetch('',[
			'business' => $business,
		]);
	}

}
?>