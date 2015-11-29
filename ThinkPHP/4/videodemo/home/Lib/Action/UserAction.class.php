<?php
class UserAction extends Action{
	function index(){
		
		echo '其实不是我长得丑，而是我美得不明显';
	}
	//这样一种访问格式，叫做pathinfo
	//
	
	//模块===控制器
	//动作====成员方法（方法）
	function io(){
		echo '你到底喜欢我什么？我改还不成吗？';
	}
}


?>