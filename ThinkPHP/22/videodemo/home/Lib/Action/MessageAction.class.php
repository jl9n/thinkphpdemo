<?php
class MessageAction extends Action{
	
	function index(){
		$this->display();
	}
	
	
	function add(){
		
		$m=M('Message');
		if($vo=$m->create()){
			
			if($m->add()){
				$this->ajaxReturn($vo,'用户添加成功',1);
			}else{
				$this->ajaxReturn(0,'添加失败',0);
			}
		}else{
			$this->error($m->getError());
		}
		
		
		/*
		$m=M('Message');
		if($m->add($_GET)){
			$this->ajaxReturn($_GET,'添加信息成功',1);
		}else{
			$this->ajaxReturn(0,'添加信息失败',0);
		}
		*/
		
		//   ajaxReturn();
		
		// ajaxReturn(数据,'提示信息',状态);
		echo $this->ajaxReturn(3,'sadfsafa',2);
		
		//其实他的本质是返回一组json格式的字符串
		
		//大家可以通过jquery,或者js,或者thinkphp当中封装好的ajax方法来进行接收.
		
		//一块是jquery当中的ajax提交
		
		//jquery  用起来方便强大
		
		//另外一块是thinkphp当中为我们封装好的ajax方法
		
		//因为thinkphp当中的ajax方法它虽然方便，但是官方并没有很好的提供他的方法的使用说明。但是它有个特别使用起来特别方便
		
		
	}
	
}


?>