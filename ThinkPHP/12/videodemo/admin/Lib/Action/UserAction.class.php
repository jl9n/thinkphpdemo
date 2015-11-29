<?php

//必须要写一次。不写一次别往看了。。。。

//写代码，而不听老师讲代码
class UserAction extends Action{
		function index(){
			//多扩展一点点模版方面的知识
			$user=M('user');
			$list=$user->field(array('id','username','createip'))->select();
			
			$this->assign('title','thinkphp视频演示');
			$this->assign('alist',$list);
			$this->display();
		}
		//删除
		function del(){
			$user=D('user');
			if($user->delete($_GET['id'])){
					$this->success('删除成功');
			}else{
					$this->error('删除失败');
			}
		}
		//增加
		function add(){
			Load('extend');
			if($_POST['password']!=$_POST['repassword']){
				$this->error('两次密码不一致');
			}
			$user=D('user');
			if($vo=$user->create()){
				//但是创建成功之后，你的密码是没有md5,你的ip是不正的.你的两次密码是否一致是没被验证的
				//你的注册时间是不存在
				$user->password=md5($user->password);
				$user->createtime=time();
				//$user->createip=$_SERVER[];
				$user->createip=get_client_ip();
				if($user->add()){
					$this->success('用户注册成功，返回上级页面');
				}else{
					$this->error('用户注册失败，返回上级页');
				}
				
				
				
			}else{
				$this->error($user->getError());
			}
			
		}
		//显示用户的修改项
		function edit(){
				$user=M('user');
				$id=(int)$_GET['id'];
				// select()和find() 你要自己去学会区分  
				$list=$user->where("id=$id")->find();
				

				
				$this->assign('list',$list);
				$this->assign('title','显示用户编辑信息');
				$this->display();
		}
		//将更新数据写入到数据库当中
		function update(){
				
				$user=M('user');
				if($user->create()){
					$user->password=md5($user->password);
					if($inserid=$user->save()){
							$this->success('更新成功，受影响行数为'.$inserid);
					}else{
							$this->error('更新失败,此处可以手动记录日志，供管理员查询，但是不要直接打印现来SQL语句啊');
					}
					
					
				}else{
					$this->error($user->getError());
				}
			
			
		}
	
	
}


?>