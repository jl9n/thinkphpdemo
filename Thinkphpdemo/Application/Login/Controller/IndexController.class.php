<?php
use Think\Controller;
 use Think\Verify;
class IndexController extends Controller { 

    // 首页
    public function index() {
        
        $this->display();
    }

   	public function dologin($verifycode,$id=''){
		
			
			$admin=M("Admin");
			$pwd=md5($_POST['admin_pwd']);
			$info=$admin->where(array('admin_name'=>"{$_POST['admin_name']}",'admin_pwd'=>"{$pwd}"))->select();
			if(!$info){
				echo "<meta charset='utf-8'>";
				echo "<script>alert('用户名或者密码错误')</script>";
				$this->redirect('Index/index');
			}
		/* 	if(!$this->check_verify($_POST['verifycode'], $id))
			{
				
			}else{
				echo "<meta charset=utf-8>";
				echo "<script>alert('验证码错误')</script>";
				$this->redirect('Index/index');
			} */
		/* 	$verifyCode =I('verifycode');
			  if (!$this->check_verify ( $verifyCode )) {
                $this->success ( '验证码输入错误！' );
				echo '错误';
				exit;
            } else {
                $this->success ( '验证码输入正确！' );
				echo '正确';
				exit;
            } */
			
			//  $code = $_POST['verifycode'];
			  $verify = new \Think\Verify();    
          $verifyCheck = $verify->check($verifycode, $id);
			 if($verifyCheck){
				 
			 }else{
				echo "<meta charset=utf-8>";
				echo "<script>alert('验证码错误')</script>";
				$this->redirect('Index/index');
			}
       /*  if(!checkVerify($code)){
            $this->error('验证码错误');
            redirect('index',2,'2秒内返回登录页面。。');
        } */
		
		/* 	if(md5($_POST['verifycode'])!=$_SESSION['verify']){
			
			} */
			$data['last_login_time']=time();
			$data['last_login_ip']=ip2long("{$_SERVER['REMOTE_ADDR']}");
			$admin->where(array('admin_name'=>"{$_POST['admin_name']}"))->save($data);
			
			$_SESSION['admin']['name']=$_POST['admin_name'];
			$_SESSION['admin']['id']=$info[0]['id'];
			//echo '111';
			//exit;
			//写入权限
			//$role_node=new \Login\Model();
			$role_node= D('User');
			$nodes=$role_node->query("select rn.node_id from qd_role_node as rn,qd_admin_role as ar where ar.role_id=rn.role_id and ar.admin_id=".$_SESSION['admin']['id']);
			foreach($nodes as $key=>$value){
				$arr[]=$value['node_id'];
			}
			$_SESSION['admin']['nodes']=$arr;
			$this->redirect('Index/Manage');
		}
		
		public function Manage(){
			$this->display();
		}
		
		
		public function verify(){
			//import('ORG.Util.Image');
			//Image::buildImageVerify();
			$config =    array(
			'fontSize'    =>    15,    // 验证码字体大小
			'length'      =>    4,     // 验证码位数
			'useNoise'    =>    false, // 关闭验证码杂点
			 'imageH' => 40,
            'imageW' => 110,
			);
			$Verify =     new \Think\Verify($config);
			$Verify->entry();

		}
		
		public function left(){
		$this->display();
	}
	public function right(){
		$this->display();
	}
	public function top(){
		$this->display();
	}
	public function footer(){
		$this->display();
	}

    // 处理表单数据
    public function insert() {
        $Form = D("Form");
        if ($vo = $Form->create()) {
            if (false !== $Form->add()) {
                $vo['create_time'] = date('Y-m-d H:i:s', $vo['create_time']);
                $vo['content'] = nl2br($vo['content']);
				
				//3.2的 ajaxReturn 返回和3.1已经不同，只返回一个 $data
				$data['status'] = 1;
				$data['info'] = '表单数据保存成功！';
				$data['data'] = $vo;
				$this->ajaxReturn($data);
            } else {
                $this->error('数据写入错误！');
            }
        } else {
            $this->error($Form->getError());
        }
    }
}