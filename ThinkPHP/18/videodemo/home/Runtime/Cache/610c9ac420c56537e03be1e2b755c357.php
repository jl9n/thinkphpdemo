<?php if (!defined('THINK_PATH')) exit();?><html>

<head>


</head>
<body bgcolor="Red">
<a href="?t=red">红</a>
<a href="?t=green">绿</a>
<a href="?t=default">默认</a>
	<form action="__URL__/add" method="POST">
	
		用户名<input type="text" name="uname"><br>
		密码<input type="password" name="upass"><br>
		重复密码<input type="password" name="repassword"><br>
		验证码:<input type="text" name="verify"><img src="__APP__/common/verify" onclick="show(this)">
		<input type="submit" value="提交">
	
		<script>
			function show(obj){
						obj.src="__APP__/common/verify/random/"+Math.random();
				
			}
		
		</script>
		
	</form>

</body>

</html>