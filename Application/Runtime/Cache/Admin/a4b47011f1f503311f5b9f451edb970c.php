<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
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

<!-- 文本编辑框的css和js start -->
<link rel="stylesheet" href="/kind/themes/default/default.css"/>
<link rel="stylesheet" href="/kind/plugins/code/prettify.css"/>
<script charset="utf-8" src="/kind/kindeditor.js"></script>
<script charset="utf-8" src="/kind/lang/zh_CN.js"></script>
<script charset="utf-8" src="/kind/plugins/code/prettify.js"></script>
<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : '/kind/plugins/code/prettify.css',
				uploadJson : '/kind/php/upload_json.php',
				fileManagerJson : '/kind/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				},
				afterBlur:function(){this.sync();}
			});
			prettyPrint();
		});
</script>
<style type="text/css">
.ke-dialog-row{
	margin: 0px;
}
.ke-dialog-row .ke-input-text{
	color: #000;
	background-color: #fff;
}
</style>
<!-- 文本编辑框的css和js end -->
<style type="text/css">
.one_img_uplode{
border: 1px solid #696;padding: 60px 0;text-align: center; width: 200px;
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;
-webkit-box-shadow: #666 0px 0px 10px;
-moz-box-shadow: #666 0px 0px 10px;
}

</style>
<!-- 时间控件 -->
<link rel="stylesheet" href="/Public/common/css/calendar.css">
<style type="text/css">
.calendar ul, .calendar ol, .calendar li {
	list-style: none;
	padding: 0;
	margin: 0;
}
</style>
<!-- 时间控件 -->
</head>


<body>
<div class="aui_state_lock" style="width: 100%;height: 100%; position: fixed;display: none;color: #666; z-index: 5;">
 <div class="one_img_uplode" style="width: 850px; height: 515px; position: fixed; margin: auto;left: 15%;top:1%;padding:0px;background:#fff;border: 0px none;border-radius: 10px;">

    <div class="upload_head" style="width: 100%;height: 50px;background-color: #f6f6f6;border-radius: 10px;">
       <span id="css" style="float: left; margin: 15px;font-size: 14px;" ><b>图片上传<h1></h1></b></span>
       <a href="javascript:;" onclick="upload_close('.aui_state_lock')" style="float: right;font-size: 35px; margin: 10px; width: 30px;height: 20px; text-decoration: none;" >×</a>
    </div>

 	<iframe id="plupload" src="/admin/index/plupload" name="Open1481852213963" frameborder="0" allowtransparency="true" style="width: 830px; height: 400px;margin: auto;background:#fff;border: 0px none;" ></iframe>

 	<div class="aui_buttons" style="width: 100%;height: 50px;background-color: #f6f6f6;border-radius: 10px;">
 	  <button class="btn" href="#" onclick="upload_close('.aui_state_lock')" type="button" style="float: right;margin: 10px;">返回</button>
	  <button class="btn btn-primary" onclick="img_submit()" style="float: right;margin: 10px;">提交</button>
	  
	</div>
 </div>
</div>






<div class="aui_state_lock_photos" style="width: 100%;height: 100%; position: fixed;display: none;color: #666; z-index: 5;">
 <div class="one_img_uplode" style="width: 850px; height: 515px; position: fixed; margin: auto;left: 15%;top:1%;padding:0px;background:#fff;border: 0px none;border-radius: 10px;">

    <div class="upload_head" style="width: 100%;height: 50px;background-color: #f6f6f6;border-radius: 10px;">
       <span id="css" style="float: left; margin: 15px;font-size: 14px;" ><b>多图片上传<h1></h1></b></span>
       <a href="javascript:;" onclick="upload_close('.aui_state_lock_photos')" style="float: right;font-size: 35px; margin: 10px; width: 30px;height: 20px; text-decoration: none;" >×</a>
    </div>

 	<iframe id="plupload_photos" src="/admin/index/plupload" name="Open1481852213963" frameborder="0" allowtransparency="true" style="width: 830px; height: 400px;margin: auto;background:#fff;border: 0px none;" ></iframe>

 	<div class="aui_buttons" style=" width: 100%;height: 50px;background-color: #f6f6f6;border-radius: 10px;">
 	  <button class="btn" href="#" onclick="upload_close('.aui_state_lock_photos')" type="button" style="float: right;margin: 10px;">返回</button>
	  <button class="btn btn-primary" onclick="img_submit_photos()" style="float: right;margin: 10px;">提交</button>
	  
	</div>
 </div>
</div>





<div class="aui_dialog" style="width: 100%;height: 100%; position: fixed;display: none;color: #666; z-index: 5;">
 <div class="one_img_uplode" style="width: 420px; height: 460px; position: fixed; margin: auto;left: 15%;top:1%;padding:0px;background:#fff;border: 0px none;border-radius: 10px;">

    <div class="upload_head" style="width: 100%;height: 50px;background-color: #f6f6f6;border-radius: 10px;">
       <span id="css" style="float: left; margin: 15px;font-size: 14px;" ><b>图片查看<h1></h1></b></span>
       <a href="javascript:;" onclick="upload_close('.aui_dialog')" style="float: right;font-size: 35px; margin: 10px; width: 30px;height: 20px; text-decoration: none;" >×</a>
    </div>
    <div class="img_attr" style="width: 100%;height: 360px;"><img style="margin:40px;" src="" width="260px" height="200px"/></div>
 	<div class="aui_buttons" style="width: 100%;height: 50px;background-color: #f6f6f6;border-radius: 10px;">
 	  
	</div>
 </div>
</div>





<div class="wrap js-check-wrap">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('/Admin/index/mindManage');?>" >意向客户管理</a></li>
			<li class="active"><a href="<?php echo U('/Admin/index/addArticle');?>" >添加客户</a></li>
		</ul>
		<form name="example" action="/Admin/index/upload_article" method="post" class="form-horizontal js-ajax-forms" id="upload_article" enctype="multipart/form-data" novalidate="novalidate">
			<div class="row-fluid">
				<div class="span9">
					<table class="table table-bordered">
						<tbody><tr>
							<th width="80">分类</th>
							<td>
								<select name="post[cate_id]">
										<option value="1">A类</option>
									    <option value="2">B类</option>
									    <option value="3">C类</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>项目名称</th>
							<td>
								<input type="text" style="width:400px;" name="post[project]" id="project" required=""  data-rule-required="true"  value=""  placeholder="项目名称" aria-required="true">
								<span class="form-required"></span>
							</td>
						</tr>
						<tr>
							<th>企业名称</th>
							<td>
								<input type="text" style="width:400px;" name="post[corp_name]" id="title" required="" value="" placeholder="企业名称" aria-required="true">
								<span class="form-required"></span>
							</td>
						</tr>
						<tr>
							<th>地址</th>
							<td><input type="text" name="post[address]" id="address" value="" style="width: 400px" placeholder="请输入地址"> </td>
						</tr>
						<tr>
							<th>联系人</th>
							<td><input type="text" name="post[name]" id="name" value="" style="width: 400px" placeholder="请输入联系人"></td>
						</tr>
						<tr>
							<th>职位</th>
							<td><input type="text" name="post[position]" id="position" value="" style="width: 400px" placeholder="请输入职位"></td>
						</tr>
						<tr>
							<th>电话</th>
							<td><input type="text" name="post[telphone]" id="telphone" value="" style="width: 400px" placeholder="请输入电话"></td>
						</tr>
						<tr>
							<th>手机号</th>
							<td><input type="text" name="post[mobile]" id="mobile" value="" style="width: 400px" placeholder="请输入手机号"></td>
						</tr>
						<tr>
							<th>邮箱</th>
							<td><input type="text" name="post[email]" id="email" value="" style="width: 400px" placeholder="请输入邮箱"></td>
						</tr>
						<tr>
							<th>业务</th>
							<td><input type="text" name="post[business]" id="business" value="" style="width: 400px" placeholder="请输入业务"></td>
						</tr>
						<tr>
							<th>企业人数</th>
							<td><input type="text" name="post[corp_num]" id="corp_num" value="" style="width: 400px" placeholder="请输入企业人数"></td>
						</tr>
						<tr>
							<th>来源</th>
							<td><input type="text" name="post[source]" id="source" value="" style="width: 400px" placeholder="请输入来源"></td>
						</tr>
						<tr>
							<th>跟进记录</th>
							<td>
								<textarea name="post[mark]" id="mark" style="width: 98%; height: 70px;" placeholder="请填写跟进记录"></textarea>
							</td>
						</tr>
					    </tbody>
				    </table>
					<a class="btn btn-primary js-ajax-submit" href="javascript:ajax_post_article()">提交</a>
				</div>

	<!--			<div class="span3">
					<table class="table table-bordered">
						<tbody>
						&lt;!&ndash;  <tr>
							<th><b>缩略图</b></th>
						  </tr>
						  <tr>
							<td>
							  <div style="text-align: center;">
							    <input type="hidden" name="post[thumb]" id="thumb" value="/Public/common/default_img/default-thumbnail.png">


							      <img onclick="upload_open('.aui_state_lock')" src="/Public/common/default_img/default-thumbnail.png" id="thumb-preview" width="135" style="cursor: pointer;">

							    <input type="button" class="btn btn-small" onclick="call_img($(this))" value="取消图片">
							  </div>
							</td>
						  </tr>

						  <tr>
							<th><b>发布时间</b></th>
						  </tr>

						  <tr>
							<td><input type="text" id="start_time" name="post[datetime]" value="<?php echo date('Y-m-d H:i:s');?>" class="js-datetime date" style="width: 160px;">
                             

		  <div id="start_times" class="calendar calendar-modal calendar-d" style="width: 280px; height: 330px; left: 561.5px; top: 581px; z-index: 999;"><div class="calendar-inner" style="width: 280px;"><div class="calendar-views"><div class="view view-date" style="width: 280px;"><div class="calendar-hd"><a href="javascript:;" data-calendar-display-date="" class="calendar-display">2017/<span class="m">1</span></a><div class="calendar-arrow"><span class="prev" title="上一月" data-calendar-arrow-date="">&lt;</span><span class="next" title="下一月" data-calendar-arrow-date="">&gt;</span></div></div><div class="calendar-ct" style="width: 280px; height: 280px;"><ol class="week"><li style="width:40px;height:40px;line-height:40px">日</li><li style="width:40px;height:40px;line-height:40px">一</li><li style="width:40px;height:40px;line-height:40px">二</li><li style="width:40px;height:40px;line-height:40px">三</li><li style="width:40px;height:40px;line-height:40px">四</li><li style="width:40px;height:40px;line-height:40px">五</li><li style="width:40px;height:40px;line-height:40px">六</li></ol><ul class="date-items"><li style="width: 280px;"><ol class="days"><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">27</li><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">28</li><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">29</li><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">30</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">1</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">2</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">3</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">4</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">5</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">6</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">7</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">8</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">9</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">10</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">11</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">12</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">13</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">14</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">15</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">16</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">17</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">18</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">19</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">20</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">21</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">22</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">23</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">24</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">25</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">26</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">27</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">28</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">29</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">30</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">31</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">1</li><li style="width:40px;height:40px;line-height:40px" class="new now" data-calendar-day="">2</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">3</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">4</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">5</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">6</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">7</li></ol></li><li style="width: 280px;"><ol class="days"><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">25</li><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">26</li><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">27</li><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">28</li><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">29</li><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">30</li><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">31</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">1</li><li style="width:40px;height:40px;line-height:40px" class=" now" data-calendar-day="">2</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">3</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">4</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">5</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">6</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">7</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">8</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">9</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">10</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">11</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">12</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">13</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">14</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">15</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">16</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">17</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">18</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">19</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">20</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">21</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">22</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">23</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">24</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">25</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">26</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">27</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">28</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">29</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">30</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">31</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">1</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">2</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">3</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">4</li></ol></li><li style="width: 280px;"><ol class="days"><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">29</li><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">30</li><li style="width:40px;height:40px;line-height:40px" class="old" data-calendar-day="">31</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">1</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">2</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">3</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">4</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">5</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">6</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">7</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">8</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">9</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">10</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">11</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">12</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">13</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">14</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">15</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">16</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">17</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">18</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">19</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">20</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">21</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">22</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">23</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">24</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">25</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">26</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">27</li><li style="width:40px;height:40px;line-height:40px" class="" data-calendar-day="">28</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">1</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">2</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">3</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">4</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">5</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">6</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">7</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">8</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">9</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">10</li><li style="width:40px;height:40px;line-height:40px" class="new" data-calendar-day="">11</li></ol></li></ul></div></div><div class="view view-month" style="width: 280px;"><div class="calendar-hd"><a href="javascript:;" data-calendar-display-month="" class="calendar-display">2017</a><div class="calendar-arrow"><span class="prev" title="上一年" data-calendar-arrow-month="">&lt;</span><span class="next" title="下一年" data-calendar-arrow-month="">&gt;</span></div></div><ol class="calendar-ct month-items" style="width: 280px; height: 280px;"><li style="width:70px;height:70px;line-height:70px" data-calendar-month="" class="now">1月</li><li style="width:70px;height:70px;line-height:70px" data-calendar-month="">2月</li><li style="width:70px;height:70px;line-height:70px" data-calendar-month="">3月</li><li style="width:70px;height:70px;line-height:70px" data-calendar-month="">4月</li><li style="width:70px;height:70px;line-height:70px" data-calendar-month="">5月</li><li style="width:70px;height:70px;line-height:70px" data-calendar-month="">6月</li><li style="width:70px;height:70px;line-height:70px" data-calendar-month="">7月</li><li style="width:70px;height:70px;line-height:70px" data-calendar-month="">8月</li><li style="width:70px;height:70px;line-height:70px" data-calendar-month="">9月</li><li style="width:70px;height:70px;line-height:70px" data-calendar-month="">10月</li><li style="width:70px;height:70px;line-height:70px" data-calendar-month="">11月</li><li style="width:70px;height:70px;line-height:70px" data-calendar-month="">12月</li></ol></div></div></div><div class="calendar-label"><p>HelloWorld</p><i></i></div></div>
	
							</td>
						  </tr>&ndash;&gt;
						</tbody>
					</table>
			</div>

			<div class="form-actions">
				<a class="btn btn-primary js-ajax-submit" href="javascript:ajax_post_article()">提交</a>
			&lt;!&ndash;	<a class="btn" href="javascript:;">返回</a>
				 <button class="btn btn-primary js-ajax-submit" type="submit">提交1</button>&ndash;&gt;
			</div>
		</form>-->
</div>
</form>

<script src="/Public/admin/js/load.js"></script>
<!-- 公共 -->
<script src="/Public/common/js/jquery-1.8.3.min.js"></script>
<script src="/Public/common/js/bootstrap.min.js"></script>



<script type="text/javascript" src="/Public/admin/js/ajaxpost_article.js?v=201943434"></script>
<!-- 时间控件 -->
<script src="/Public/common/js/calendar.js"></script>
		<script>
		    $('#ca').calendar({
		        width: 320,
		        height: 320,
		        data: [
					{
					  date: '2015/12/24',
					  value: 'Christmas Eve'
					},
					{
					  date: '2015/12/25',
					  value: 'Merry Christmas'
					},
					{
					  date: '2016/01/01',
					  value: 'Happy New Year'
					}
				],
		    });
            $('#start_times').calendar({
		        trigger: '#start_time',
		        zIndex: 999,
				format: 'yyyy-mm-dd',
		    });
		</script>
<!-- 时间控件 -->

</body>
</html>