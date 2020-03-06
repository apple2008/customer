<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="zh_CN" style="overflow: hidden;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<title>客户系统-后台管理中心</title>


<meta name="description" content="This is page-header (.page-header &gt; h1)">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="This is page-header (.page-header &gt; h1)">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="/Public/admin/css/theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="/Public/admin/css/simplebootadminindex.min.css">
<link href="/Public/admin/css/simplebootadmin.css" rel="stylesheet">


<!--[if IE 7]>
	<link rel="stylesheet" href="/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
<![endif]-->

<!-- 公共 -->
<link href="/Public/common/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<style>
.navbar .nav_shortcuts .btn{margin-top: 5px;}
.macro-component-tabitem{width:101px;}

/*-----------------导航hack--------------------*/
.nav-list>li.open{position: relative;}
.nav-list>li.open .back {display: none;}
.nav-list>li.open .normal {display: inline-block !important;}
.nav-list>li.open a {padding-left: 7px;}
.nav-list>li .submenu>li>a {background: #fff;}
.nav-list>li .submenu>li a>[class*="fa-"]:first-child{left:20px;}
.nav-list>li ul.submenu ul.submenu>li a>[class*="fa-"]:first-child{left:30px;}
/*----------------导航hack--------------------*/
#think_page_trace_open{left: 0 !important;
right: initial !important;}			
</style>



</head>
<body>

	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a href="http://www.wazyb.com/" class="brand">
				 <small>汉东客户管理系统中心</small>
				</a>
				<div class="pull-left nav_shortcuts">
					<!--<a class="btn btn-small btn-success" href="javascript:load('<?php echo U('/Admin/index/indexMenuManage');?>')" title="分类管理">
						<i class="fa fa-th"></i>
					</a>
					<a class="btn btn-small btn-info" href="javascript:load('<?php echo U('/Admin/index/articleManage');?>')" title="文章管理">
						<i class="fa fa-pencil"></i>
					</a>
					<a class="btn btn-small btn-danger" href="" title="清除缓存">
						<i class="fa fa-trash-o"></i>
					</a>
					<a class="btn btn-small" href="" title="后台菜单">
						<i class="fa fa-list"></i>
					</a>-->
				</div>

				<ul class="nav simplewind-nav pull-right">
					<li class="light-blue">

						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
    					 <img class="nav-user-photo" width="30" height="30" src="/Public/admin/img/logo-18.png" alt="admin">
    					 <span class="user-info">欢迎, <?php echo ($_SESSION['AdminUserInfo']['user_name']); ?></span>
							<i class="fa fa-caret-down"></i>
						</a>

						<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
							<li>
							 <a href="javascript:;" onclick="load('/Admin/index/AdminUserInfo')"><i class="fa fa-user"></i>修改信息</a>
							</li>

							<li>
							<a href="javascript:;" onclick="load('/Admin/index/modiAdminPass')"><i class="fa fa-lock"></i>修改密码</a>
							</li>

							<li>
							 <a href="javascript:;" onclick="outLogin()"><i class="fa fa-sign-out"></i>退出</a>
							</li>
						</ul>

					</li>
				</ul>

			</div>
		</div>
	</div>



	<div class="main-container container-fluid">
		<div class="sidebar" id="sidebar">
			<div id="nav_wraper" style="height: 904px; overflow: auto;">
			<ul class="nav nav-list">
			  <?php $__FOR_START_2007__=0;$__FOR_END_2007__=count($admin_menu_list);for($i=$__FOR_START_2007__;$i < $__FOR_END_2007__;$i+=1){ if(!empty($admin_menu_list[$i]['one'][0]['menu_name'])): ?><li>
                     <a href="javascript:load('<?php echo ($admin_menu_list[$i]['url']); ?>')" class="dropdown-toggle">
                       <i class="fa fa-list normal"></i>
					   <span class="menu-text normal"><?php echo ($admin_menu_list[$i]['menu_name']); ?></span>
					     <b class="arrow fa fa-angle-right normal"></b>
						   <i class="fa fa-reply back"></i>
							<span class="menu-text back">返回</span>
				     </a>

				      <ul class="submenu">


                        <?php $__FOR_START_2244__=0;$__FOR_END_2244__=count($admin_menu_list[$i]['one']);for($j=$__FOR_START_2244__;$j < $__FOR_END_2244__;$j+=1){ if(!empty($admin_menu_list[$i]['one'][$j]['sec'][0]['menu_name'])): ?><li>
                                <a href="javascript:load('<?php echo ($admin_menu_list[$i]['one'][$j]['url']); ?>')" class="dropdown-toggle">&nbsp;
                                  <i class="fa fa-caret-right"></i>
						            <span class="menu-text"><?php echo ($admin_menu_list[$i]['one'][$j]['menu_name']); ?></span>
							        <b class="arrow fa fa-angle-right"></b>
							    </a>
                                  <ul class="submenu">

                                  	<?php $__FOR_START_9133__=0;$__FOR_END_9133__=count($admin_menu_list[$i]['one'][$j]['sec']);for($o=$__FOR_START_9133__;$o < $__FOR_END_9133__;$o+=1){ ?><li>
			                                <a href="javascript:load('<?php echo ($admin_menu_list[$i]['one'][$j]['sec'][$o]['url']); ?>')">&nbsp;&nbsp;
			                                  <i class="fa fa-angle-double-right"></i>
									            <span class="menu-text"><?php echo ($admin_menu_list[$i]['one'][$j]['sec'][$o]['menu_name']); ?></span>
										        
										    </a>
										  </li><?php } ?>

                                  </ul>
                                </li>

                        	<?php else: ?>
                        	        <li>
				                     <a href="javascript:load('<?php echo ($admin_menu_list[$i]['one'][$j]['url']); ?>')">&nbsp;
				                       <i class="fa fa-caret-right"></i>
									   <span class="menu-text normal"><?php echo ($admin_menu_list[$i]['one'][$j]['menu_name']); ?></span>
								     </a>
				                    </li><?php endif; } ?>

                      </ul>
                   </li>
                <?php else: ?>
                    <li>
                     <a href="javascript:load('<?php echo ($admin_menu_list[$i]['url']); ?>')">
                       <i class="fa fa-list normal"></i>
					   <span class="menu-text normal"><?php echo ($admin_menu_list[$i]['menu_name']); ?></span>

				     </a>
                    </li><?php endif; } ?>

				
			</ul>
			</div>
		</div>

		<div class="main-content">
			<div class="breadcrumbs" id="breadcrumbs">
				<a id="task-pre" class="task-changebt" style="display: none;">←</a>
				<div id="task-content" style="width: 236px;">

				</div>
				
				<a id="task-next" class="task-changebt" style="display: none;">→</a>
			</div>

			<div class="page-content" id="content">
				
			<iframe id="ifram" style="width: 100%; height: 100%; display: block;" frameborder="0" class="appiframe" src="/Admin/index/main" id="appiframe-7Portal"></iframe>
			</div>

		</div>

	</div>
	
	<script src="/Public/admin/js/load.js"></script>
<!-- 公共 -->
<script src="/Public/common/js/jquery-1.8.3.min.js"></script>
<script src="/Public/common/js/bootstrap.min.js"></script>



	<script>
	var ismenumin = $("#sidebar").hasClass("menu-min");
	$(".nav-list").on( "click",function(event) {
		var closest_a = $(event.target).closest("a");
		if (!closest_a || closest_a.length == 0) {
			return
		}
		if (!closest_a.hasClass("dropdown-toggle")) {
			if (ismenumin && "click" == "tap" && closest_a.get(0).parentNode.parentNode == this) {
				var closest_a_menu_text = closest_a.find(".menu-text").get(0);
				if (event.target != closest_a_menu_text && !$.contains(closest_a_menu_text, event.target)) {
					return false
				}
			}
			return
		}
		var closest_a_next = closest_a.next().get(0);
		if (!$(closest_a_next).is(":visible")) {
			var closest_ul = $(closest_a_next.parentNode).closest("ul");
			if (ismenumin && closest_ul.hasClass("nav-list")) {
				return
			}
			closest_ul.find("> .open > .submenu").each(function() {
						if (this != closest_a_next && !$(this.parentNode).hasClass("active")) {
							$(this).slideUp(150).parent().removeClass("open")
						}
			});
		}
		if (ismenumin && $(closest_a_next.parentNode.parentNode).hasClass("nav-list")) {
			return false;
		}
		$(closest_a_next).slideToggle(150).parent().toggleClass("open");
		return false;
	});
	</script>
<script type="text/javascript">
	/*$(document).ready(function() {
		// body...
		$("#content").load("/admin/index/newslist");

	});*/
	$(document).ready(function() {
		// body...
		$('#content').css('height',window.outerHeight-200+'px');
		// alert(window.outerHeight);
	});
</script>
<script type="text/javascript" src="/Public/admin/js/ajaxpost_admin.js?v=2011112"></script>
</body>
</html>