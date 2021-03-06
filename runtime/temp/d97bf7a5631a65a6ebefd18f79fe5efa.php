<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpStudy\WWW\localhost\tp50\public/../application/admin\view\featured\add.html";i:1524547068;s:80:"D:\phpStudy\WWW\localhost\tp50\public/../application/admin\view\common\meta.html";i:1517148103;s:80:"D:\phpStudy\WWW\localhost\tp50\public/../application/admin\view\common\foot.html";i:1517148076;}*/ ?>
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
.form-horizontal .form-label {
    width:160px;
}
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
<article class="page-container">
	<form action="<?php echo url('featured/save'); ?>" method="post" class="form form-horizontal" id="form-member-add">

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">标题</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" 
				placeholder="请输入标题" id="title" name="title">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">所属分类</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<span class="select-box" style="width:180px;">
					<select class="select cityId" size="1" name="type">
						 <option value="0">--请选择--</option>
		                  <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		                  <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>
		                  <?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span> 
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">推荐图</label>
			<div class="formControls col-xs-8 col-sm-9">
				    <input id="file_upload"  type="file" multiple="true" >
        			<img style="display: none" id="upload_org_code_img" src="" width="150" height="150">
        			<input id="file_upload_image" name="image" type="hidden" multiple="true" value="">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">url</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" 
				placeholder="请输入分类名称" id="url" name="url">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">门店绍介</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="description" id="description" cols="30" rows="10"></textarea>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"></label>
			<div class="formControls col-xs-8 col-sm-9">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				<button onClick="layer_close();" class="btn btn-default radius" type="button">
				&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>

	</form>
</article>
<script src="__STATIC__/admin/lib/ue/ueditor.config.js"></script>
<script src="__STATIC__/admin/lib/ue/ueditor.all.min.js"></script>
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




<script>
  var ue = UE.getEditor("description");
  var SCOPE = {
      'uploadify_swf' : "__STATIC__/admin/uploadify/uploadify.swf",
      'image_upload' : "<?php echo url('api/image/upload'); ?>",
  }
</script>
</body>
</html>