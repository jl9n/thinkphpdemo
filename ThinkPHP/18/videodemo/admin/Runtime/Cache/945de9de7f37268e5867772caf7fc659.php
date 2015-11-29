<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title><?php echo ($title); ?></title>
</head>


<body>
	<form action="__URL__/update" method="post">
		用户名：<input type="text" name="username" value="<?php echo ($list['username']); ?>"><br>
		
		密码:<input type="password" name="password" value="<?php echo ($list['password']); ?>"><br>
		
		注册IP：<input type="text" name="createip" value="<?php echo ($list['createip']); ?>"><br>
		
		注册时间：<input type="text" name="createtime" value="<?php echo ($list['createtime']); ?>"><br>
		
		<input type="hidden" value="<?php echo ($list['id']); ?>" name="id">
		<input type="submit" value="更新">
	
	
	
	</form>

</body>

</html>