<?php
namespace app\common\model;
use think\Model;
class BusinessDetail extends BaseModel
{

    public function get_business($bisId) {
        $data = [
            'bis_id' => $bisId,
            'status' => 1,
        ];
        $result = $this->where($data)
            ->order('id', 'desc')
            ->select();
        return $result;
    }

    public function getNormalLocationsInId($ids) {
        $data = [
            'id' => ['in', $ids],
            'status' => 1,
        ];
        return $this->where($data)
            ->select();
    }

}