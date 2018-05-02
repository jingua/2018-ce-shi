<?php
namespace app\study\controller;
use think\Controller;
class StudyPlan extends Controller{

	public function plan_list(){
		return $this->fetch();
	}

	public function plan_add(){
		return $this->fetch();
	}

}
?>