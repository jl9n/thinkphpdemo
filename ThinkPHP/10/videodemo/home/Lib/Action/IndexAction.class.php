<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
    public function index(){
      $this->display();
      	
      	
    }
    
   	function add(){
   		$user=new Model('user');
   		
   		
   		//这个数组信息，如查你用上了自动添充等，他的返回值更多啊。不仅仅只有我们看到的这些数据
   	
   		//增，删，改，查   CURD  C
   		
   		if($vo=$user->create()){
   			$user->password=md5($user->password);
   			
   			if($user->add()){
   				$this->success('添加成功');
   			}else{
   				$this->error('添加失败');
   				
   			}
   			
   			
   			
   			
   			
   			//$this->success('create成功');
   			//dump($vo);
   			//去考虑为什么会这样？
   			//success这个方法是执行成功的一个方法，他会给出对应的跳转页面，跳转时间，还有成功信息提示
   			
   			//这个模版不用自己去写。example 就是希望大家能够很好的学习一下别人是怎么写的啊
   		}else{
   			dump($vo);
   			//是thinkphp当中提供的一个执行失败的方法。在这个方法当中，执行失败，代码就不会向后继续执行
   			$this->error($user->getError());
   		}
   		
   		
   	}
    
    
}
?>