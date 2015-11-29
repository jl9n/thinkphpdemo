<?php if (!defined('THINK_PATH')) exit();?><link rel=stylesheet href="__PUBLIC__/admin/dhtmlet.css" type="text/css">
<div>
	<div class="bg">
		<div class="mlu">
		<li>大类ID</li>
		<li>大类标题</li>
		<li>操作</li>
		</div>
	</div>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><form action="__URL__/u_upload" method="post">
	<div class="bg">
		<li><input type="hidden" value="<?php echo ($vo["id"]); ?>" name="id"><?php echo ($vo["id"]); ?></li>
		<li><input type="text" value="<?php echo ($vo["title"]); ?>" name="title">	</li>
		<li><div class="gl"><input type="submit" value="更新">    &nbsp;&nbsp;&nbsp;&nbsp;删除</div></li>
	</div>
	</form><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div style="border:solid 1px red;width:900px;height:80px;">
	<div class="bg2">
		添加大分类
	</div>
	<div class="fl"><center>
		<form method="post" action="__URL__/i_upload">
		新增大分类：<input type="text" size="70px" name="title"><input type="submit" value="添加">
		</form>
		</center>
	</div>
</div>