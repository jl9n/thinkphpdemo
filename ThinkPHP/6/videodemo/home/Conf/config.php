<?php
return array(
	//'配置项'=>'配置值'
	//因为开启url重写  不论是被重写的，还是没被重写的。都能够通过原有路径来进行访问
	
	//  因为要开启rewrite这样一种模式
	//1,确认你的服务器环境已经开启了apache的rewirte模块  
	//2,在与主入口文件，项目入口文件同级的目录下面新建一个.htaccess 
	
	//2,rewrite 他会加大你服务的性能消耗
	'URL_MODEL'=>1,

	//一旦开启调试模式，他会模拟linux操作系统来帮我们实现识别大小写
	// 一旦开启调试模式，方法名的大小写与模版文件名的大小写有关
	
	//模拟出来的文件夹命名，不区分大小写
	//自己在linux操作系统下面，运行一下
	//  你下次移植过去，如果发现不行。改一下。。。。（）
	//  如果没有这个  
	
	//'APP_DEBUG'=>true,
	
	
	//所谓的智能模式，其实就是我们在上节课讲的pathinfo模式(index.php/模块/方法)
	
	//我们要在pathinfo模式当中进行传值，与普通模式传值一致

	//
	
	
	//普通模式
	//如果使用普通模式，必须要在前面加上/m/模块/a/动作（方法），并且，他的顺序关系是可以发生变化
	//那如果我以后要GET传值怎么办?在pathinfo这样一种模式怎么办？
	
	//智能识别模块和操作
	
	
	//还分成两个配置项？pathinfo模式，又分成两种。
	
	//留到下节课
	
	//pathinfo两种模式，以及模版和控制器之间的关系。
	

);
?>