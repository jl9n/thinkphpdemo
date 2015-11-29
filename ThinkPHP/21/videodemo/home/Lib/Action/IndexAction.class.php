<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
    public function index(){
			//$cache=Cache::getInstance('缓存方式','缓存参数');
			// $cache=Cache::getInstance('Xcache',array('expire'=>60));
    	
			//$cache->set('名字','值');
			//$value=$cache->get('名字');
			//删除值
			// $cache->rm('名字');
			
			
			//$cache->name='值';
			//$value=$cache->name;
			//unset($cache->name);
			
			
			//S('名字','数据','3600','类型');
			
    		//如果有缓存，则读取缓存数据
    		//如果没有缓存，则读取数据库当中的数据放入缓存
    
    		
    		
    		
			
    	
    		$list=S('list');
    		if(empty($list)){
    				$user=M('user');

    				$list=$user->select();
    				
    				S('list',$list,3600);
    				echo '这是未经过缓存服务器的，直接查找数据库的';
    				
    		}
    		
    		S方法他支持缓存有效期，在很多情况下，我们并不需要有效期这个概念
    		专门进行文件缓存。快捷缓存
    		
    		F('data',$data,TEMP_PATH);
    		
    		F('data',null);
    		
    		$data=F('data');
    		//能够创建缓存子目录
    		F('user/data',$data)
    		
    		// DATA_CACHE_SUBDIR=true,
    		//DATA_PATH_LEVEL=3;
    		
    		dump($list);
    		
    		
    		
			
			
	
    	
    	
    	
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