<?php
class UserAction extends Action{
	
	//  如果是在前台项目当中，或者在后台项目（应用）
	
	
	//你必须要在对应的项目（应用）的Tpl目录下，找到default（默认皮肤），下面新建一个与控制名(不带Action)相同的文件件
	
	//index控制器，就应该建一个Index目录，
	
	//User就应该建一个User目录
	
	//Shop   shop目录
	
	
	//必须要建一个与方法相同的 .html文件，放到这个目录下面

	
	// .html  必须
	
	
	
	//control  MVC  C段当中，来显示模版
	
	//我可不可以跨模块（控制器）来调用模版
	//跨主题，跨皮肤
	
	//全路径输出
	function index(){
			
			// 加载文件的位置全已主入口文件定位
			$this->display('D:\web\videodemo\Public\ss.html');	
			
			//thinkphp当中的一些常量，一些与模版有关的模版替换参数
			
			
			
			
			
			
	
	}
	
	
	//模块===控制器
	//动作====成员方法（方法）
	function io(){
		echo '你到底喜欢我什么？我改还不成吗？';
	}
}


?>