<html>
	<head>
		<title>学生信息管理</title>
	</head>
	<body>
		<center>
			<?php include("menu.php"); //导入导航栏信息 ?>
			
			<h3>添加学生信息</h3>
			<form action="action.php?a=add" method="post">
			<table width="260" border="0">
				<tr>
					<td align="right">姓名：</td>
					<td><input type="text" name="name"/></td>
				</tr>
				<tr>
					<td  align="right">性别：</td>
					<td><input type="radio" name="sex" value="m"/>男
						<input type="radio" name="sex" value="w"/>女</td>
				</tr>
				<tr>
					<td align="right">年龄：</td>
					<td><input type="text" name="age"/></td>
				</tr>
				<tr>
					<td align="right">班号：</td>
					<td><input type="text" name="classid"/></td>
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
