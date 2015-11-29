<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>北航-索尔直属学习中心-在线报名</title>
    <meta charset="UTF-8">
    <!-- cssreset -->
    <link rel="stylesheet" href="../../__PUBLIC__/css/cssreset-min.css">
    <!-- global -->
    <link rel="stylesheet" href="../../__PUBLIC__/css/global.css">
    <!-- main -->
    <link rel="stylesheet" href="../../__PUBLIC__/css/main.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../__PUBLIC__/js/jquery-1.10.2.min.js"></script>
	<script src="../../__PUBLIC__/js/jquery-validation-1.12.0/dist/jquery.validate.min.js"></script>

  </head>
  <body>
  <!-- wrapper start-->
  <div class="wrapper">
  		<header>
  			<div class="head1">
  				<div class="logo pull-left"><img src="../../__PUBLIC__/img/logo.png" /></div>
  				<div class="mark pull-left"><img src="../../__PUBLIC__/img/mark.png" /></div>
  				<div class="tel pull-right"><img src="../../__PUBLIC__/img/tel.png" /></div>
  			</div>
  			<nav>
  				<div class="nav-list">
  					<ul class="nav-mian">
	  					<li><a href="../../index">网站首页</a></li>
	  					<li><a href="<?php echo U('home://index/about');?>">中心介绍</a></li>
	  					<li><a href="#">招生专区</a></li>
	  					<li><a href="#">教务考务</a></li>
	  					<li class="on-nav"><a href="<?php echo U('home://index/registration');?>">在线报名</a></li>
	  					<li><a href="#">学生专区</a></li>
	  					<li><a href="#">下载专区</a></li>
	  					<li><a href="<?php echo U('home://index/contact');?>">联系我们</a></li>
	  				</ul>
  				</div>
  			</nav>
  		</header>
  		
  		<div class="main">
  			<div class="registration">
  				<div class="navigate">您现在的的位置：主页 >在线报名</div>
  				<div class="registration-box">
  					<div class="registration-box-l">
  					<form id="signupForm" method="post" action="__URL__/reg_upload">
  						<h1 class="registration-title">学员在线报名</h1>
  						<dl class="registratopn-form"><dt>姓名<span class="cred">*</span></dt><dd><input name="username" type="text" /><span class="error c666"></span></dd></dl>
  						<dl class="registratopn-form"><dt>联系方式<span class="cred">*</span></dt><dd><input name="tel" type="text" /><span class="error c666"></span></dd></dl>
  						<dl class="registratopn-form"><dt>QQ<span class="cred">*</span></dt><dd><input name="qq" type="text" /><span class="error c666"></span></dd></dl>
  						<dl class="registratopn-form"><dt>E-mail </dt><dd><input name="e-mail" type="text" /><span class="error c666"></span></dd></dl>
  						<dl class="registratopn-form"><dt>意向专业 </dt>
  							<dd>
	  							<select name="zhuanye" id='zhuanye'>
	  								<option value="1">请选择专业</option>
	  								<option value="2">请选择专业2</option>
	  							</select>
	  							<span class="error c666"></span>
  							</dd>
  						</dl>
  						<dl class="registratopn-form"><dt>专业层次 </dt><dd><input id="gqz" type="radio" checked="checked" name="flight_type" value="1" /><label for="gqz">高起专</label><input id="zsb" type="radio" name="flight_type" value="2"/><label for="zsb">专升本</label><span class="error c666"></span></dd></dl>
  						<dl class="registratopn-form"><dt>备注 </dt><dd><textarea name="beizhu"></textarea><span class="error c666"></span></dd></dl>
  						<dl class="registratopn-form">
  							<dt>&nbsp;</dt>
  							<dd>
  								<input type="submit" value="提交" />
  								<input type="reset" value="重置" />
							</dd>
						</dl>
					</form>
  					</div>
  					<div class="registration-box-r">
  						<div class="tips">
  							<h1 class="tips-title">1.报名电话：</h1>
  							<div class="tips-text">
  								<p><b>网址：</b>www.zsbeihang.com<br/>www.suoerschool.com</p>
  								<p><b>电话：</b>010-83511366</p>
  								<p><b>地址：</b>北京市西城区陶然亭路45号</p>
  							</div>
  							<h1 class="tips-title">2.报名条件：</h1>
  							<div class="tips-text">
  								<p>身份证原件及1张复印件</p>
  								<p>毕业证原件及1张复印件</p>
  								<p>蓝底一寸照片3张</p>
  							</div>
  							<h1 class="tips-title">3.身份证信息采集</h1>
  							<div class="tips-text">
  								<p class="text-indent24">根据我院通知，从2013年秋季招生开始，须通过身份证识别器采集新生数据，请你在网报后，务必携带身份证原件通过“身份证信息采集器”采集个人身份信息，否则报名无效。</p>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>

  		<footer>
        	<div class="f-box1"><p>Copyright <span>©</span> 2014 北京航空航天大学 All rights reserved</p></div>
      	</footer>
  </div>
  <!-- wrapper end -->
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