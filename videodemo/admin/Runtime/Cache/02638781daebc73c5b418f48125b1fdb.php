<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台登录-索尔网站管理系统</title>
<link rel="stylesheet" type="text/css" media="all" href="__PUBLIC__/admin/css/login.css">
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/dialog/jquery.artDialog.js?skin=blue"></script>
<script type="text/javascript" src="__PUBLIC__/Js/dialog/plugins/iframeTools.js"></script>
</head>
<body>
<div id="login">
    <div class="warp">
        <div class="content">
            <h1></h1>
            <form action="__URL__/checklog" method="post" id="form">
                <div class="item">
                    <div class="input">
                        <div class="icon" title="用户名"></div>
                        <input value="" tabindex="1" id="username" type="text" name="username">
                    </div>
                    <label>用户名：</label>
                </div>
                <div class="item">
                    <div class="input">
                        <div class="icon2" title="密码"></div>
                        <input value="" tabindex="2" id="password" type="password" name="passwd">
                    </div>
                    <label>密码：</label>
                </div>
                <input type="submit" tabindex="3" value="" class="submit" id="admin_submit">
            </form>
            <p class="copyright">Powered by LICMS V1.0 Copyright © 2010-2013</p>
        </div>
    </div>
</div>
<script>
 
					$(function(){
					
					
						$("#admin_submit").click(function(){
							if($("#username").val()==""){
								alert('请输入您的姓名');
								return false;
							}
							
							if($("#password").val()==""){
								alert('请输入您的mima');
								//alert(document.getElementById('#tel_st').val());
								return false;
							}
							

							
							$.ajax({
								url:'/videodemo/admin.php/Login/checkLog',
								type:'post',
								data:'username='+$("#username").val()+'&passwd='+$("#password").val(),
								
								success:function(msg){
									if(msg==1){
										//alert('提交成功');
										header('location:../');
										//return false;
									}
									if(msg==0){
										alert('提交失败');
									
									}
								
								}
								
							})
						})
					})
			

</script>
</body>
</html>