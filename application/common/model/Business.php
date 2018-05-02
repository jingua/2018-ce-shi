<?php
namespace app\common\model;
use think\Model;
class Business extends BaseModel{

    /*通过状态获取商家数据*/
    public function get_business($status=0){
        $order = [
            'id' => 'desc',
        ];
        $data = [
            'status' => $status,
        ];
        $result = $this->where($data)
            ->order($order)
            ->paginate();
        return $result;
    }

}