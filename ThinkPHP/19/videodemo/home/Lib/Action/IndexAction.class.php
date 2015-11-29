<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
    public function index(){
			//快捷操作函数，方法
			
			//L()  用在我们的控制器里面。
			
			L('demo','测试');
			
			//  $value=L('名称')
    		
    		$this->display();
    	
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