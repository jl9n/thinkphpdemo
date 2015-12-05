<html>
	<head>
		<title>学生信息管理</title>
		<script type="text/javascript">
			function dodel(id){
				if(confirm("确定要删除吗？")){
					window.location.href="action.php?a=del&id="+id;
				}
			}
		</script>
	</head>
	<body>
		<center>
			<?php include("menu.php"); //导入导航栏信息 ?>
			
			<h3>浏览学生信息</h3>
			<table width="600" border="1">
				<tr>
					<th>学号</th><th>姓名</th><th>性别</th>
					<th>年龄</th><th>班号</th><th>操作</th>
				</tr>
				<?php
					//获取数据信息并输出
					//1.导入配置文件
						require("dbconfig.php");
					
					//从redis中的链表lstuid中获取所有学生信息的id
					$stuid = $redis->lrange("lstuid",0,-1);
					
					//遍历stuid,再从redis中获取hash的学生信息并输出
					foreach($stuid as $id){
						$row = $redis->hgetall("stu:".$id); //获取所有列和值
						echo "<tr>";
						echo "<td>{$id}</td>";
						echo "<td>{$row['name']}</td>";
						echo "<td>{$row['sex']}</td>";
						echo "<td>{$row['age']}</td>";
						echo "<td>{$row['classid']}</td>";
						echo "<td>
									<a href='javascript:dodel({$id});'>删除</a>
									<a href='edit.php?id={$id}'>修改</a>
								</td>";
						echo "</tr>";
					}
					
				?>
			</table>
		</center>
	</body>
</html>
