<?php
//执行学生信息的增，删，改操作

//1.导入配置文件
require("dbconfig.php");


//4.根据参数a的值做对应的操作（增，删，改）
switch($_GET['a']){
	case "add":
		//添加
		//获取要添加的数据
			$name = $_POST["name"];
			$sex = $_POST["sex"];
			$age = $_POST["age"];
			$classid = $_POST["classid"];
		//拼装语句，并执行添加
			$id = $redis->incr("stuid"); //自增一个值
			$redis->rpush("lstuid",$id); //将自增的id放入到链表中
			$m = $redis->hmset("stu:".$id,array("name"=>$name,"sex"=>$sex,"age"=>$age,"classid"=>$classid));
		//判断
			if($m>0){
				echo "<script>alert('添加成功！');window.location.href='index.php'</script>";
			}else{
				echo "<script>alert('添加失败！');window.history.back();</script>";
			}
		break;
		
	case "del":
		//删除
		//获取要删除的id号
		$id = $_GET["id"];
		//执行删除
		if($redis->lrem("lstuid",$id,1)){
			$redis->del("stu:".$id);
		}
		header("Location:".$_SERVER["HTTP_REFERER"]);//从哪来回哪去
		break;
		
	case "update":
		//修改
		//获取要修改的数据
			$name = $_POST["name"];
			$sex = $_POST["sex"];
			$age = $_POST["age"];
			$classid = $_POST["classid"];
			$id = $_POST['id'];
		//拼装sql语句，并执行
			$m = $redis->hmset("stu:".$id,array("name"=>$name,"sex"=>$sex,"age"=>$age,"classid"=>$classid));
		//判断(根据影响行数判断是否成功！)
			if($m>0){
				echo "<script>alert('修改成功！');window.location.href='{$_POST['oldurl']}'</script>";
			}else{
				echo "<script>alert('修改失败！');window.history.back();</script>";
			}
		break;
}
//5.关闭数据库
