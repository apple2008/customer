<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
<!-- 与首页的一样  重复加载 start -->
<link href="/Public/admin/css/theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="/Public/admin/css/simplebootadminindex.min.css">
<link href="/Public/admin/css/simplebootadmin.css" rel="stylesheet">


<!--[if IE 7]>
	<link rel="stylesheet" href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
<![endif]-->

<!-- 公共 -->
<link href="/Public/common/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- 与首页的一样  重复加载 end -->
</head>
<body>
	<div class="wrap" style="padding: 5px;">
		<ul class="nav nav-tabs" id="uploader-tabs">
			<li class="active" data-tab="upload-file">
			  <a href="#upload-file-tab" data-toggle="tab">上传文件</a>
			</li>

			<li data-tab="network-file">
			  <a href="#network-file-tab" data-toggle="tab">网络文件</a>
			</li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane active" id="upload-file-tab">
				<div class="file-upload-btn-wrapper">
					<!--选择按钮-->
					<form id="form_img" action="" method="post" enctype="multipart/form-data" style="display: inline;">

						<input type="file" name="myfile" id="select-files"/>
						<a href="javascript:ajax_post_img()" class="btn btn-primary js-ajax-submit">上传</a>
					</form>
					
					<span class="num">
						<?php if(empty($multi)): ?>最多上传<em>1</em>个附件,<?php endif; ?>
						单文件最大<em>2MB</em>,
						<em style="cursor: help;" title="可上传格式：" data-toggle="tooltip">支持格式？</em>
					</span>
				</div>
				<div class="files-wrapper">
					<ul id="files-container">
					</ul>
				</div>
			</div>
			
			<div class="tab-pane" id="network-file-tab">
				请输入网络地址<br>
				<input type="text" name="info[filename]" style="width: 600px;" placeholder="http://" id="network-file-input" onkeydown="if (event.keyCode==13) {$('#thumb img').attr('src',$('#network-file-input').val()).css('display','block');}">
			</div>

			<div id="thumb">
				<img id="thumb_img" src="" width="200px" height="200px" style="display: none;"/>
			</div>
		</div>
	</div>
</body>
<script src="/Public/admin/js/load.js"></script>
<!-- 公共 -->
<script src="/Public/common/js/jquery-1.8.3.min.js"></script>
<script src="/Public/common/js/bootstrap.min.js"></script>



    <script type="text/javascript">
	//全局变量
	var GV = {
	    ROOT: "/",
	    WEB_ROOT: "__WEB_ROOT__/",
	    JS_ROOT: "public/js/",
	    APP:'<?php echo (MODULE_NAME); ?>'/*当前应用名*/
	};
	</script>
    
    <script>
    	$(function(){
    		$("[data-toggle='tooltip']").tooltip();
    	});
    </script>
<script type="text/javascript" src="/Public/admin/js/ajaxpost_common.js"></script>
</html>