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
		    <li><a href="<?php echo U('/Admin/index/gradeManage');?>" >分数管理</a></li>
			<li class="active"><a href="<?php echo U('/Admin/index/collegeGradeAdd');?>" >添加分数</a></li>
		</ul>
		<form id="add_index_menu" name="edit_college" action="<?php echo U('/Admin/College/ajaxAddGrade');?>" class="form-horizontal js-ajax-form" novalidate="novalidate">
			<fieldset>
				<div class="control-group">
					<label class="control-label">地区</label>
					<div class="controls">
						<select name="aid" id="area" onclick="getSchool($(this).val())">
							<option value="0" selected="">请选择地区</option>
							<?php $__FOR_START_3372__=0;$__FOR_END_3372__=count($area);for($i=$__FOR_START_3372__;$i < $__FOR_END_3372__;$i+=1){ ?><option value="<?php echo ($area[$i]['id']); ?>"><?php echo ($area[$i]['name']); ?></option><?php } ?>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">学校</label>
					<div class="controls">
						<select name="sid" id="school" onclick="getMajor($(this).val(),$('#level').val())">
							<option value="0" selected="">请选择学校</option>
							<!-- <option value="3">erji</option> -->
						</select>
					</div>
				</div>


				<div class="control-group">
					<label class="control-label">层次</label>
					<div class="controls">
						<select name="lid" id="level" onclick="getMajor($('#school').val(),$(this).val())">
							<option value="0" selected="">请选择层次</option>
							<?php $__FOR_START_13301__=0;$__FOR_END_13301__=count($level);for($i=$__FOR_START_13301__;$i < $__FOR_END_13301__;$i+=1){ ?><option value="<?php echo ($level[$i]['id']); ?>"><?php echo ($level[$i]['name']); ?></option><?php } ?>
						</select>
					</div>
				</div>


				<div class="control-group">
					<label class="control-label">专业</label>
					<div class="controls">
						<select name="mid" id="major">
							<option value="0" selected="">请选择专业</option>
							<!-- <option value="3">erji</option> -->
						</select>
					</div>
				</div>


				<div class="control-group">
					<label class="control-label">年份</label>
					<div class="controls">
						<select name="year" id="year">
						  <?php $__FOR_START_30090__=0;$__FOR_END_30090__=count($year);for($i=$__FOR_START_30090__;$i < $__FOR_END_30090__;$i+=1){ ?><option value="<?php echo ($year[$i]['name']); ?>" selected=""><?php echo ($year[$i]['name']); ?></option><?php } ?>
						</select>
					</div>
				</div>


				<div class="control-group">
					<label class="control-label">分数</label>
					<div class="controls">
						<input type="text" name="code" id="outlink_input" class="valid" aria-invalid="false" placeholder="请输入分数...">
						
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">计划数</label>
					<div class="controls">
						<input type="text" name="planum" id="planum" class="valid" aria-invalid="false" placeholder="请输入计划数...">
						
					</div>
				</div>



			</fieldset>
			<div class="form-actions">
				<button type="button" onclick="editCollege()" class="btn btn-primary js-ajax-submit">添加</button>
				<a class="btn" href="javascript:history.back(-1);">返回</a>
			</div>

		</form>
	</div>

<script src="/Public/admin/js/load.js"></script>
<!-- 公共 -->
<script src="/Public/common/js/jquery-1.8.3.min.js"></script>
<script src="/Public/common/js/bootstrap.min.js"></script>



<script type="text/javascript" src="/Public/admin/js/ajaxpost_college.js"></script>
</body>
</html>