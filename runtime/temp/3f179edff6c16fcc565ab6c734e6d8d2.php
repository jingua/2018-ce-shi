<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\phpStudy\WWW\localhost\tp50\public/../application/admin\view\featured\index.html";i:1517149481;s:80:"D:\phpStudy\WWW\localhost\tp50\public/../application/admin\view\common\meta.html";i:1517148103;s:80:"D:\phpStudy\WWW\localhost\tp50\public/../application/admin\view\common\foot.html";i:1517148076;}*/ ?>
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
<style>
	.tp5-o2o .pagination li{display:inline; padding-left:10px;}
.pagination .active{color:red}
.pagination .disabled{color:#888888}

</style>
</head>
<body>
<!-- menu -->
<nav class="breadcrumb">
	<i class="Hui-iconfont">&#xe67f;</i> 首页 
	<span class="c-gray en">&gt;</span> 分类管理 
	<span class="c-gray en">&gt;</span> 分类列表 
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" 
	href="javascript:location.replace(location.href);" title="刷新" >
	<i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<!-- content -->
<div class="page-container">
	<div class="text-l"> 日期范围：

		<input type="text" class="input-text" style="width:250px" 
		placeholder="请输入分类名称" id="" name="">

		<button type="submit" class="btn btn-success radius" id="" name="">
		<i class="Hui-iconfont">&#xe665;</i> 搜分类</button>
	</div>

	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
	<span class="l">

	<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius">
	<i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> 

	<a href="javascript:;" onclick="o2o_s_add('添加分类','<?php echo url('category/add'); ?>','','810')" 
	class="btn btn-primary radius">
	<i class="Hui-iconfont">&#xe600;</i> 添加分类</a>
	</span> 

	<span class="r" style="line-height:28px;">共有数据：<strong>88</strong> 条</span> 
	</div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg">
		<thead>
			<tr class="text-c">
				<th><input type="checkbox" name="" value=""></th>
				<th>ID</th>
				<th>分类名称</th>
				<th>排序</th>
				<th>状态</th>
				<th>添加时间</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td><?php echo $vo['id']; ?></td>
				<td><?php echo $vo['title']; ?></td>
				<td></td>
				<td></td>
				<td></td>
				<td>

				<a title="编辑" href="javascript:;" 
				onclick="o2o_s_add('编辑','<?php echo url('featured/edit',['id'=>$vo['id']]); ?>','','510')"
				class="ml-5" style="text-decoration:none">
				<i class="Hui-iconfont">&#xe6df;</i></a> 

				<a title="删除" href="javascript:;" 
				onclick="o2o_del('<?php echo url('featured/del',['id'=>$vo['id']]); ?>')" class="ml-5"
				style="text-decoration:none">
				<i class="Hui-iconfont">&#xe6e2;</i></a>

				</td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	</div>
</div>
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




<script type="text/javascript">

</script> 
</body>
</html>