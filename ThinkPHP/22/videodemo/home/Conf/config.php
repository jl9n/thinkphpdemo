<?php
$arr1=array(
	//前台
	'URL_MODEL'=>2,  //rewrite
	
	//8.2.11
	'TOKEN_ON'=>false,
	'TOKEN_NAME'=>'__liwenkai__',
	'TOKEN_TYPE'=>'md5',
	
	'DATA_CACHE_TYPE'=>'file',
	'DATA_CACHE_TIME'=>'3600',
	
	//在我们thinkphp2.0手册当中多语言支持是属于杂项这一个划分里面的
	//他的编号为5.10.1
	//但是里面没有提供与多语言支持有关的配置项
	//是否开始多语言支持
	'LANG_SWITCH_ON'=>true,
	//这是默认多语言，
	'DEFAULT_LANG'=>'zh-cn',
	//自动侦测语言
	'LANG_AUTO_DETECT'=>true,
	
	//分帧当中不能够有body
	//是否开启多模版支持
	'TMPL_SWITCH_ON'=>true,
	//自动侦测模版主题
	'TMPL_DETECT_THEME'=>true,
	
	//如果选择成功了，他里面有个记录机制会记录，当前的用户选择的模版
	
	//QQ的首页不是这样做的！
	
	//文件上传，ajax
	
	
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