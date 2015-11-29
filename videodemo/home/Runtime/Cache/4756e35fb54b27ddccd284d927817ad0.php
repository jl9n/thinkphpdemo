<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>北航-索尔直属学习中心-关于我们</title>
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
  				<div class="logo pull-left"><img src="../Public/img/logo.png" /></div>
  				<div class="mark pull-left"><img src="../Public/img/mark.png" /></div>
  				<div class="tel pull-right"><img src="../Public/img/tel.png" /></div>
  			</div>
  			<nav>
  				<div class="nav-list">
  					<ul class="nav-mian">
	  					<li class="on-nav"><a href="#">网站首页</a></li>
	  					<li><a href="<?php echo U('home://Index/about');?>">中心介绍</a></li>
	  					<li><a href="/videodemo/index.php/Index/recruit">招生专区</a></li>
	  					<li><a href="/videodemo/index.php/Index/educational">教务考务</a></li>
	  					<li><a href="<?php echo U('home://Index/registration');?>">在线报名</a></li>
	  					<li><a href="#">学生专区</a></li>
	  					<li><a href="#">下载专区</a></li>
	  					<li><a href="<?php echo U('home://Index/contact');?>">联系我们</a></li>
	  				</ul>
  				</div>
  			</nav>
  		</header>
  		
  		<div class="main">
  			<div class="registration">
  				<div class="navigate">您现在的的位置：主页 >中心介绍</div>
  				<div class="about-box">
  					<div class="about-box-l">
  					 <h1 class="detail-title">联系我们</h1>
  					</div>
  					<div class="about-box-r">
  						
                  
				  <?php if(is_array($contact)): foreach($contact as $key=>$vo): ?><?php echo ($vo["content"]); ?><?php endforeach; endif; ?>   
              
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