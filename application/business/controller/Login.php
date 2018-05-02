<?php
namespace app\business\controller;
use think\Controller;
class Login extends Controller{

	/*用户登录*/
	public function index(){
		if(request()->isPost()) {
			$data = input('post.');
			$ret = model('BusinessAccount')->get(['username'=>$data['username']]);
			/*if(!$ret || $ret->status !=1 ) {
			    $this->error('改用户不存在，获取用户未被审核通过');
			}*/
			if($ret->password != md5($data['password'].$ret->code)) {
			    $this->error('密码不正确');
			}
			model('BusinessAccount')->updateById(['last_login_time'=>time()], $ret->id);
			session('bisAccount', $ret, 'bis');
			return $this->success('登录成功', url('index/index'));
		}else {
			//获取session
			$account = session('bisAccount', '', 'bis');
			if($account && $account->id) {
			    return $this->redirect(url('index/index'));
			}
			return $this->fetch();
		}
	}

	/*商户登录模板*/
	public function login(){
		return $this->fetch();
	}

	/*商户注册模板*/
	public function register(){
		$city = model("City")->get_city_one();
		$category = model("Category")->get_add();
		return $this->fetch('',[
			'city1' => $city,
			'category' => $category,
		]);
	}

	/*商户执行注册*/
    public function add(){
	    if(!request()->isPost()){
	        $this->error('请求错误');
	    }
	    //获取表单的值
	    $data = input('post.');
	    //检验数据
	    $validate = validate('Business');
	    if(!$validate->scene('add')->check($data)) {
	        $this->error($validate->getError());
	    }
	    //获取经纬度
	    $lnglat = \Map::getLngLat($data['address']);
	    if(empty($lnglat)) {
	        $this->error('无法获取数据，或者匹配的地址不精确');
	    }
	    //判定提交的用户是否存在
	    $accountResult = model('BusinessAccount')->get(['username'=>$data['username']]);
		//echo model('BisAccount')->getLastSql();exit; 
	    if($accountResult) {
	        $this->error('该用户存在，请重新分配');
	    }
	    //商户基本信息入库
	    $bisData = [
	        'name' => $data['name'],
	        'city_id' => $data['city_id'],
	        'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'].','.$data['se_city_id'],
	        'logo' => $data['logo'],
	        'licence_logo' => $data['licence_logo'],
	        'description' => empty($data['description']) ? '' : $data['description'],
	        'bank_info' =>  $data['bank_info'],
	        'bank_user' =>  $data['bank_user'],
	        'bank_name' =>  $data['bank_name'],
	        'faren' =>  $data['faren'],
	        'faren_tel' =>  $data['faren_tel'],
	        'email' =>  $data['email'],
	    ];
	    $bisId = model('Business')->add($bisData);
	    //总店相关信息检验
	    $data['cat'] = '';
	    if(!empty($data['se_category_id'])) {
	        $data['cat'] = implode('|', $data['se_category_id']);
	    }
	    //总店相关信息入库
	    $locationData = [
	        'bis_id' => $bisId,
	        'name' => $data['name'],
	        'logo' => $data['logo'],
	        'tel' => $data['tel'],
	        'contact' => $data['contact'],
	        'category_id' => $data['category_id'],
	        'category_path' => $data['category_id'] . ',' . $data['cat'],
	        'city_id' => $data['city_id'],
	        'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'].','.$data['se_city_id'],
	        'api_address' => $data['address'],
	        'open_time' => $data['open_time'],
	        'content' => empty($data['content']) ? '' : $data['content'],
	        'is_main' => 1,// 代表的是总店信息
	        'xpoint' => empty($lnglat['result']['location']['lng']) ? '' : $lnglat['result']['location']['lng'],
	        'ypoint' => empty($lnglat['result']['location']['lat']) ? '' : $lnglat['result']['location']['lat'],
	    ];
	    $locationId = model('BusinessDetail')->add($locationData);
	    //账户相关的信息检验
	    //自动生成 密码的加盐字符串
	    $data['code'] = mt_rand(100, 10000);
	    $accounData = [
	        'bis_id' => $bisId,
	        'username' => $data['username'],
	        'code' => $data['code'],
	        'password' => md5($data['password'].$data['code']),
	        'is_main' => 1, // 代表的是总管理员
	    ];
	    $accountId = model('BusinessAccount')->add($accounData);
	    if(!$accountId) {
	        $this->error('申请失败');
	    }
	    //发送邮件
	    /*$url = request()->domain().url('bis/register/waiting', ['id'=>$bisId]);
	    $title = "o2o入驻申请通知";
	    $content = "您提交的入驻申请需等待平台方审核，您可以通过点击链接<a href='".$url."' target='_blank'>查看链接</a> 查看审核状态";
	    \phpmailer\Email::send($data['email'],$title, $content);*/  // 线上关闭 发送邮件服务
	    $this->success('申请成功', url('login/waiting',['id'=>$bisId]));
	}

	/*商户注册之后显示模板*/
	public function waiting($id) {
		if(empty($id)) {
		    $this->error('error');
		}
		$detail = model('Business')->get($id);

		return $this->fetch('',[
		    'detail' => $detail,
		]);
	}

	/*商户退出*/
    public function logout() {
	    //清除session
	    session(null, 'bis');
	    //跳出
	    $this->redirect('login/login');
    }

}
?>