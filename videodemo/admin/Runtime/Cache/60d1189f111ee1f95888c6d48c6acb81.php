<?php if (!defined('THINK_PATH')) exit();?>
<link href="__PUBLIC__/admin/css/back.css" type="text/css" rel=stylesheet>
<link rel=stylesheet href="__PUBLIC__/admin/dhtmlet.css" type="text/css">
<script src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
	<script src="__PUBLIC__/js/jquery-validation-1.12.0/dist/jquery.validate.min.js"></script>
<table width="100%" border="0" cellpadding="0" cellspacing="1" class="all_cont">
<tr><td>id</td><td>标题</td><td>分类</td><td>图片</td><td>内容</td></tr>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr class="asv"><td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["Mtitle"]); ?></td><td><?php echo ($vo["tag"]); ?></td><td><img src="../../<?php echo ($vo["photo"]); ?>" width="130px" height="60px;" /></td><td><?php echo ($vo["content"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<script>
				$(document).ready(function(){
					
					$.ajax({
								url:'__URL__/fanhui',
								//type:'post',
								///data:'name='+,
								
								success:function(msg){
									if(msg==1){
										alert('有新消息');
										window.location.href="__URL__/newmessage";
										return false;
									}
									if(msg==0){
										//alert('没有新消息');
										
										return false;
									
									}
								
								}
								
							})
					
			});
			
			</script>