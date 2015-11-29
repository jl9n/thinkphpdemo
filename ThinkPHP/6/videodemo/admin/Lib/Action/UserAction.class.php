<?php
//必须要类名与文件名相当，首字母必须大写，后面必须要加上Action，必须要继承Action这个类
//推荐大家这样。对于这些命名，大家最好全部都写成一个文件，将其对应的意义用中文标识清楚。并且将这当中有哪些方也说清楚。这些方法实现的哪些功能也说清楚或者注释明白
class UserAction extends Action{
	function index(){
		echo '这是首页';
	}
	function reg(){
		echo '这是用户注册页';
	}
	function add(){
		$this->verify();
		echo '这是向数据库写入数据的方法';
	}
	//在此处定义一个私有方法有何意义？
	
	//主要体现在，能够在这里写一个与用户模块相关的方法，但是你又不希望原有方法太过于臃肿，因此，我们可以定义一个私有方法来实现，如果验证规范发生变化，只需要改这当中的一个方法就行。
	//不用再去找一大堆存当中去。。
	private function verify(){
		//这是我内部写的一个验证的方法，我是否可以private来做修饰
		echo '这是验证的方法';
	}
	
	
}


?>