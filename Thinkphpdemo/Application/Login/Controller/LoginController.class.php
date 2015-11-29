<?php
use Think\Controller;
	class IndexController extends Controller{
		public function index(){
			$this->display();
		}
		
		public function logout(){
			$_SESSION['admin']=null;
			setCookie(session_name(),'',time()-1,'/');
			$this->redirect('Login/Index');
		
		}
		
	}