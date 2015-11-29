<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title><?php echo ($title); ?></title>
</head>
<body>
<!-- 前面是form表单-->
<form action="__URL__/add" method="post">
	用户名:<input type="text" name="username"><br>
	密码:<input type="password" name="password"><br>
	重复密码:<input type="repassword" name="repassword"><br>	
	<input type="submit" value="注册">

</form>

<!-- 后面是显示的用户列-->
<?php if(is_array($alist)): $i = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><span>ID<span><?php echo ($vo['id']); ?> <span>用户名<span><?php echo ($vo['username']); ?> <span>注册IP<span><?php echo ($vo['createip']); ?> <a href="__URL__/del/id/<?php echo ($vo['id']); ?>">删除</a>  <a href="__URL__/edit/id/<?php echo ($vo['id']); ?>">编辑</a> </li><?php endforeach; endif; else: echo "" ;endif; ?>

</body>

</html>