<?php
	header("Content-Type:text/html;charset=utf-8");
	$keyword = $_POST['key'];
	//$keyword = "李文凯";
	$sphinx = new SphinxClient();
	#创建sphinx对象
	$sphinx->SetServer("localhost", 9312); 
	#建立连接，第一个参数sphinx服务器地址，第二个sphinx监听端口
	$result = $sphinx->query($keyword,"main"); 
	//var_dump($result);

	$ids = array_keys($result['matches']);
	//var_dump($ids);
	$ids = join(",",$ids);
	
	//连接数据库
	$conn = mysql_connect("localhost","root","root3306");
	
	//选择数据库
	mysql_select_db("test");
	
	//设置字符集
	mysql_set_charset("utf8");
	
	//准备sql语句
	$sql = "select id,title,content from post where id in(".$ids.")";
	
	//发送sql语句
	$result = mysql_query($sql);
	
	//处理结果皆
	
	$opts = array(
	#格式化摘要，高亮字体设置
	#在匹配关键字之前插入的字符串，默认是<b>
	"before_match"  => "<span style='font-weight:bold;color:red'>",
	#在匹配关键字之后插入的字符串，默认是</b>
	"after_match"  => "</span>"
	);
	
	while($row = mysql_fetch_assoc($result)){
		$res = $sphinx->buildExcerpts($row,"main",$keyword,$opts);
		echo "标题：".$res['1']."<br />";
		echo "内容：".$res['2']."<br />";
		echo "<hr>";
	}
	//关闭
	mysql_close($conn);
	
	
	
	