<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:80:"D:\phpStudy\WWW\localhost\tp50\public/../application/admin\view\index\index.html";i:1516790778;s:80:"D:\phpStudy\WWW\localhost\tp50\public/../application/admin\view\common\meta.html";i:1517148103;s:80:"D:\phpStudy\WWW\localhost\tp50\public/../application/admin\view\common\head.html";i:1516632026;s:80:"D:\phpStudy\WWW\localhost\tp50\public/../application/admin\view\common\menu.html";i:1517156169;s:80:"D:\phpStudy\WWW\localhost\tp50\public/../application/admin\view\Common\foot.html";i:1517148076;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__STATIC__/admin/lib/html5.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui/css/style.css" />
 <link rel="stylesheet" type="text/css" href="__STATIC__/admin/uploadify/uploadify.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>团购平台</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> 
		<a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">团购平台</a> 
		<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
		<nav class="nav navbar-nav">
			<ul class="cl">
				<li class="dropDown dropDown_hover">
				<a href="javascript:;" class="dropDown_A">
				<i class="Hui-iconfont">&#xe600;</i> 新增 
				<i class="Hui-iconfont">&#xe6d5;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">

						<li><a href="javascript:;" 
						onclick="article_add('添加资讯','','','600')">
						<i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>

						<li><a href="javascript:;" 
						onclick="picture_add('添加资讯','','','600')">
						<i class="Hui-iconfont">&#xe613;</i> 图片</a></li>

						<li><a href="javascript:;" 
						onclick="product_add('添加资讯','','','600')">
						<i class="Hui-iconfont">&#xe620;</i> 产品</a></li>

						<li><a href="javascript:;" 
						onclick="member_add('添加用户','','','510')">

						<i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
					</ul>
				</li>
			</ul>
		</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> 
					<a href="#" class="dropDown_A">admin 
					<i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="#">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="#">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息">
					<span class="badge badge-danger">1</span>
					<i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> 
					<a href="javascript:;" class="dropDown_A" title="换肤">
					<i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
						<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
						<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
						<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
						<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
						<li><a href="javascript:;" data-val="orange" title="绿色">橙色</a></li>
					</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">

		<dl id="menu-article">
			<dt>
				<i class="Hui-iconfont">&#xe616;</i> 分类管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>

					<li><a _href="<?php echo url('category/add'); ?>" data-title="添加分类" 
					href="javascript:void(0)">添加分类</a></li>

					<li><a _href="<?php echo url('category/index'); ?>" data-title="分类列表" 
					href="javascript:void(0)">分类列表</a></li>

				</ul>
			</dd>
		</dl>

		<dl id="menu-picture">
			<dt>
				<i class="Hui-iconfont">&#xe613;</i> 城市管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>

					<li><a _href="<?php echo url('city/add'); ?>" data-title="添加城市" 
					href="javascript:void(0)">添加城市</a></li>

					<li><a _href="<?php echo url('city/index'); ?>" data-title="城市列表" 
					href="javascript:void(0)">城市列表</a></li>

				</ul>
			</dd>
		</dl>

		<dl id="menu-product">
			<dt>
				<i class="Hui-iconfont">&#xe620;</i> 商家管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>

					<li><a _href="<?php echo url('business/index'); ?>" data-title="商家列表" 
					href="javascript:void(0)">商家列表</a></li>

					<li><a _href="<?php echo url('business/apply'); ?>" data-title="商家入驻申请" 
					href="javascript:void(0)">商家入驻申请</a></li>

					<li><a _href="<?php echo url('business/del'); ?>" data-title="删除商家" 
					href="javascript:void(0)">删除商家</a></li>

				</ul>
			</dd>
		</dl>

		<dl id="menu-product">
			<dt>
				<i class="Hui-iconfont">&#xe620;</i> 推荐位管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>

					<li><a _href="<?php echo url('featured/add'); ?>" data-title="添加推荐位" 
					href="javascript:void(0)">添加推荐位</a></li>

					<li><a _href="<?php echo url('featured/index'); ?>" data-title="推荐位列表" 
					href="javascript:void(0)">推荐位列表</a></li>

				</ul>
			</dd>
		</dl>

		<dl id="menu-comments">
			<dt>
				<i class="Hui-iconfont">&#xe622;</i> 团购商品管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>

					<li><a _href="<?php echo url('deal/index'); ?>" data-title="团购列表" 
					href="javascript:void(0)">团购列表</a></li>

					<li><a _href="<?php echo url('deal/apply'); ?>" data-title="审核团购列表" 
					href="javascript:void(0)">审核团购列表</a></li>

				</ul>
			</dd>
		</dl>

		<dl id="menu-member">
			<dt>
				<i class="Hui-iconfont">&#xe60d;</i> 会员管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>

					<li><a _href="" data-title="会员列表" 
					href="javascript:;">会员列表</a></li>

				</ul>
			</dd>
		</dl>

		<dl id="menu-admin">
			<dt>
				<i class="Hui-iconfont">&#xe62d;</i> 管理员管理
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>

					<li><a _href="" data-title="角色管理" 
					href="javascript:void(0)">角色管理</a></li>

					<li><a _href="" data-title="权限管理" 
					href="javascript:void(0)">权限管理</a></li>

					<li><a _href="" data-title="管理员列表" 
					href="javascript:void(0)">管理员列表</a></li>

				</ul>
			</dd>
		</dl>

		<dl id="menu-tongji">
			<dt>
				<i class="Hui-iconfont">&#xe61a;</i> 系统统计
				<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>

					<li><a _href="" data-title="折线图" 
					href="javascript:void(0)">折线图</a></li>

					<li><a _href="" data-title="时间轴折线图" 
					href="javascript:void(0)">时间轴折线图</a></li>

					<li><a _href="" data-title="区域图" 
					href="javascript:void(0)">区域图</a></li>

					<li><a _href="" data-title="柱状图" 
					href="javascript:void(0)">柱状图</a></li>

					<li><a _href="" data-title="饼状图" 
					href="javascript:void(0)">饼状图</a></li>

					<li><a _href="" data-title="3D柱状图" 
					href="javascript:void(0)">3D柱状图</a></li>

					<li><a _href="" data-title="3D饼状图" 
					href="javascript:void(0)">3D饼状图</a></li>

				</ul>
			</dd>
		</dl>

		<dl id="menu-system">
			<dt>
			<i class="Hui-iconfont">&#xe62e;</i> 系统管理
			<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
			</dt>
			<dd>
				<ul>

					<li><a _href="" data-title="系统设置" 
					href="javascript:void(0)">系统设置</a></li>

					<li><a _href="" data-title="栏目管理" 
					href="javascript:void(0)">栏目管理</a></li>
					
				</ul>
			</dd>
		</dl>

	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo url('index/welcome'); ?>"></iframe>
		</div>
	</div>
</section>
<script type="text/javascript" src="__STATIC__/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/static/h-ui/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/common/common.js"></script>
<script type="text/javascript" src="__STATIC__/admin/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/common/image.js"></script>




</body>
</html>