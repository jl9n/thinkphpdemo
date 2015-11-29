<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
    public function index(){
			    	
    	//希望大家把这一块掌好
    	
    	
    	
    	/*  			
			    	  			
    			//就是在 某个方法后面加上一个字段名 getByCreatetime(),或者是找前几条记录的时候，直接写上top8()
    	
    				
    			$user=new AdvModel('user');
    			
    			//$list=$user->getByCreateip('127.0.0.1');
    			
    			$list=$user->where()->top3();
    			
    			dump($list);
    			
    			
    	
    	

    			$user=M();
    			
    			$list=$user->query('select * from think_user order by id desc');
    			
    			
    		  dump($list);
    	
    	
    	
    	
  
    		//如果你实例化模型学的好的 话。 再去听一次实例化模型
    		
    		//  AdvModel
    		
    		//  写一个CommModel 让其不再继承model而是继承advModel
    		
    		//自写写一个实对应的自定义模型用D来解决advModel，或者new UserModel
    		$user=M('user','CommonModel');

    		
    		//直接返回结果当中的某条记录
    		$list=$user->order('id desc')->first();
    		
    		dump($list);
    		
    		//getN(正数、负数)
    		
    		//first();
    		
    		//last();
    	
    	
    
    	  		统计查询。这些大家都最好动手练一次。
    	  			echo $user->sum('id');
    		$user=M('user');
    	
    		$data['username']=array('eq','liwenkai');
    		$data['password']=array('like','w%');
    		$data['_logic']='or';
    		
    		$where['_complex']=$data;
    		
    		$where['id']=array('in',array(4,9,3,10));
    		
    		//where (id in(4,9,3,10)) and ((username='liwenkai'),(password like 'w%'))
    		$list=$user->where($where)->select();
    		
    		dump($list);
    		
    		//
    		
    		
  
    		//$data['id']=array(array('neq',3),array('neq',10),'and');
    		
    		
    		$data['username']='liwenkai';
    		
    		//就是在后面写上标准的sql当中的where条件
    		$data['_string']='id>1';
    		//$data['username']=array(array('like','l%'),array('like','d%'),array('eq','bbbbbb'),'or');
    		// where id>3 and id<10  
    		// where (username like l%)  or (username like d%) or (username=bbbbbbb)
    		
    		
    		$list=$user->where($data)->select();
    		
    		dump($list);
    		
    		*/
    		
    		
    		
    		/*	
    		//推荐大家使用数组的形式，尽量不要去用字符串的形式
    		//like  
    		//  配置文件  (自动进行模糊匹配)  
    		//  DB_LIKE_FIELDS=>'username|password';

    		    		
    		//第一，可以在后面传字符串，第二，可以在后面传数组
    		//in 
    		//$data['id']=array('exp','in(4,9,11)');
    		
    		//$data['字段名']=array('是表达示','查询条件');
    		$data['createtime']=array('exp','createtime+1');
    		
    		$list=$user->where(array('id'=>4))->save($data);
    		dump($list);
    		
    		*/
    	
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