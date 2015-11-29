<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
    public function index(){
			$user=new UserViewModel();
			
			$list=$user->select();
			
			dump($list);
			
			//select * from think_user,think_user_message where think_user.id=think_user_message.userid;
    	
    	
    	
    }
    
   	function add(){
   		$user=new Model('user');
   		
   		$_GET['password']=md5($_GET['password']);
   		
   		if($list=$user->add($_GET)){
   			$this->success('添加成功');
   		}else{
   			$this->error('添加失败');
   		}
   		
   		
   		
   
   	}
    
    
}
?>