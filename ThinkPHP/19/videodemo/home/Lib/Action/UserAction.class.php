<?php
//自动验证是针对数据库级别的验证。他是系统内置的自动验证功能，来实现验证的
//而大多数情况下，数据对象是由表单提交的$_POST数据创建的。
//写的东西特别多，并且呢，还不利于重用。
//自动验证需要写到自定义模型当中
//专门的自定义模型   M()     new UserModel   D('user');


class UserAction extends Action{
		function index(){
			$this->display();

		}
	
		function add(){
			//第一步，我们需要验证用户输入的验证码是否正确
			//确定在session当中存的名字叫什么吧？ $_SESSION['verify'] md5
			
			if($_SESSION['verify']!=md5($_POST['verify'])){
				$this->error('验证码不正确');
			}
			
			
			
			//在这个方法当中来完成入数据库写入的操作
			$user=D('user');
			// new UserModel		
			
			if($user->create()){
				if($user->add()){
					$this->success('注册成功');
				}else{
					$this->error('注册失败');
				}
			}else{
				$this->error($user->getError());
			}
				
		}
}


?>