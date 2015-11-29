<?php
class UserAction extends CommonAction{
	
	  public function index(){
      	echo 'user 下面的显示';
    }
    
    function del(){
    	echo 'user下面的删除';
    }
    
    function add(){
    	echo 'user 下面的添加';
    }
    
    function update(){
    	echo 'user下面的更新';
    }
}

?>