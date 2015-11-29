<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>北航-索尔直属学习中心-关于我们</title>
    <meta charset="UTF-8">
    <!-- cssreset -->
    <link rel="stylesheet" href="css/cssreset-min.css">
    <!-- global -->
    <link rel="stylesheet" href="css/global.css">
    <!-- main -->
    <link rel="stylesheet" href="css/main.css">
	
	<link rel="stylesheet" href="__PUBLIC__/admin/css/back.css" type="text/css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-validation-1.12.0/dist/jquery.validate.min.js"></script>

  </head>
  <body>
  <!-- wrapper start-->
  <div class="wrapper">
  		
  		
  		<div class="main">
  			<div class="registration">
  			
  				<div class="about-box">
  				
  				
						<center><h2>学员在线报名</h2></center>
					<center><table border="0" width="100%" cellpadding="0" cellspacing="1" class="all_cont">
					<tr><th>点击</th><th>id</th><th>姓名</th><th>电话</th><th>联系方式</th><th>电子邮件</tj><th>所报专业</th><th>专业层次</th><th>备注</th><th>时间</th></tr>
					<?php if(is_array($baoming)): foreach($baoming as $key=>$vo): ?><tr>
						<td><input type="checkbox" name="checkbox1" value="checkbox"></td>
						<td><?php echo ($vo["id"]); ?></td>
						<td><?php echo ($vo["name"]); ?></td>
						<td><?php echo ($vo["tel"]); ?></td>
						<td><?php echo ($vo["qq"]); ?></td>
						<td><?php echo ($vo["e_mail"]); ?></td>
						<td><?php echo ($vo["zhuanye"]); ?></td>
						<td><?php echo ($vo["ceng"]); ?></td>
						<td><?php echo ($vo["beizhu"]); ?></td>
						<td><?php echo (date("Y/m/d H:i:s",$vo["date"])); ?></td>
						</tr><?php endforeach; endif; ?>
					
					</table></center>
  				</div>
  			</div>
  		</div>

  	
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