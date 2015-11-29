<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<link href="/Think321demo/Application/Login//View/Public/css/back.css" type="text/css" rel="stylesheet">
		<script src="/Think321demo/Application/Login//View/Public/js/jquery-1.7.2.js" type="text/javascript"></script>
		<style>
			td{user-select:none;}
			*{margin:0;padding:0;list-style-type:none;}
			.showbox{width:0px;height:0px;display:none;position:absolute;right:0;top:0;z-index:100;border:1px #8FA4F5 solid;padding:1px;background:#fff;}
			.showbox h2{height:25px;font-size:14px;background-color:#3366cc;position:relative;padding-left:10px;line-height:25px;color:#fff;}
			.showbox h2 a{position:absolute;right:5px;top:0;font-size:12px;color:#fff;}
			.showbox .mainlist{padding:10px;}
			.showbox .mainlist li{height:24px;line-height:24px;}
			.showbox .mainlist li span{margin:0 5px 0 0;font-family:"宋体";font-size:12px;font-weight:400;color:#ddd;}
			.showbox .mainlist li a{font-size:12px;}
			.mask{background:#666;position:absolute;z-index:99;left:0;top:0;display:none;width:100%;height:100%;opacity:0.5;filter:alpha(opacity=50);-moz-opacity:0.5;}
		</style>
		<script>
			$(function(){
				$(function(){
					//行颜色效果
					$('.all_cont tr').hover(
					function () {
						$(this).children().css('background-color', '#f9f9f9');
					},
					function () {
						$(this).children().css('background-color', '#fff');
					});
				});
				//添加管理员
				$("#addAdmin").click(function(){
					var box =300;
		
					var th= $(window).scrollTop()+$(window).height()/1.6-box;
					
					var h =document.body.clientHeight;
					
					var rw =$(window).width()/2-box;
					
					$("#add_box").animate({top:th,opacity:'show',width:500,height:300,right:rw+100},500);
					
					$("body").prepend("<div class='mask'></div>");
					
					$(".mask").css({opacity:"0.5"}).css("height",h);
					
					return false;
		
				});
	
					$("#add_box .close").click(function(){
					
						$(this).parents("#add_box").animate({top:0,opacity: 'hide',width:0,height:0,right:0},500);
						
						$(".mask").fadeOut("fast");
						
					});
				
					$("#edit_box .close").click(function(){
					
						$(this).parents("#edit_box").animate({top:0,opacity: 'hide',width:0,height:0,right:0},500);
						
						$(".mask").fadeOut("fast");
						
					});
				
				})
				//修改管理员
				function edit(obj){
					$("#hidden_admin_id").val(obj.id);
					$.ajax({
						url:"/Think321demo/RBAC/ajax_admin_info",
						type:"post",
						data:"admin_id="+obj.id,
						dataType:'json',
						success:function(data){
							$("#edit_name").val(data[0].admin_name);
							$(".edit_radio[value='"+data[0].role_id+"']").attr("checked","checked");
						}
					})
					var box =300;
		
					var th= $(window).scrollTop()+$(window).height()/1.6-box;
					
					var h =document.body.clientHeight;
					
					var rw =$(window).width()/2-box;
					
					$("#edit_box").animate({top:th,opacity:'show',width:500,height:300,right:rw+100},500);
					
					$("body").prepend("<div class='mask'></div>");
					
					$(".mask").css({opacity:"0.5"}).css("height",h);
					
					return false;
				}
			
		</script>
	</head>
	<body>
		<div class="contener">
		 <div class="list_head_m">
			<div class="list_head_ml">当前位置：【管理员列表】</div>
			<div class="list_head_mr"><a href="javascript:void(0)"  rel="管理员" title="添加管理员"><input class="btn btn-small" type="button" value="添加管理员" id="addAdmin"></a></div>
		 </div>
		 	<table width="100%" class="list all_cont" >
			<tr>
				<th>ID</th>
				<th>管理员</th>
				<th width="25%">最后登录时间</th>
				<th width="25%">最后登录IP</th>
				<th>角色</th>
				<th>操作</th>
				
			</tr>
			<?php if(is_array($admin_info)): $i = 0; $__LIST__ = $admin_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$admin): $mod = ($i % 2 );++$i;?><tr style="text-align:center">
					<td><<?php echo ($admin["id"]); ?>></td>
					<td><<?php echo ($admin["admin_name"]); ?>></td>
					<td><?php if($admin["last_login_time"] == '1970-01-01 08:00:00'): ?>该用户还没有登录   <?php else: ?> <<?php echo ($admin["last_login_time"]); ?>><?php endif; ?></td>
					<td><?php if($admin["last_login_ip"] == '0.0.0.0'): ?>该用户还没有登录 <?php else: ?> <<?php echo ($admin["last_login_ip"]); ?>><?php endif; ?></td>
					<td><<?php echo ($admin["role_name"]); ?>></td>
					<td><a href="javascript:void(0)" id="<<?php echo ($admin["id"]); ?>>" onclick="edit(this)">修改</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		</div>
		<!--添加管理员-->
		<div class="showbox" id="add_box">
			<h2>添加管理员<a class="close" href="#">关闭</a></h2>
			<div class="mainlist">
				<table width="360px" border="0" cellpadding="0" cellspacing="1"    class="all_cont" style="">
					  <form action="/Think321demo/Login/RBAC/doAddAdmin"  method="post">
						
					  <tr>
						<td align="right">管理员名称：</td>
						<td align="left" class="first_td">
						  <input type="text" name="admin_name" id="admin_name" />
						</td>
						
					  </tr> 
					  <tr>
						<td align="right">管理员密码：</td>
						<td align="left">
						  <input type="password" name="admin_pwd" id="admin_pwd" />
						</td>
					
					  </tr> 
					  
					  <tr>
						<td align="right">确认密码：</td>
						<td align="left">
							<input type="password" name="sure_pwd" id="sure_pwd" />
						</td>
					  </tr> 
					  
					  
					  <tr>
						<td align="right">角色：</td>
						<td align="left">
						<?php if(is_array($role_list)): $i = 0; $__LIST__ = $role_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i;?><input type="radio" name="role_id" value="<<?php echo ($role["id"]); ?>>"/><<?php echo ($role["role_name"]); ?>><?php endforeach; endif; else: echo "" ;endif; ?>
						</td>
					  </tr> 
					  <tr>
						<td width="200">&nbsp;</td>
						<td align="left" colspan="2">
						  <input type="submit" value="添加" class="btn btn-primary btn-small">
						</td>
					  </tr> 
					  </form>         
				</table>
			</div>
		</div>
		
		
		<!--修改管理员-->
		<div class="showbox" id="edit_box">
			<h2>修改管理员信息<a class="close" href="#">关闭</a></h2>
			<div class="mainlist">
				<table width="360px" border="0" cellpadding="0" cellspacing="1"    class="all_cont" style="">
					  <form action="/Think321demo/RBAC/doEdit"  method="post">
						<input type="hidden" id="hidden_admin_id" name="admin_id" value="" />
					  <tr>
						<td align="right">管理员名称：</td>
						<td align="left" class="first_td">
						  <input type="text" name="admin_name" id="edit_name" value="" readonly />
						</td>
						
					  </tr> 
					  <tr>
						<td align="right">管理员密码：</td>
						<td align="left">
						  <input type="password" name="admin_pwd" id="edit_pwd" />
						</td>
					
					  </tr> 
					  
					  <tr>
						<td align="right">确认密码：</td>
						<td align="left">
							<input type="password" name="sure_pwd" id="edit_sure_pwd" />
						</td>
					  </tr> 
					  
					  
					  <tr>
						<td align="right">角色：</td>
						<td align="left">
						<?php if(is_array($role_list)): $i = 0; $__LIST__ = $role_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i;?><input type="radio" name="role_id"  class="edit_radio" value="<<?php echo ($role["id"]); ?>>"/><<?php echo ($role["role_name"]); ?>><?php endforeach; endif; else: echo "" ;endif; ?>
						</td>
					  </tr> 
					  <tr>
						<td width="200">&nbsp;</td>
						<td align="left" colspan="2">
						  <input type="submit" value="修改" class="btn btn-primary btn-small">
						</td>
					  </tr> 
					  </form>         
				</table>
			</div>
		</div>
		
		
	</body>
</html>