<?php
namespace app\common\model;
use think\Model;
class Category extends Model{
	protected $autoWriteTimestamp = false;

	/*查询分类*/
	public function get_add(){
		$data = [
			'category_parent_id' => 0,
			'category_status' => 1,
		];
		$order = [
			'category_id' => 'desc',
		];
		$result = $this->where($data)
			->order($order)
			->select();
		return $result;	
	}


	/*执行分类添加*/
	public function add($data){
		$data['category_create_time'] = time();
		$result = $this->save($data);
		return $result;
	}

	/*分类列表*/
	public function get_index($category_parent_id=0){
		$data = [
			'category_parent_id' => $category_parent_id,
			'category_status' => ['neq',3],
		];
		$order = [
			'category_sort' => 'desc',
			'category_id' => 'desc',
		];
		$result = $this->where($data)
			->order($order)
			->paginate();
		//echo $this->getLastSql();
		return $result;
	}

	/*分页显示分类列表*/
	public function get_category_page($category_parent_id=0, $limit=5){
		$data = [
		    'category_parent_id' => $category_parent_id,
			'category_status' => ['neq',3],
		];
		$order = [
		    'category_sort' => 'desc',
			'category_id' => 'desc',
		];
		$result = $this->where($data)->order($order);
		if($limit) {
		    $result = $result->limit($limit);
		}
		return $result->select();
	}

	/*查询二级分类*/
	public function get_category($category_parent_id=0){
        $data = [
            'category_status' => 1,
            'category_parent_id' => $category_parent_id,
        ];
        $order = [
            'category_id' => 'desc',
        ];
        return $this->where($data)
            ->order($order)
            ->select();
   }

	public function getNormalCategoryIdParentId($ids){
		$data = [
		    'category_parent_id' => ['in', implode(',', $ids)],
		    'category_status' => 1,
		];
		$order = [
		    'category_sort' => 'desc',
		    'category_id' => 'desc',
		];
		$result = $this->where($data)
		    ->order($order)
		    ->select();
		return $result;
	}


}
?>