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
				$("#addRole").click(function(){
					var box =300;
		
					var th= $(window).scrollTop()+$(window).height()/1.6-box;
					
					var h =document.body.clientHeight;
					
					var rw =$(window).width()/2-box;
					
					$("#add_box").animate({top:th+200,opacity:'show',width:500,height:200,right:rw+100},500);
					
					$("body").prepend("<div class='mask'></div>");
					
					$(".mask").css({opacity:"0.5"}).css("height",h);
					
					return false;
		
				});
					//添加弹出框关闭
					$("#add_box .close").click(function(){
					
						$(this).parents("#add_box").animate({top:0,opacity: 'hide',width:0,height:0,right:0},500);
						
						$(".mask").fadeOut("fast");
						
					});
					//节点弹出框关闭
					$("#edit_box .close").click(function(){
					
						$(this).parents("#edit_box").animate({top:0,opacity: 'hide',width:0,height:0,right:0},500);
						
						$(".mask").fadeOut("fast");
						
					});
					//全选特效
					$(".level1").click(function(){
						var ids=$(this).val();
						var inputs=$('.'+ids+'nodes');
						
						$(this).attr('checked') ? inputs.attr('checked' , true) : inputs.removeAttr('checked');
						
						
					})
					
					
					
					
					
					
					
					
					
				});
				
				//节点弹出框
				function edit(obj){
					$("input[name='hidden_role_id']").val(obj.id);
					$(":checkbox").removeAttr('checked');
					$.ajax({
						url:"/Think321demo/RBAC/manager_node",
						type:"post",
						data:"role_id="+obj.id,
						dataType:'json',
						success:function(data){
							for(var i=0;i<data.length;i++){
								var index=data[i];
								$("input[value="+index+"]").attr("checked",true);
							}
						}
						
					})
					var box =300;
		
					var th= $(window).scrollTop()+$(window).height()/1.6-box;
					
					var h =document.body.clientHeight;
					
					var rw =$(window).width()/2-box;
					
					$("#edit_box").animate({top:th-30,opacity:'show',width:500,height:530,right:rw+100},500);
					
					$("body").prepend("<div class='mask'></div>");
					
					$(".mask").css({opacity:"0.5"}).css("height",h);
					
					return false;
		
				}
				
			
		</script>
	</head>
	<body>
		<div class="contener">
		 <div class="list_head_m">
			<div class="list_head_ml">当前位置：【角色列表】</div>
		 </div>
		 	<table width="100%" class="list all_cont" >
			<tr>
				<th>ID</th>
				<th>角色名</th>
				<th>状态</th>
				<th>操作</th>
				
			</tr>
			<?php if(is_array($role_list)): $i = 0; $__LIST__ = $role_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i;?><tr style="text-align:center">
					<td><<?php echo ($role["id"]); ?>></td>
					<td><<?php echo ($role["role_name"]); ?>></td>
					<td>正常</td>
					<td><a href="javascript:void(0)" id="<<?php echo ($role["id"]); ?>>" class="edit_nodes" onclick="edit(this)">编辑</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			<tr>
				<td colspan=4>
					<center><a href=""><input type="button" value="添加角色" class="btn btn-primary btn-big" id="addRole"></a></center>
				</td>
			</tr>
		</table>
		</div>
		<!--添加管理员-->
		<div class="showbox" id="add_box">
			<h2>添加管理员<a class="close" href="#">关闭</a></h2>
			<div class="mainlist">
				<table width="360px" border="0" cellpadding="0" cellspacing="1"    class="all_cont" style="">
					  <form action="/Think321demo/RBAC/doAddRole"  method="post">
						
					  <tr>
						<td align="right">角色名：</td>
						<td align="left" class="first_td">
						  <input type="text" name="role_name" id="admin_name" />
						</td>
						
					  </tr>   
					  <tr>
						<td width="200">&nbsp;</td>
						<td align="left" colspan="2">
						  <input type="submit" value="添加" class="btn btn-primary btn-small" >
						</td>
					  </tr> 
					  </form>         
				</table>
			</div>
		</div>
		<!--编辑节点-->
		<div class="showbox" id="edit_box">
			<h2>节点编辑<a class="close" href="#">关闭</a></h2>
			<form action="/Think321demo/RBAC/do_node" method="post">
			<input type="hidden" name="hidden_role_id" value="">
			<!--
			<div class="mainlist">
				<?php if(is_array($node)): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="width:450px;height:80px">
					<center>
						<h3>
							<input type="checkbox" name="nodes[]" class="level1" value='<<?php echo ($vo["id"]); ?>>'  <?php if($vo['access']): ?>checked='checked'<?php endif; ?> ><<?php echo ($vo["zh_name"]); ?>>
						</h3>
					</center>
					<ul style="margin-left:30px">
					<?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><li style="float:left; width:100px">
							<input type="checkbox" name="nodes[]" class="<<?php echo ($vo["id"]); ?>>nodes" value='<<?php echo ($child["id"]); ?>>' <?php if($child['access']): ?>checked='checked'<?php endif; ?> ><<?php echo ($child["zh_name"]); ?>>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					<ul>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			-->
			<div class="mainlist">
				<?php if(is_array($node)): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="width:450px;height:75px">
					<center>
						<h3>
							<<?php echo ($vo["zh_name"]); ?>>
						</h3>
					</center>
					<ul style="margin-left:30px">
					<?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><li style="float:left; width:100px">
							<input type="checkbox" name="nodes[]"  value='<<?php echo ($child["id"]); ?>>' ><<?php echo ($child["zh_name"]); ?>>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					<ul>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<input type="submit" value="添加" class="btn btn-primary btn-small" style="margin-left:210px" >
			</form>
		</div>
		<!--end-->
	</body>
</html>