<?php
namespace app\business\controller;
use think\Controller;
class Index extends Controller{

	public function index(){
		return $this->fetch();
	}

	public function welcome(){
		return $this->fetch();
	}

}
?>