<?php if (!defined('THINK_PATH')) exit();?><link rel=stylesheet href="__PUBLIC__/admin/dhtmlet.css" type="text/css">
<script src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
	<script src="__PUBLIC__/js/jquery-validation-1.12.0/dist/jquery.validate.min.js"></script>
<div><h3>信息列表</h3></div>
<div class="bt"><li class="lw">id</li><li class="lw">标题</li><li class="lw">分类</li><li class="lw">图片</li><li class="lw">内容</li></div>
<div class="clear"></div>
<div>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li class="lw"><?php echo ($vo["id"]); ?></li>
	<li class="lw"><?php echo ($vo["Mtitle"]); ?></li>
	<li class="lw"><?php echo ($vo["tag"]); ?></li>
	<li class="lw"><img src="../../<?php echo ($vo["photo"]); ?>" width="150px" height="80px" /></li>
	<li class="lw"><?php echo ($vo["content"]); ?></li>
	<div class="clear"></div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
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