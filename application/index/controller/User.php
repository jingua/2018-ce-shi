<?php
namespace app\index\controller;
use think\Controller;
class User extends Controller{

	/*用户注册模板*/
	public function register(){
		return $this->fetch();
	}

	/*执行用户注册*/
	public function save_register(){
		if(request()->isPost()){
            $data = input('post.');
            if(!captcha_check($data['verifycode'])) {
                $this->error('验证码不正确');
            }
            if($data['password'] != $data['repassword']) {
                $this->error('两次输入的密码不一样');
            }
            $data['code'] = mt_rand(100, 10000);
            $data['password'] = md5($data['password'].$data['code']);
            try {
                $res = model('User')->add($data);
            }catch (\Exception $e) {
                $this->error($e->getMessage());
            }
            if($res) {
                $this->success('注册成功',url('user/login'));
            }else{
                $this->error('注册失败');
            }
        }
	}

	/*用户登录模板*/
	public function login(){
		$user = session('o2o_user','', 'o2o');
        if($user && $user->id) {
        	$this->redirect(url('index/index'));
        }
		return $this->fetch();
	}

	/*用户执行登录*/
	 public function save_login(){
        if(!request()->isPost()) {
           $this->error('提交不合法');
        }
        $data = input('post.');
        try{
            $user = model('User')->getUserByUsername($data['username']);
        }catch (\Exception $e){
            $this->error($e->getMessage());
        }
        if(!$user || $user->status != 1) {
            $this->error('该用户不存在');
        }
        if(md5($data['password'].$user->code) != $user->password) {
            $this->error('密码不正确');
        }
        model('User')->updateById(['last_login_time'=>time()], $user->id);
        session('o2o_user', $user, 'o2o');
        $this->success('登录成功', url('index/index'));
    }

    /*退出登录*/
    public function logout() {
        session(null, 'o2o');
        $this->redirect(url('index/index'));
    }


}
?>