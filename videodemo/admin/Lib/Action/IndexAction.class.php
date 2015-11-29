<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
    public function index(){
       
        //echo "<div style='font-weight:normal;color:blue;float:left;width:345px;text-align:center;border:1px solid silver;background:#E8EFFF;padding:8px;font-size:14px;font-family:Tahoma'>^_^ Hello,欢迎使用<span style='font-weight:bold;color:red'>ThinkPHP</span></div>";
        //echo "<div style='font-weight:normal;color:blue;float:left;width:345px;text-align:center;border:1px solid silver;background:#E8EFFF;padding:8px;font-size:14px;font-family:Tahoma'>^_^ Hello,欢迎使用<span style='font-weight:bold;color:red'>ThinkPHP</span></div>";
		/* echo "<a href='./Index/show'>查看在线报名</a>";
		
		echo "<br />";
		
		echo "<a href='./Index/tijiao'>查看问题提交</a>";
		
		echo "<br />";
		
		echo "<a href='./Index/xinxi'>信息提交</a>";
			
		
		echo "<div align='right'>欢迎  ".$_SESSION['name']."|消息(".$_SESSION['msg'].")|退出<A href='javascript:void(0)'><p>点我啊</p></a></div>";
		 */
		
	/* 	<script>
		$("p").bind("click", function(){
		alert( $(this).text() );
	});
		
		</script> */
		
		//echo "<script>";
		
		//echo "$('p').bind('click',function(){
		//	alert($(this).text());})";
		
		//echo "</script>";
		 header("Content-Type:text/html; charset=utf-8");
		 
		 if(!empty($_SESSION['name'])){
		
		$msg=$_SESSION['msg'];
		
		$name=$_SESSION['name'];
		
		$this->assign('name',$name);
		
		$this->assign('msg',$msg);
		
		$this->display('index1');
		
		}else{
			
			header("location:./Login/login");
		}
	}
	
	public function show(){
	
		header("Content-Type:text/html; charset=utf-8");
		
		
		if(!empty($_SESSION['name'])){
			$User=M('baoming');
		
		//var_dump($User);
	
		$list=$User->query('select id,name,tel,qq,e_mail,zhuanye,ceng,beizhu,date,status from think_baoming order by id desc');
		
		import('ORG.Util.Page');
		
		$count=$User->count();
		
		
		//$Page=new Page($count,10);
		
		//$show=$Page->show();
		
		//echo "<center><h2>学员在线报名</h2></center>";
		
		//echo "<center><table width='800' border='1'>";
		
		//echo "<tr><th>id</th><th>时间</th><th>姓名</th><th>电话</th><th>联系方式</th><th>电子邮件</tj><th>所报专业</th><th>专业层次</th><th>备注</th></tr>";
		for($i=0;$i<(count($list));$i++){
			
			$id=$list[$i]['id'];
			$str="<tr><td>".$id."</td>";
			$date=$list[$i]['date'];
			$str.="<td>".date('y-m-d H:i:s',$date)."</td>";
			$name=$list[$i]['name'];
			$str.="<td>".$name."</td>";
			$tel=$list[$i]['tel'];
			$str.="<td>".$tel."</td>";
			$qq=$list[$i]['qq'];
			$str.="<td>".$qq."</td>";
			$e_mail=$list[$i]['e_mail'];
			$str.="<td>".$e_mail."</td>";
			$zhuanye=$list[$i]['zhuanye'];
			$str.="<td>".$zhuanye."</td>";
			$ceng=$list[$i]['ceng'];
			$str.="<td>".$ceng."</td>";
			$beizhu=$list[$i]['beizhu'];
			$str.="<td>".$beizhu."</td>";
			//$date=$list[$i]['date'];
			//$str.="<td>".date('y-m-d H:i:s',$date)."</td></tr>";
		//	echo $str;
		}
		
		//echo "</table></center>";
		
		}else{
			
			header("location:../Login/login");
		}
	
		
		//var_dump($name);
		
		//$str.="</table></center>";
		
		//$this->assign('table',$str);
		
		//$this->display('about');
		
		$this->assign('baoming',$list);
		
		$this->display('about1');
	}
	
	public function tijiao(){
	
		header("Content-Type:text/html; charset=utf-8");
		
		if(!empty($_SESSION['name'])){
		
			$User=M('xs');
		
		//var_dump($User);
	
		$list=$User->query('select id,name,tel,demo from think_xs order by id desc');
		
		//echo "<center><h3>学员提交问题</h3></center>";
		
		//echo "<center><table width='800' border='1'>";
		
		//echo "<tr><th>id</th><th>姓名</th><th>电话</th><th>提交问题</th></tr>";
		for($i=0;$i<(count($list));$i++){
			
			$id=$list[$i]['id'];
			$str="<tr><td>".$id."</td>";
			$name=$list[$i]['name'];
			$str.="<td>".$name."</td>";
			$tel=$list[$i]['tel'];
			$str.="<td>".$tel."</td>";
			$beizhu=$list[$i]['demo'];
			$str.="<td>".$beizhu."</td></tr>";
		//	echo $str;
		}
		
		//	echo "</table></center>";		
		}else{
			header('location:../Login/login');
		}
	
		
		//echo $str."</table>";
		//var_dump($name);
		
		$this->assign('question',$list);
		
		$this->display('about');
	}
	
	public function xinxi(){
	
		$this->display('aboutx');
	
	}
	
	public function left(){
		
		$this->display();
	
	}
	
	public function photoupload(){
		
		import("ORG.Net.UploadFile");
		
		$upload=new UploadFile();
		
		$upload->maxSize=3145728;
		
		$upload->allowExts=array('jpg','gif','jpeg','png');
		
		$upload->savePath='./Public/Uploads/';
		
		
		
		if(!$upload->upload()){
			$this->error($upload->getErrorMsg());
		}else{
			$info=$upload->getUploadFileInfo();
		}
	
		
	}
	
	public function xxtj(){
	
		$Sort=M('sort');
	
		$res=$Sort->select();
		
		$this->assign('list',$res);
	
		$this->display();
	
	}
	
	public function xxll(){
		
			$res=M('mange');
			
			$res2=$res->select();
		
			$this->assign('list',$res2);
			
			$this->display();
	
	}
	
	
	public function fanhui(){
		
			$User=M('baoming');
			
			$res=$User->where('status=0')->find();
			
			$User2=M('xs');
			
			$res2=$User2->where('status=0')->find();
			
			if($res<>0 || $res2<>0){
				echo 1;
			}
		
		
		}
		
	public function newmessage(){
	
		$User=M('baoming');
		
		$Xs=M('xs');
		
	
		$list=$User->query('select id,name,tel,qq,e_mail,zhuanye,ceng,beizhu,date,status from think_baoming where status=0');
		
		if(empty($list)){
			
			$list=$Xs->query('select id,name,tel,demo,status from think_xs where status=0');
			
		}
		
		$this->assign('list',$list);
		
		$this->display('newmessage');
	
	}
	
	public function update(){
	
			$Baoming=M('baoming');
			
			$Xs=M('xs');
			
			$p=$_POST['str_Menu'];
			//print_r($p);
			
			foreach($p as $k=>$v){
				//echo '被选值'.$k.'：'.$v.'<br />';
				$list=$Baoming->query("update think_baoming set status=1 where id=".$v."");
				$list=$Xs->query("update think_xs set status=1 where id=".$v."");
			} 
	
			if($list){
				echo 111;
			}
			
			
			header('location:./xxll');
	
		//var_dump($str_Menu);
		
		
		
		/* for($i=0;$i<count($str_Menu);$i++){
			
			echo $str_Menu[$i];
		
		} */
		
		//$list=$Baoming->query("update think_baoming set status=1 where id=".$_POST['']."");
	
	}
	
		public function lbgl(){
			
			$Sort=M('sort');
			
			$res=$Sort->select();
			
			$this->assign('list',$res);
			
			$this->display();
			
		}
		
		public function u_upload(){
		
					
			$Sort=M('sort');
		
			$data['id']=$_POST['id'];
			
			$data['title']=$_POST['title'];
			
			$res=$Sort->where('id='.$data['id'])->save($data);
			
						
			if($res){
				
				header('location:./lbgl');
			}
		
		}
		
		public function mainfra(){
			$res=M('mange');
			
			$res2=$res->select();
		
			$this->assign('list',$res2);
			
			$this->display();
		}
		
		public function i_upload(){
			
			$Sort=M('sort');
			
			$data['title']=$_POST['title'];
		
			$res=$Sort->add($data);
			
			if($res){
				header('location:./lbgl');
			}
		
		
		}
		
		public function modmima(){
		
			$User=M('user');
			
			$res=$User->query('select id,username from think_user');
		
			$this->assign('mima',$res);
		
			$this->display();
		
		}
		
		public function uploadmima(){
		
				
				$User=M('user');
			
				$res=$User->query('update think_user set passwd="'.$_POST['new'].'" where id="'.$_POST['selmima'].'" and passwd="'.$_POST['old'].'"');
				
				//echo $User->getLastSql();
				
				//exit;
				
				if(!$res){
					
					echo 'mimaxiugaichenggong';
				
				
				}
			
		
		}
		
		public function listmima(){
		
			
			$User=M('user');
			
			$res=$User->query('select id,username from think_user');
			
			$this->assign('list',$res);
			
			$this->display();
		
		}
		
		public function zxje1(){
		
			
			$this->display();
		
		}
		
	
		
		
	
	public function h_upload(){
		
		header("Content-Type:text/html;charset=utf-8");
		
		//var_dump($_POST);
		$Article=M('article');
			
		$data['title']=$_POST['title'];
		
		$data['content']=$_POST['content'];
		
		$res=$Article->add($data);
		
		//if($res){
		//	$this->redirect('Index/index',1,'页面跳转中..');
		//}
		header('location:../');
	}
	
	/* public function Ipll(){
	import('ORG.Net.IpLocation');
$ip_data = new IpLocation();
$area = $ip_data->getlocation($ip);
var_dump($area);
	
	} */
	
}
?>