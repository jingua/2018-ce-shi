<?php
namespace app\admin\controller;
use think\Controller;
class Featured extends Controller{

	/*添加推荐位*/
	public function add(){
		$type = Config("featured.featured_type");
		return $this->fetch('',[
			'type' => $type,
		]);
	}

	/*执行推荐位添加*/
	public function save(){
		if(request()->isPost()){
			$data = input('post.');
			$id = model('Featured')->add($data);
			if($id) {
				$this->success('添加成功');
			}else{
				$this->error('添加失败');
			}
		}
	}

	/*推荐位列表*/
	public function index(){
		$type = model("Featured")->get_featured();
		return $this->fetch('',[
			'type' => $type,
		]);
	}


}
?>