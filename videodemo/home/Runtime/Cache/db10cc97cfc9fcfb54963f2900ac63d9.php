<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>北航-索尔直属学习中心</title>
    <meta charset="UTF-8">
    <!-- cssreset -->
    <link rel="stylesheet" href="../../__PUBLIC__/css/cssreset-min.css">
    <!-- global -->
    <link rel="stylesheet" href="../../__PUBLIC__/css/global.css">
    <!-- main -->
    <link rel="stylesheet" href="../../__PUBLIC__/css/main.css">
	
	<link rel="stylesheet" href="../../__PUBLIC__/home/changyan2-floatCbox.css">
	<link rel="stylesheet" href="../../__PUBLIC__/home/global1.3.css">
	<link rel="stylesheet" href="../../__PUBLIC__/home/bdsstyle.css">
	<link rel="stylesheet" href="../../__PUBLIC__/home/chagnyan.face.v2013091220.css">
	<link rel="stylesheet" href="../../__PUBLIC__/home/comment2.v2013032608.css">
	<link rel="stylesheet" href="../../__PUBLIC__/home/itoolbar.201312131742.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__JS__/jquery-1.10.2.min.js"></script>

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
	  					<li class="on-nav"><a href="#">网站首页</a></li>
	  					<li><a href="<?php echo U('home://index/about');?>">中心介绍</a></li>
	  					<li><a href="__URL__/recruit">招生专区</a></li>
	  					<li><a href="__URL__/educational">教务考务</a></li>
	  					<li><a href="__URL__/registration">在线报名</a></li>
	  					<li><a href="#">学生专区</a></li>
	  					<li><a href="#">下载专区</a></li>
	  					<li><a href="<?php echo U('home://index/contact');?>">联系我们</a></li>
	  				</ul>
  				</div>
  			</nav>
  		</header>
  		<div class="banner">
  			<div class="banner-img"><img src="__PUBLIC__/img/banner.jpg" /></div>
  		</div>
  		<div class="main">
  			<div class="m-box1">
  				<img src="__PUBLIC__/img/zytj1.jpg" />
  				<img src="__PUBLIC__/img/zytj2.jpg" />
  				<img src="__PUBLIC__/img/zytj3.jpg" />
  				<img src="__PUBLIC__/img/tel1.jpg" />
  			</div>
  			<div class="m-box2">
  				<img src="__PUBLIC__/img/why1.jpg" />
  				<img src="__PUBLIC__/img/why2.jpg" />
  				<img src="__PUBLIC__/img/why3.jpg" />
  			</div>
  			<div class="m-box3">
  				<img src="__PUBLIC__/img/qa1.jpg" />
  				<img src="__PUBLIC__/img/qa2.jpg" />
  				<img src="__PUBLIC__/img/qa3.jpg" />
  				<div class="qa-from">
				
  					<input class="name" type="text" name="name" id="tt_name" placeholder="请输入您的姓名.." >
					  <input class="tel" type="text" name="tel" id="tel_st" placeholder="请输入您的电话号码.." >
  					<input class="qa" type="text" name="ga" id="ga_st" placeholder="请输入您的问题.." >
  					<input class="button" type="button" id="button_st" value="提交">
  				
				</div>
  			</div>
				<script>
					$(function(){
					
						//var str=$("#tel_st").val();
						
						//var reg=/^1[3|4|5|8][0-9]\d{4,8}$/;
						
						//var reg=/15[8,9]\d{8}$/g;
						
						//var re = /^1d{10}$/;
						
						//var bool=reg.test(str)
					
						$("#button_st").click(function(){
							if($("#tt_name").val()==""){
								alert('请输入您的姓名');
								return false;
							}
							
							if($("#tel_st").val()==""){
								alert('请输入您的电话号码');
								//alert(document.getElementById('#tel_st').val());
								return false;
							}
							
							if($("#ga_st").val()==""){
							
								alert('请输入您的问题');
								
								return false;
							}
							
							var num = document.getElementById('tel_st').value;
							
							var partten = /^1[3,5]\d{9}$/;
							if(partten.test(num)){
							//alert('是手机号码');
							}else{
							alert('不是手机号码');
							return false;
							}
							
							
							$.ajax({
								url:'__URL__/upload',
								type:'post',
								data:'name='+$("#tt_name").val()+'&tel='+$("#tel_st").val()+'&gu='+$("#ga_st").val()+'&demo='+$("#ga_st").val(),
								
								success:function(msg){
									if(msg==1){
										alert('提交成功');
										return false;
									}
									if(msg==0){
										alert('提交失败');
									
									}
								
								}
								
							})
						})
					})
			</script>
  			<div class="m-box4">
  				<img src="__PUBLIC__/img/tsfs1.jpg" />
  				<img src="__PUBLIC__/img/tsfs2.jpg" />
  			</div>
  			<div class="m-box5">
  				<img src="__PUBLIC__/img/ys1.jpg" />
  				<img src="__PUBLIC__/img/ys2.jpg" />
  				<img src="__PUBLIC__/img/tel2.jpg" />
  			</div>
  			<div class="m-box6">
  				<img src="__PUBLIC__/img/pw1.jpg" />
  				<img src="__PUBLIC__/img/pw2.jpg" />
  				<img src="__PUBLIC__/img/pw3.jpg" />
  				<img src="__PUBLIC__/img/tel2.jpg" />
  			</div>
  			<div class="m-box6">
  				<img src="__PUBLIC__/img/zd1.jpg" />
  				<img src="__PUBLIC__/img/zd2.jpg" />
          <div class="ksybm">
            <ul class="ksybm-from">
              <li><input class="ybm-name" type="text" id="two_name" placeholder="姓名.." ></li>
              <li><input class="ybm-tel" type="text" id="two_tel" placeholder="电话.." ></li>
              <li>
                  <select class="ybm-cc" name="two_sel">
                    <option value="0">请选择报名层次</option>
                    <option value="1">高起专</option>
					<option value="2">专升本</option>
                  </select>
              </li>
              <li>
                  <select name="two-ceng" id="two-ceng">
                    <option value="0">请选择报名层次</option>
                    <option value="1">行政管理</option>
					<option value="2">会计学</option>
					<option value="3">法学</option>
					<option value="4">土木工程</option>
                  </select>
              </li>
              <li><input class="ybm-button" type="button" value="提交" id="button_ybm"></li>
            </ul>
          </div>
		  <script>
					$(function(){
						
						
					
						$("#button_ybm").click(function(){
							if($("#two_name").val()==""){
								alert('请输入您的姓名');
								return false;
							}
							
							if($("#two_tel").val()==""){
								alert('请输入您的电话号码');
								return false;
							}			
							
							var spr=document.getElementById('two_tel').value;
							
							var pattern=/^1[3,5]\d{9}$/;
							
							if(pattern.test(spr)){
								
							
							}else{
								alert('不是手机号码');
								return false;
							}
						

							$.ajax({
								url:'__URL__/t_upload',
								type:'post',
								data:'name='+$("#two_name").val()+'&tel='+$("#two_tel").val()+'&zhuanye='+$("select option:selected").val()+'&ceng='+$("#two-ceng option:selected").val(),
								
								success:function(msg){
									if(msg==1){
										alert('提交成功');
										return false;
									}
									if(msg==0){
										alert('提交失败');
									
									}
								
								}
								
							})
						})
					})
			</script>
			<script language="javascript" src="http://ccicxa1.smart400.com:80/interface/gcs.jsp?uid=1006833&st=7&basePath=http://ccicxa1.smart400.com:80&iw=256&dyn=true&taskid="></script>

			<script>
				$(document).ready(function(){
					
					$.ajax({
								url:'__URL__/fanhui',
								
								
								success:function(msg){
									if(msg==1){
										alert('有新消息');
										return false;
									}
									if(msg==0){
										alert('meiyouxinxiaoxi');
									
									}
								
								}
								
							})
					
			});
			
			</script>
  				<img src="__PUBLIC__/img/tel2.jpg" />
  			</div>
  			<div class="m-box7">
          <img src="__PUBLIC__/img/yxfc.jpg" />
  			</div>
        <div class="m-box8">
          <img class="pull-left" src="__PUBLIC__/img/dz1.jpg" />
          <img class="pull-right"  src="__PUBLIC__/img/dz2.jpg" />
        </div>
  		</div>
  		<footer>
        <div class="f-box1"><p>Copyright <span>©</span> 2014 北京航空航天大学 All rights reserved</p></div>
      </footer>
	  <div class="bottom">
	<div style="position: absolute; left: -100em;">
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="1" height="1" id="changyan_client_swf_a"><param name="movie" value="http://assets.changyan.sohu.com/upload/release/js/aa.swf?92313"><param name="allowScriptAccess" value="always"><param name="flashVars" value="connName=connName9433"><embed flashvars="connName=connName9433" src="http://assets.changyan.sohu.com/upload/release/js/aa.swf?92313" width="1" height="1" name="rookieswf" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></object></div>
	<div id="changyan_floatbar_wrapper" data-tongji="1" style="display: block;"><div id="bottombar-wrap-w" class=""><div class="close-w"><a target="_self" href="javascript:void(0)">关闭</a></div><div class="wrap-cont-w post-wrap-w"><div class="cont-minwidth-w"><div class="cont-comment-w"><a class="comment-link-w" target="_self" href="http://pinglun.sohu.com/s395698295.html">查看<i>1</i>条评论</a></div><div class="cont-form-w"><div class="form-text-w area-textarea-w"><a class="button-w btn-bf" target="_self" href="javascript:void(0)">按钮</a><input type="text" name="" value="来说两句吧...." class="textarea-fw text-w"><input type="text" name="" value="来说两句吧...." class="textarea-fw text-w"><div></div></div></div></div><div class="cont-login-w"><div class="logout-wrap-w"><ul class="floatbar_platform post-login-w"><li class="first-w"><span>登录：</span></li><li><a class="icon-sohu-w" href="http://changyan.sohu.com/api/2/login/passport?client_id=cyqemw6s1&platform_id=11" post-data="" win-height="424" win-width="580" data-type="open" title="搜狐" alt="搜狐"></a></li><li><a class="icon-sina-w" href="http://changyan.sohu.com/api/2/login/passport?client_id=cyqemw6s1&platform_id=2" post-data="" win-height="537" win-width="754" data-type="open" title="新浪微博" alt="新浪微博"></a></li><li><a class="icon-qq-w" href="http://changyan.sohu.com/api/2/login/passport?client_id=cyqemw6s1&platform_id=3" post-data="" win-height="520" win-width="800" data-type="open" title="QQ" alt="QQ"></a></li></ul></div></div></div></div></div>
	  </div>
  </div>
  <!-- wrapper end -->
  </body>
</html>