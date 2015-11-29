<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
    public function index(){
    	$m=M('user');
    	$list=$m->find();

    	//eq
    	//neq
    	//gt
    	//egt
    	//lt
    	//elt
    	//heq
    	//nheq
    	



      	$this->assign('list',$list);
      	
      	$this->assign('header','Public:header');
      	$this->assign('atime',time());
		$this->display();
    	
    	
    	
    }
    
    function del(){
    	echo 'index下面的删除';
    }
    
    function add(){
    	echo 'index 下面的添加';
    }
    
    function update(){
    	echo 'index 下面的更新';
    }
}
?>