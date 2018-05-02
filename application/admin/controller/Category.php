<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Category extends Base{
	/*
	private $obj;
	public function _initialize(){
		$this->obj = model("Category");
	}*/

	/*添加分类*/
	public function add(){
		/*$cate = Db::table('o2o_category')
		  ->where('category_status',1)
		   ->select();*/
		 $query = new \think\db\Query();
		$query->table('o2o_category')->where('category_status',2);
		//$cate = Db::find($query);
		$cate = Db::select($query);

		echo "<pre>";
		var_dump($cate);
		echo "</pre>";
		/*$categorys = model("Category")->get_add();
		return $this->fetch('',[
			'categorys' => $categorys,
		]);*/
	}

	/*执行分类添加与编辑*/
	public function save(){
		if(!request()->isPost()){
			$this->error('请求失败');
		}
		$data = input('post.');
		$validate = validate("Category");
		$data['category_name'] = htmlentities($data['category_name']);
		if(!$validate->scene('add')->check($data)){
			$this->error($validate->getError());
		}
		/*编辑操作*/
		if(!empty($data['category_id'])){
			return $this->update($data);
		}
		$res = model("Category")->add($data);
		if($res){
			$this->success("添加成功");
		}else{
			$this->error("添加失败");
		}
	}

	/*分类列表*/
	public function index(){
		$category_parent_id = input("get.category_parent_id",0,'intval');
		$categorys = model("Category")->get_index($category_parent_id);
		return $this->fetch('',[
			'categorys' => $categorys,
		]);
	}

	/*编辑分类模板*/
	public function edit($category_id=0){
		if(intval($category_id)<1){
			$this->error("参数不合法");
		}
		$category = model("Category")->get($category_id);
		$categorys = model("Category")->get_add();
		return $this->fetch('',[
			'categorys' => $categorys,
			'category' => $category,
		]);
	}

	/*执行分类编辑*/
	public function update($data){
		$res = model("Category")->save($data,['id'=>intval($data['category_id'])]);
		if($res){
			$this->success("更新成功");
		}else{
			$this->error("更新失败");
		}
	}

	/*编辑排序*/
	public function category_sort($category_id,$category_sort){
		$res = model("Category")->save(['category_sort'=>$category_sort],['category_id'=>$category_id]);
		if($res){
			$this->result($_SERVER['HTTP_REFERER'],200,'success');
		}else{
			$this->result($_SERVER['HTTP_REFERER'],201,'更新失败');
		}
	}

	/*编辑状态*/
	public function status(){
		$data = input("get.");
		$validate = validate("Category");
		if(!$validate->scene('status')->check($data)){
			$this->error($validate->getError());
		}
		$res = model('Category')->save(['category_status'=>$data['category_status']],['category_id'=>$data['category_id']]);
		if($res){
			$this->success("状态更新成功");
		}else{
			$this->error("状态更新失败");
		}
	}

	
}
?>

