<?php
	return [
		'app_name'  			 => 'xiami',
		'app_email'  			 => 'xiami@com',
    	'app_debug'              => true,		//应用调试模式
    	'url_common_param'       => true,		//URL普通方式参数 用于自动生成
    	'url_route_on' 			 => true,
    	'captcha' => [
    	   'codeSet'      => '12345678abcde', 
	       'fontSize'     => 22,		//验证码字体大小(px)，根据所需进行设置验证码字体大小	       
	       'useCurve'     => false,		//是否画混淆曲线	       
	       'imageH'       => '50',		//验证码图片高度，根据所需进行设置高度	       
	       'imageW'       => '145',		//验证码图片宽度，根据所需进行设置宽度	       
	       'length'       => 3,			//验证码位数，根据所需设置验证码位数       
	       'reset'        => true,		//验证成功后是否重置
		],
	];
?>