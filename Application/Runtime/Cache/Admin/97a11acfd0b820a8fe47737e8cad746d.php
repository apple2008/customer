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
			<li class="active"><a href="<?php echo U('/Admin/index/collegeSchoolAdd');?>" >编辑成交客户</a></li>
		</ul>
		<form id="add_index_menu" method="post" name="edit_college" action="<?php echo U('/Admin/College/ajaxEditSchool');?>" class="form-horizontal js-ajax-form" novalidate="novalidate">

			<input type="hidden" name="id" value="<?php echo ($school['id']); ?>">

			<div class="control-group">
				<label class="control-label">项目状态</label>
				<div class="controls">
					<select name="status" id="navcid_select">

						<option value="1" <?php if($school['status'] == 1): ?>selected<?php endif; ?> >已收首款</option>

						<option value="2"  <?php if($school['status'] == 3): ?>selected<?php endif; ?> >项目已完成</option>

					</select>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">审核项目</label>
				<div class="controls">
					<input type="text" name="project" id="project" value="<?php echo ($school['project']); ?>" class="valid" aria-invalid="false" placeholder="请输入项目">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">项目金额</label>
				<div class="controls">
					<input type="text" name="pro_money" id="pro_money"  value="<?php echo ($school['pro_money']); ?>"  class="valid" aria-invalid="false" placeholder="请输入项目金额">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">企业名称</label>
				<div class="controls">
					<input type="text" name="corp_name" id="corp_name"  value="<?php echo ($school['corp_name']); ?>"   class="valid" aria-invalid="false" placeholder="请输入企业名称">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">地址</label>
				<div class="controls">
					<input type="text" name="address" id="address"  value="<?php echo ($school['address']); ?>"  class="valid" aria-invalid="false" placeholder="请输入地址">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">联系人</label>
				<div class="controls">
					<input type="text" name="name" id="name"  value="<?php echo ($school['name']); ?>"  class="valid" aria-invalid="false" placeholder="请输入联系人">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">职位</label>
				<div class="controls">
					<input type="text" name="position" id="position"  value="<?php echo ($school['position']); ?>" class="valid" aria-invalid="false" placeholder="请输入职位">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">电话</label>
				<div class="controls">
					<input type="text" name="telphone" id="telphone" value="<?php echo ($school['telphone']); ?>"  class="valid" aria-invalid="false" placeholder="请输入电话">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">手机号</label>
				<div class="controls">
					<input type="text" name="mobile" id="mobile"  value="<?php echo ($school['mobile']); ?>" class="valid" aria-invalid="false" placeholder="请输入手机号">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">邮箱</label>
				<div class="controls">
					<input type="text" name="email" id="email" value="<?php echo ($school['email']); ?>"  class="valid" aria-invalid="false" placeholder="请输入邮箱">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">业务</label>
				<div class="controls">
					<input type="text" name="business" id="business"  value="<?php echo ($school['business']); ?>" class="valid" aria-invalid="false" placeholder="请输入业务">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">辅导顾问</label>
				<div class="controls">
					<input type="text" name="help_man" id="help_man"  value="<?php echo ($school['help_man']); ?>"  class="valid" aria-invalid="false" placeholder="请输入辅导顾问">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">首款</label>
				<div class="controls">
					<input type="text" name="first_money" id="first_money" value="<?php echo ($school['first_money']); ?>"  class="valid" aria-invalid="false" placeholder="请输入首款">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">尾款</label>
				<div class="controls">
					<input type="text" name="last_money" id="last_money" value="<?php echo ($school['last_money']); ?>"class="valid" aria-invalid="false" placeholder="请输入尾款">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">预计审核时间</label>
				<div class="controls">
					<input type="text" id="check_time" name="check_time" value="<?php echo $school['check_time'];?>" class="js-datetime date">

				</div>
			</div>

			<div class="control-group">
				<label class="control-label">审核机构</label>
				<div class="controls">
					<input type="text" name="check_setup" id="outlink_input" value="<?php echo ($school['check_setup']); ?>" class="valid" aria-invalid="false" placeholder="请输入审核机构">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">最终审核时间</label>
				<div class="controls">
					<input type="text" id="last_check_time" name="last_check_time" value="<?php echo $school['last_check_time'];?>" class="js-datetime date">

				</div>
			</div>


			<div class="form-actions">
				<button type="button" onclick="editCollege()" class="btn btn-primary js-ajax-submit">修改</button>
				<a class="btn" href="javascript:history.back(-1);">返回</a>
			</div>

		</form>
	</div>

<script src="/Public/admin/js/load.js"></script>
<!-- 公共 -->
<script src="/Public/common/js/jquery-1.8.3.min.js"></script>
<script src="/Public/common/js/bootstrap.min.js"></script>



<script type="text/javascript" src="/Public/admin/js/ajaxpost_college.js?v=2122222"></script>
</body>
</html>