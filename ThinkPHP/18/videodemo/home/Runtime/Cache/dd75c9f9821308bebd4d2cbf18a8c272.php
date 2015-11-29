<?php if (!defined('THINK_PATH')) exit();?>
<a href="?t=red">红</a>
<a href="?t=green">绿</a>
<a href="?t=default">默认</a>

<form action="__URL__/add" method="get">

	<input type="text" name="username">
	
	<input type="password" name="password">
	

	<input type="submit" value="提交">
	

</form>