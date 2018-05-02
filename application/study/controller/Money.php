<?php
namespace app\study\controller;
use think\Controller;
class Money extends Controller{

	public function money_list(){
		return $this->fetch();
	}

	public function money_add(){
		return $this->fetch();
	}

	public function type_list(){
		return $this->fetch();
	}

}
?>