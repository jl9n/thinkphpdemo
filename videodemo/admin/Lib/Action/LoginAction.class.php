<?php
	class LoginAction extends Action{
	
		Public function login(){
			
			$this->display('login_index');
		
		}
		
		
		public function checkLog(){
		
				//$code=md5($_POST['txtverify']);
				
				//var_dump($_POST['txtverify']);
			
				//var_dump($_SESSION['verify']);
				
				$User=M('user');
				
				$username=trim($_POST['username']);
				
				$password=trim($_POST['passwd']);
				
				/* if(empty($username)){
					echo json_encode(array('status'=>1,'message'=>'用户名不能为空'));
					die;
				}
				if(empty($_POST['passwd'])){
					echo json_encode(array('status'=>2,'message'=>'密码不能为空'));
					die;
				} */
			
				$res=$User->where('username="'.$_POST['username'].'" AND passwd="'.$_POST['passwd'].'"')->find();
				
				$Baoming=M('baoming');
				
				$res1=$Baoming->query("select * from think_baoming where status=0");
					
					
				if($res){
					
					//if($code!=$_SESSION['verify']){
					//$this->error('验证码输入错误',U('Login/login'),3);
					//}else{
						//$c_bool=true;
						
						session_start();
					
					$username=$_POST['username'];
					
					$_SESSION['name']=$username;
					
					$_SESSION['msg']=count($res1);
					//session('name','"'.$_POST['username'].'"');
					
					//$this->redirect('../',5,'跳转中');
					
					//echo json_encode(array('status'=>3,'message'=>'登陆成功'));
					
					//echo 1;
					header('location:../');
					
				}else{
					//echo json_encode(array('status'=>2,'message'=>'您输入密码不正确'));
					header('location:../Login/login');
				}
				
		}
		
		Public function verify(){

		import("ORG.Util.Image");

		Image::buildImageVerify();

		}


		
		
		public function loginout(){
			
				$_SESSION[]= array();
				
				if(isset($_COOKIE[session_name()])){
				setCookie(session_name(),'',time()-1,'/');
			}
				
				session_destroy();
				
				//header('location:../Login/login');
				echo "<script language='javaScript'>self.close();</script>";
				echo"<script language='javaScript'>window.location.href='../Login/login';</script>";
		}
	
	
	}