<?php
namespace app\api\controller;
use think\Controller;
class City extends Controller{

	private $obj;
	public function _initialize(){
		$this->obj = model('City');
	}

	public function get_city_two(){
		$city_id = input("post.city_id");
		if(!$city_id){
			$this->error('city_id不合法');
		}
		$city = $this->obj->get_city_one($city_id);
		if(!$city){
			return show(201,'error');
		}
		return show(200,'success',$city);
	}

}

?>