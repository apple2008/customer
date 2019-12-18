<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
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
			<li><a href="<?php echo U('/Admin/index/majorManage');?>" >行程管理</a></li>
			<li ><a href="<?php echo U('/Admin/index/collegeMajorAdd');?>" >添加本周行程</a></li>
			<li class="active"><a href="<?php echo U('/Admin/index/collegeMajorNextAdd');?>" >添加下周行程</a></li>

		</ul>
		<form id="add_index_menu" name="edit_college" action="<?php echo U('/Admin/College/ajaxAddNextMajor');?>" method="post" class="form-horizontal js-ajax-form" novalidate="novalidate">
			<fieldset>
				<div class="control-group">
					<label class="control-label"><?php echo ($week_list[0]['date']); ?>   <?php echo ($week_list[0]['week']); ?></label>
					<div class="controls">
						<input type="text" name="content[]" id="outlink_input1" class="valid" aria-invalid="false" placeholder="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo ($week_list[1]['date']); ?>   <?php echo ($week_list[1]['week']); ?></label>
					<div class="controls">
						<input type="text" name="content[]" id="outlink_input2" class="valid" aria-invalid="false" placeholder="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo ($week_list[2]['date']); ?>   <?php echo ($week_list[2]['week']); ?></label>
					<div class="controls">
						<input type="text" name="content[]" id="outlink_input3" class="valid" aria-invalid="false" placeholder="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo ($week_list[3]['date']); ?>   <?php echo ($week_list[3]['week']); ?></label>
					<div class="controls">
						<input type="text" name="content[]" id="outlink_input4" class="valid" aria-invalid="false" placeholder="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo ($week_list[4]['date']); ?>   <?php echo ($week_list[4]['week']); ?></label>
					<div class="controls">
						<input type="text" name="content[]" id="outlink_input5" class="valid" aria-invalid="false" placeholder="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo ($week_list[5]['date']); ?>   <?php echo ($week_list[5]['week']); ?></label>
					<div class="controls">
						<input type="text" name="content[]" id="outlink_input6" class="valid" aria-invalid="false" placeholder="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo ($week_list[6]['date']); ?>   <?php echo ($week_list[6]['week']); ?></label>
					<div class="controls">
						<input type="text" name="content[]" id="outlink_input7" class="valid" aria-invalid="false" placeholder="">
					</div>
				</div>

			</fieldset>
			<div class="form-actions">
				<button type="button" onclick="addCollege()" class="btn btn-primary js-ajax-submit">添加</button>
				<a class="btn" href="javascript:history.back(-1);">返回</a>
			</div>

		</form>
	</div>

<script src="/Public/admin/js/load.js"></script>
<!-- 公共 -->
<script src="/Public/common/js/jquery-1.8.3.min.js"></script>
<script src="/Public/common/js/bootstrap.min.js"></script>



<script type="text/javascript" src="/Public/admin/js/ajaxpost_college.js?v=2019023232"></script>
</body>
</html>