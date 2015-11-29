<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>北航-索尔直属学习中心-关于我们</title>
    <meta charset="UTF-8">
    <!-- cssreset -->
    <link rel="stylesheet" href="__PUBLIC__/css/cssreset-min.css">
    <!-- global -->
    <link rel="stylesheet" href="__PUBLIC__/css/global.css">
    <!-- main -->
    <link rel="stylesheet" href="__PUBLIC__/css/main.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-validation-1.12.0/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.js"></script>
  </head>
  <body>
  <!-- wrapper start-->
  <div class="wrapper">
  		<header>
  			<div class="head1">
  				<div class="logo pull-left"><img src="__PUBLIC__/img/logo.png" /></div>
  				<div class="mark pull-left"><img src="__PUBLIC__/img/mark.png" /></div>
  				<div class="tel pull-right"><img src="__PUBLIC__/img/tel.png" /></div>
  			</div>
  			<nav>
  				<div class="nav-list">
  					<ul class="nav-mian">
	  					<li><a href="index.html">网站首页</a></li>
	  					<li class="on-nav"><a href="about.html">中心介绍</a></li>
	  					<li><a href="#">招生专区</a></li>
	  					<li><a href="#">教务考务</a></li>
	  					<li><a href="registration.html">在线报名</a></li>
	  					<li><a href="#">学生专区</a></li>
	  					<li><a href="#">下载专区</a></li>
	  					<li><a href="#">联系我们</a></li>
	  				</ul>
  				</div>
  			</nav>
  		</header>
  		<br />
  		<div class="main">
  			<form method="post" action="__URL__/h_upload">
	标题<input type='text' name='title' /><br /><br />
	<textarea name='content' id='content'></textarea><br />
	<input type='submit' />
</form>

  		<footer>
        	<div class="f-box1"><p>Copyright <span>©</span> 2014 北京航空航天大学 All rights reserved</p></div>
      	</footer>
  </div>
  <!-- wrapper end -->
  <script type="text/javascript">
	
		UE.getEditor('content',{
           
        });
		
		window.UEDITOR_CONFIG = {
		
			
			
		}
	
</script>
  <script>
  $().ready(function() {
  	//表单验证
	$("#signupForm").validate({
		autoCreateRanges:true	,
        errorClass: "error",
        errorElement: "span",
		rules: {
			username: {
				required: true
			},
			tel: {
				required: true
			},
			
			qq: {
				required: true
			},
			zhuanye: {
				required: true
			}
		},
		messages: {
			username: {
				required: "请填写姓名！"
			},
			tel: {
				required: "请填写联系方式！"
			},
			qq:{
				required: "请填写QQ号码！"
			},
			zhuanye: {
				required: "请选择专业！"
			}
		}
	});


  });
  </script>
  </body>
</html>