<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
    public function index(){
       //这样话，也自动实例化一个user模型
    	$user=M('user');
    	
    	//这两个顺序不能够变
    	//在我们传统的sql语句当中
    	//  select 字段  from 表 where  顺序关系是不能够打乱，如果打乱这条sql语句就会提示语法错 误
    	
    	//$list=$user->limit('2')->order('id desc')->where('id>1')->field('id,username')->select();
    	
    	
    	//$user->where('字段串的形式来传的,它还以通过数组来传，还可以通过对象来传');
    	//$user->table()  如果你现在想操作多张表，就可以在此处使用table方法
    	//此处的表前缀不能省略
    	// think_user.id as uid
    	// select username,password as pwd
    	//$list=$user->field('user.id as uid,m.id as mid')->table('think_user user,think_user_message m')->where('user.id=m.id')->select();
    	
    	//$list=$user->field(array('user.id'=>'uid','m.id'=>'msid'))->table('think_user user,think_user_message m')->where('user.id=m.id')->select();
    	
    	
    	//order 
    	//$list=$user->limit('2')->order(array('id'=>'desc','username'))->where('id>1')->field('id,username')->select();
    	
    	
    	//$user->limit('3,8')   其实有两个参数（0，8） 起始位（偏移量）
    	
    	//$user->data() data方法是可以被代替，主要用在save()还有add的时候，还有delete的时候，进行使用,主要向对象当中带数
    	
    	
    	//$user->filed();
    	
    	//page()方法 查询分页,在此处我们很少来使用这个方法，我们经常使用分页类来实现分页。你可实现更加丰富的分页效果
    	//将thinkphp当中如何实现分页再来说此项
    	
    	//group 分组
    	//$user->group('')->select();
    	
    	//having  与sql语句当中的having方法一致。结果更加精确
    	
    	//$user->having();  where当中你怎么写的，就在having当中怎么写可以上兄弟连论坛
    	//join是支关联查询  内关联，左关联   右关联
    	//写好join之后你在select  join 
    	//  $user->join('user on user.id=user_message.id','card on ')
    	
    	//distinct
    	
    	//  select distinct id,username from 表
    	
    	//$user->distinct(true)->select();
    	
    	//relation方法  关联模型 暂时不说
    	
    	//lock   查询询 lock(true)  myisam引擎基本可以不用考虑 
    	
    	//mysql 5.0 myisam 他是支持表级锁 innodb才支持到行级锁 我们能想到的，他都考虑到了。
    	
    	
    	// getField('字段');  你不想查询其他的东西时，你就可以用上这个查询方法
    	
    	//$list=$user->where('id=4')->getField('password,username');
    
    	
    	//更新  
    	//第一，可以向save（）当中直接传入想要更改的数据。数据格式为我们的字段信息数组
    	//第二，更新用的是save方法而不是update
    	//第三，如果不写where可以不可以?可以不写where，当是对应的数组当中必须要有指定的where条件
		//第四,data方法的使用
		//第五，$list到底是什么？$list为受影响的行数。如果没有受影响行数就说没有更新成功。
    	/*$data['password']='cccc';
    	$data['id']='4';
    	$list=$user->data($data)->save();
    	
    	
    	setField();
    	
    	setInc   //统常是数字的字段来进行操作
    	
    	setDec
    	*/
    	//前面第一处写字段，第二处，写where条件，第三项，写上对应的需要增加或者减少的整型
    	//$list=$user->setInc('price','id=1',3);
    	
    	//$list=$user->setInc('price','id=1');
    	//用户登陆之后让用户的
    	//$list=$user->setDec('price','id=1',2);
    	
    	//增，删，改，查  
    	
    	//自己配合  curl 做一个文章的增删改查出来。或者做一个用户的增删改查。
    	
    	//下节课，我跟大家写一个。用户的增，删，改，查。
    	
    	//$user->where('id=1')->setField(array('username','password'),array('google','googlea'));
    	
    	
    	
    	//add 是添加方法
    	/*
    	$data['username']='test';
    	$data['password']=md5('test');
    	
    	$list=$user->data($data)->add();
    	dump($list);
    	*/
    	
    	//$list=$user->select(array('where'=>'id>1','limit'=>'3','order'=>'id desc'));
    	
    	//老师，我想加上where条件怎么办?老师，我想order by 排序怎么办?
    	
    	// 5.3.10在查询的时候，涉及到一个问题，叫做连贯操作。这些方法，还有这些SQL语句大家都可以不用去写。
    	//thinkphp已经为我们自动生成好了。
    	//$list=$user->findAll();
    	
    	
    	//dump($list);
    	//find()   只查询一条记录，其返回的是一个一维数组
    	//select()  select是指将该表当中的所有信息全部读出来
    	//findAll()  findAll()与select方法，它就是select方法的同名方法
    	
    	
    	
    	//$this->display();
      	
      	
    	//delete 方法
    	//可以直接传入一个主键id
    	
    	//
    	//$list=$user->delete(7);
    	
    	//$list=$user->where('id>5')->delete();
    	
    	
    	//$list=$user->where('id>3')->order('id desc')->limit('1')->delete();
    	//dump($list);
    	
    }
    
   	function add(){
   		$user=new Model('user');
   		
   		$_GET['password']=md5($_GET['password']);
   		
   		if($list=$user->add($_GET)){
   			$this->success('添加成功');
   		}else{
   			$this->error('添加失败');
   		}
   		
   		
   		
   		
   		//这个数组信息，如查你用上了自动添充等，他的返回值更多啊。不仅仅只有我们看到的这些数据
   	
   		//增，删，改，查   CURD  C
   		
   		
   		/*
   		if($vo=$user->create()){
   			$user->password=md5($user->password);
   			dump($vo);
   			if($user->save()){
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
   		
   			*/
   	}
    
    
}
?>