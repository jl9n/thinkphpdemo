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
				//thinkphp当中的一些常量，一些与模版有关的模版替换参数
			// 加载文件的位置全已主入口文件定位
			
			//用户注册页面
			$this->display();			
			
	
	}
	
	//用户注册的表单信息，提交到服务器上的数据库上面去
	//你应该在此处连接处数据进行插入吧
	
	function add(){
		dump($_POST);
	}
	
	
	//模块===控制器
	//动作====成员方法（方法）
	function io(){
		echo '你到底喜欢我什么？我改还不成吗？';
	}
}


?>