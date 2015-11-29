<?php if (!defined('THINK_PATH')) exit();?><html>

<body>
	<?php if(is_array($filelist)): $i = 0; $__LIST__ = $filelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?>小图<img src="__PUBLIC__/upload/s_<?php echo ($vo['filename']); ?>"><br>
			大图<img src="__PUBLIC__/upload/m_<?php echo ($vo['filename']); ?>"><br><?php endforeach; endif; else: echo "" ;endif; ?>


	<form action="__URL__/upload" method="POST" enctype="multipart/form-data">

		<input type="file" name="file[]"><br>
		<input type="file" name="file[]"><br>
		<input type="file" name="file[]"><br>
		<input type="submit" value="上传">	
	
	</form>

</body>

</html>