<?php
namespace app\common\model;
use think\Model;
class City extends Model{

	/*获取一级城市*/
	public function get_city_one($city_parent_id=0){
		$data = [
			'city_status' => 1,
			'city_parent_id' => $city_parent_id,
		];
		$order = [
			'city_id' => 'desc',
		];
		return $this->where($data)
			->order($order)
			->select();
	}

	/*获取二级城市*/
	public function getNormalCitys(){
        $data = [
            'city_status' => 1,
            'city_parent_id' => ['gt', 0],
        ];
        $order = ['city_id'=>'desc'];
        return $this->where($data)
            ->order($order)
            ->select();
    }

}
?>