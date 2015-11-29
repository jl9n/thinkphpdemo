<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
    public function index(){
        header("Content-Type:text/html; charset=utf-8");
       echo '请不要叫我宅女，其实是我居里夫人';
    }
    
    public function tt(){
    	//$this->assign();
    	$he='成功的爱情和婚姻都需要经营';
    	
    	$this->assign('hello',$he);
    	
    	$this->display();
    }
}
?>