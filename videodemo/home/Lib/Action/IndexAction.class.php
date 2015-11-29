<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
 
	
	public function index(){
		
		$this->display();
		
	}
	
	public function registration(){
			$this->display();
		
	}
	
	public function upload(){
	
		
		$User = M("xs"); // 实例化User对象

		$data['name'] = 'ThinkPHP';

		$data['email'] = 'ThinkPHP@gmail.com';

		$res=$User->query('insert into think_xs(name,tel,qu,demo) values("'.$_POST['name'].'","'.$_POST['tel'].'","'.$_POST['qu'].'","'.$_POST['demo'].'")');
	
			echo 1;
			
			
	}
	
		public function reg_upload(){
		
			$baoming=M('baoming');
		
			$data['name']=$_POST['username'];
			
			$data['tel']=$_POST['tel'];
			
			$data['qq']=$_POST['qq'];
			
			$data['e_mail']=$_POST['e-mail'];
			
			$data['zhuanye']=$_POST['zhuanye'];
			
			$data['ceng']=$_POST['flight_type'];
			
			$data['beizhu']=$_POST['beizhu'];
			
			$date=strtotime(date('Y-m-d H:i:s',time()));
	
			$baoming->add($data);
	
			$id=$baoming->getLastInsID();
			
			
			$baoming->query("update think_baoming set ceng='".$_POST['flight_type']."' where id='".$id."'");
			
			$baoming->query("update think_baoming set date='".$date."' where id='".$id."'");
		
			
			if($id){
				$this->redirect("./Index/registration"); 
			}
	
		}
		
		public function t_upload(){
			
			
			$User = M("baoming"); 

			
			$date=date('Y-m-d H:i:s',time());
			
			$date=strtotime($date);

		$res=$User->query('insert into think_baoming(name,tel,zhuanye,ceng,date) values("'.$_POST['name'].'","'.$_POST['tel'].'","'.$_POST['zhuanye'].'","'.$_POST['ceng'].'","'.$date.'")');
		
		
			echo 1;
		}
		
		
		public function d_upload(){
			
			$User = M("xs");
			
			$date=date('Y-m-d H:i:s',time());
			
			$date=strtotime($date);
			$res=$User->query('insert into think_xs(name,tel) values("'.$_POST['name'].'","'.$_POST['tel'].'")');
		
			echo 1;
		}
		
		
		public function about(){
		
			$Intruce=M('intruce');
			
			$res=$Intruce->order('id desc')->limit('1')->select();
			
			$this->assign('list',$res);
		
			$this->display();
			}
		
		public function educational(){
			$this->display('about');
		}
		
		public function recruit(){
			$this->display('about');
		}
		
		public function contact(){
		
			$Contact=M('contact');
			
			$res=$Contact->order('id desc')->limit('1')->select();
			
			$this->assign('contact',$res);
		
			$this->display();
		}
	
		public function bottom(){
			
			$this->display();
		}
		
		
}
?>