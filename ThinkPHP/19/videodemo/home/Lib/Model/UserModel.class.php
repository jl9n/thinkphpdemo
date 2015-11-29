<?php
//  将这些自动映射，完成，验证，加到上次写的用户名或者文章的增删改查当中去。

//   讲一下，通过自动完成，来做无限级分类


class UserModel extends Model{
//现在我们就也来开始用这一个自定义模型，而是当时的时机不对。
//自动验证的话，需要根据自己的不同情况来使用。用户名，没有任何人能帮你。只有你根据自己的业务情况来去写
//自动验证的时候，thinkpphp为我们封装的是一个成员属性。在create的时候，内部会去自动找这些自动验证方法。
//来实现验证，如果失败会create失败执行else区间
	protected $_validate=array(
		//下面还需要再写数组。一个数组就是一条验证规则
		//array('验证字段','验证规则','错误提示','验证条件','附加规则','验证时间'),
		//验证字段：需要验证的表单字段名称,也可以表单当中的一些辅助字段,例如验证码，附加码，重复密码等
		//验证规则，验证规则必须要结合附加规则一起使用
		//错误提示:如果出现错误，抛出一个什么样的错误提示告知用户
		//验证条件:0，1，2（）
		//附加规则：
		//       regex 使肜正则进行验证   可以自己在验证规则当中写一个正则表达示(第一上兄弟连论坛下载高老师的正则视频,
		//第二，thinkphp功能强劲他为我们封了一些正则,第三，网上已为了准备了一些常用正则)
		//       function 使用函数进行验证，前面验证规则这个地方必须要写函数名time
		//       callback  是一个回调 他会去找当前UserModel当中的一个成员方法
		//       confirm 验证表单当中的两个字段是否相等。
		//       equal 验主下是否等于某个值
		//		in   是否在某一个范围内 验证规则当中需要写上一个数组
		//       unique 验证是否唯一，系统会要据字段目前的值查询数据库来判断是否有相同的值
		//		
		//      如果用系统内置的一些常用正则，只需要写到错误提示即可，
		//       require 字段必须验证    email验证邮箱   url是验证url地址的   currency货币  number数字
		//  验证时间：   是指数据库操作时间的验证时机
						//  1新增数据的时候进行验证    Model::MODEL_INSERT
						//  2 编辑的时候才进行验证   	Model::MODEL_UPDATE
						//  3 全部情况下验证			Model::MODEL_BOTH
		//
		//在模型里面，多语言支持需要注意的地方
		array('uname','require','{%lan}'),
		array('uname','checklen','用户名长度过长或过短',0,'callback'),
		array('upass','require','密码必填'),
		array('repassword','require','重复密码必填'),
		array('upass','repassword','两次密码不一致',0,'confirm'),
	
	);
	
	//你在create方法当来调用自动验证的话$_POST['username']
	// 如果来判断长度的话，我是不是必须要传入一个东西进来。来进行判断。
	//  那怎么知道对还是不对呢？  真或假
	
	//它也是thinkphp当中的一个成员方法在create的时候，自动执行
	//array('填充字段','填充内容','填充条件','附加规则');
	//填充字段: 这个字段可以是表单当中的字段，也可以是数据库当中的字段。也可以是一些辅助字段
	//填充内容,配合附加规则一同使用
	//填充条件, 1,2,3 就是Model::MODEL_INSERT   (默认参数为新增的时候进行填充)
	// 附加规则,  function  callback, field（用其它字段来填充），表示此处可以拿到其他字段的一个值
	// string , 字符串来填充。这一项，是thinkphp自动完成里面的默认选项
	
	protected $_auto=array(
			array('password','md5',3,'function'),
			array('createip','returnip',1,'callback'),
			array('createtime','time',1,'function'),
	
	
	);
	
	
	protected  $_map=array(
		// 不用写数组啦
		//'是要在表单当中的字段写在前面'=>'是写到后面,数据表当中的真实字段写到后面',
		'uname'=>'username',
		'upass'=>'password',
			
	
	);
	
	function returnip(){
			return $_SERVER['REMOTE_ADDR'];	
		
	}
	
	
	
	function checklen($data){
		if(strlen($data)>15||strlen($data)<5){
			return false;
		}else{
			return true;
		}
	}
	
	
}

?>