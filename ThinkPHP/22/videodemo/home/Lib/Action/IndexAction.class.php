<?php
class IndexAction extends Action{
		function index(){
			$user=D('good');
		
			$list=$user->relation(true)->select();
			
			dump($list);
			
		}
	
	
}

?>