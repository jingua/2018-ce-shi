<?php
namespace app\admin\controller;
use think\Controller;
use think\View;
class Index extends Controller{

	public function index(){
		return $this->fetch();
	}

	public function welcome(){
		/*var_dump(\phpmailer\Email::send("xiami1505163.com","love","love"));*/
		return $this->fetch();
	}

	public function mod(){
		//$view = new View();
		//return $view->fetch('mod');
		//return $this->fetch();
		//return view('mod');
		//$this->assign("domain",$this->request->url(true));
		//return $this->fetch("mod");
		return "how are you";
	}

	
}
?>