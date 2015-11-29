<?php
$arr1=array(
	//前台
	'URL_MODEL'=>2,  //rewrite
	//'APP_DEBUG'=>true,
	//8.2.11
	'TOKEN_ON'=>true,
	'TOKEN_NAME'=>'__liwenkai__',
	'TOKEN_TYPE'=>'md5',
	
	
	//分帧当中不能够有body
	
	
	
	
	//而app_debug出来的信息属于body体里面的内容。
	
	//所以说，会显示一切空白
	
	
	//大家经常会想告诉后台的管理员，各个数据服务器的地址是多少？
	
	//为我们准备一个叫做大C  来读取配置文件当中的值
	
	
	//  一般是在控制器当中来读来，分配到模板当中去吧
	
	
	//推荐使用这样一种方（也就是在配置文件写数据库连接参数）

);

//另外，thinkphp还为我们提供了一些其他的连接数据库的方式
//DSN   

$arr2=include './config.inc.php';

return array_merge($arr1,$arr2);

?>