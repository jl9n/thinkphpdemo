<?php
class UserViewModel extends ViewModel{
		public $viewFields=array(
				//数组当，每一个元素（下素和值）就是我们要查的一个表，要标就是我们要查的这个表的不带表前缀的表名
				//后面值，也是一个值（数据）  数组当的每一个元素，就是一个字
				'User'=>array('id','username','password'),
				'User_message'=>array('id'=>'uid','userid','info','_on'=>'User.id=User_message.userid'),
		
		
		);
		
	
}

?>