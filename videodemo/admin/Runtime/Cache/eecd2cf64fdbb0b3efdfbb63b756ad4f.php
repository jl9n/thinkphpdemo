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
	
	
	
	<link rel=stylesheet href="__PUBLIC__/admin/dhtmlet.css" type="text/css">
	
	<link href="__PUBLIC__/admin/css/back.css" type="text/css" rel=stylesheet>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
	<script src="__PUBLIC__/js/jquery-validation-1.12.0/dist/jquery.validate.min.js"></script>
	<style type="text/css">
		.bmk{style="border:solid 1px #e8e8e8;"}
	</style>

  </head>
  <body>
  <!-- wrapper start-->
  <div class="wrapper">
   		
  		<div class="main">
  			<div class="registration">
  				
  				<div class="about-box">
  					
  					
					<form method="post" action="__URL__/update">
					<center><h3>学员提交问题</h3></center>
					<br />
					<center><table class="bmk" border="0" width="1000" style="border:1px solid #e8e8e8;height:80px;text-align:center;font-size:12px;font-family:"Microsoft YaHei","lucida grande", verdana, lucida, STSong, sans-serif;">
					<tr><th><center>点击</center></th><th><center>id</center></th><th><center>姓名</center></th><th><center>电话</center></th><th><center>联系方式</center></th><th><center>e_mail</center></th><th><center>专业</center></th><th><center>层次</center></th><th><center>日期</center></th></tr>
					<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
						<td><input type="checkbox" name="str_Menu[]" value="<?php echo ($vo["id"]); ?>"></td>
						<td><?php echo ($vo["id"]); ?></td>
						<td><?php echo ($vo["name"]); ?></td>
						<td><?php echo ($vo["tel"]); ?></td>
						<td><?php echo ($vo["qq"]); ?></td>
						<td><?php echo ($vo["e_mail"]); ?></td>
						<td><?php echo ($vo["zhuanye"]); ?></td>
						<td><?php echo ($vo["ceng"]); ?></td>
						<td><?php echo (date("Y/m/d H:i:s",$vo["date"])); ?></td>
						</tr><?php endforeach; endif; ?>
						
					</table>
						<br />
						<input type="submit" value="审核">
					</center>
						
					</form>
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