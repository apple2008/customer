<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0054)http://www.thinkcmfx.com/index.php/Admin/nav/add/cid/1 -->
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

    <style>
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/Public/admin/css/theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="/Public/admin/css/simplebootadminindex.min.css">
<link href="/Public/admin/css/simplebootadmin.css" rel="stylesheet">


<!--[if IE 7]>
	<link rel="stylesheet" href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
<![endif]-->

<!-- 公共 -->
<link href="/Public/common/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="wrap">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('/Admin/index/indexMenuManage');?>">菜单管理</a></li>
			<li class="active"><a href="<?php echo U('/Admin/index/indexMenuAdd');?>">添加菜单</a></li>
		</ul>
		<form id="add_index_menu" method="post" class="form-horizontal js-ajax-form" novalidate="novalidate">
			<fieldset>
				<div class="control-group">
					<label class="control-label">菜单分类</label>
					<div class="controls">
						<select name="cid" id="navcid_select">
							<option value="1" selected="">主导航</option>
							<!-- <option value="3">erji</option> -->
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">父级</label>
					<div class="controls">
						<select name="parentid">
							<option value="0">/</option>
						  
						  <?php $__FOR_START_19489__=0;$__FOR_END_19489__=count($index_menu_list);for($i=$__FOR_START_19489__;$i < $__FOR_END_19489__;$i+=1){ if($pid == $index_menu_list[$i]['id']): ?><option selected="selected" value="<?php echo ($index_menu_list[$i]['id']); ?>"><?php echo ($index_menu_list[$i]['menu_name']); ?></option>
						   <?php else: ?>
						  	<option value="<?php echo ($index_menu_list[$i]['id']); ?>"><?php echo ($index_menu_list[$i]['menu_name']); ?></option><?php endif; } ?>
							
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">标签</label>
					<div class="controls">
						<input type="text" name="label" aria-required="true" value="" required=""><span class="form-required">*</span>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">链接</label>
					<div class="controls">
						<!-- <input type="radio" name="nav" id="outlink_radio" checked="checked"/> -->
						<input type="text" name="url" id="outlink_input" value="http://" class="valid" aria-invalid="false">
						<!-- <input type="radio" name="nav" id="selecturl_radio" checked="checked"/> -->
						<!-- <select id="selecthref" class="valid" aria-invalid="false" name="href">
							<option value="aG9tZQ==">首页</option>
							<optgroup label="文章分类">
								<option value="YToyOntzOjY6ImFjdGlvbiI7czoxNzoiUG9ydGFsL0xpc3QvaW5kZXgiO3M6NToicGFyYW0iO2E6MTp7czoyOiJpZCI7czoxOiIyIjt9fQ==">瀑布流</option>
								<option value="YToyOntzOjY6ImFjdGlvbiI7czoxNzoiUG9ydGFsL0xpc3QvaW5kZXgiO3M6NToicGFyYW0iO2E6MTp7czoyOiJpZCI7czoxOiIxIjt9fQ==">&nbsp;&nbsp;└─ 列表演示</option>
								<option value="YToyOntzOjY6ImFjdGlvbiI7czoxNzoiUG9ydGFsL0xpc3QvaW5kZXgiO3M6NToicGFyYW0iO2E6MTp7czoyOiJpZCI7czoxOiIzIjt9fQ==">牙山资源</option>
								<option value="YToyOntzOjY6ImFjdGlvbiI7czoxNzoiUG9ydGFsL0xpc3QvaW5kZXgiO3M6NToicGFyYW0iO2E6MTp7czoyOiJpZCI7czoxOiI0Ijt9fQ==">图片</option>
							</optgroup>
							<optgroup label="页面">
								<option value="YToyOntzOjY6ImFjdGlvbiI7czoxNzoiUG9ydGFsL1BhZ2UvaW5kZXgiO3M6NToicGFyYW0iO2E6MTp7czoyOiJpZCI7czoxOiIyIjt9fQ==">rweyhwe</option>
								<option value="YToyOntzOjY6ImFjdGlvbiI7czoxNzoiUG9ydGFsL1BhZ2UvaW5kZXgiO3M6NToicGFyYW0iO2E6MTp7czoyOiJpZCI7czoxOiIzIjt9fQ==">resour</option>
							</optgroup>
						</select> -->
					</div>
				</div>

				<!-- <div class="control-group">
					<label class="control-label">打开方式</label>
					<div class="controls">
						<select name="target">
							<option value="">默认</option>
							<option value="_blank">新窗口打开</option>
						</select>
					</div>
				</div> -->

				<!-- <div class="control-group">
					<label class="control-label">图标</label>
					<div class="controls">
						<input type="text" name="icon" value="">
					</div>
				</div> -->

				<!-- <div class="control-group">
					<label class="control-label">状态</label>
					<div class="controls">
						<select name="status">
							<option value="1">显示</option>
							<option value="0">隐藏</option>
						</select>
					</div>
				</div> -->

			</fieldset>
			<div class="form-actions">
				<button type="button" onclick="add_menu_list()" class="btn btn-primary js-ajax-submit">添加</button>
				<a class="btn" href="javascript:history.back(-1);">返回</a>
			</div>

		</form>
	</div>

<script src="/Public/admin/js/load.js"></script>
<!-- 公共 -->
<script src="/Public/common/js/jquery-1.8.3.min.js"></script>
<script src="/Public/common/js/bootstrap.min.js"></script>



<script type="text/javascript" src="/Public/admin/js/ajaxpost_menu.js"></script>
</body>
</html>