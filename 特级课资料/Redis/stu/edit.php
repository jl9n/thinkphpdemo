<html>
	<head>
		<title>学生信息管理</title>
	</head>
	<body>
		<center>
			<?php 
			
				include("menu.php"); //导入导航栏信息 
				
				//获取要修改的学生信息
				//1.导入配置文件
				require("dbconfig.php");

				//获取要修改的信息
				$stu = $redis->hgetall("stu:".$_GET['id']);
			?>
			
			<h3>修改学生信息</h3>
			<form action="action.php?a=update" method="post">
			<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
			<input type="hidden" name="oldurl" value="<?php echo $_SERVER["HTTP_REFERER"]; ?>"/>
			<table width="260" border="0">
				<tr>
					<td align="right">姓名：</td>
					<td><input type="text" name="name" value="<?php echo $stu['name'] ?>"/></td>
				</tr>
				<tr>
					<td  align="right">性别：</td>
					<td><input type="radio" name="sex" value="m" <?php echo ($stu['sex']=='m')?"checked":""; ?>/>男
						<input type="radio" name="sex" value="w" <?php echo ($stu['sex']=='w')?"checked":""; ?>/>女</td>
				</tr>
				<tr>
					<td align="right">年龄：</td>
					<td><input type="text" name="age" value="<?php echo $stu['age'] ?>"/></td>
				</tr>
				<tr>
					<td align="right">班号：</td>
					<td><input type="text" name="classid" value="<?php echo $stu['classid'] ?>"/></td>
				</tr>
				<tr>
					<td align="center" colspan="2">
						<input type="submit" value="提交"/>
						<input type="reset" value="重置"/>
					</td>
				</tr>
			</table>
			</form>
		</center>
	</body>
</html>
