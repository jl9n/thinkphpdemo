<?php if (!defined('THINK_PATH')) exit();?><form action="__URL__/add" method="POST">

请选择父级栏目<select name="pid" size="20">
			<option value="0">根栏目</option>
			<?php if(is_array($alist)): $i = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($vo['id']); ?>">
				<?php for($i=0;$i<$vo['count']*2;$i++){
								echo '&nbsp;';
					
					} ?>
				<?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

</select><br>

新的栏目名称:<input type="text" name="name"><br>
<input type="submit" value="添加栏目">
</form>