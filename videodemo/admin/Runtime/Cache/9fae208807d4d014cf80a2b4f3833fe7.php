<?php if (!defined('THINK_PATH')) exit();?><link rel=stylesheet href="__PUBLIC__/admin/dhtmlet.css" type="text/css">
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