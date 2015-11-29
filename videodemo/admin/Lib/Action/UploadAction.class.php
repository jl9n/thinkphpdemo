<?php
// 本类由系统自动生成，仅供测试用途
class UploadAction extends Action{
	
	public function photoupload(){
			
			$data['sid']= $_POST['sort'];
			
			$data['Mtitle']=$_POST['title2'];
			
			$data['tag']=$_POST['tag'];
			
			$data['content']=$_POST['content'];
			
			import("ORG.Net.UploadFile");
			
			$upload=new UploadFile();
			
			$upload->maxSize=3145728;
			
			$upload->allowExts=array('jpg','gif','jpeg','png');
			
			$upload->savePath='./Public/Uploads/';
			
			$upload->saveRule='uniqid';
			
			if(!$upload->upload()){
				$this->error($upload->getErrorMsg());
			}else{
				$info=$upload->getUploadFileInfo();
			}
			$data['photo']='./Public/Uploads/'.$info[0]['savename'];
			
						
			$Mange=M('mange');
			
			$res=$Mange->data($data)->add();
			
			echo $res;
			
		
			
		}
		
		public function uploadzx(){
		
	
			
			$data['title']=$_POST['title2'];
			
		
			
			$data['content']=stripslashes($_POST['content']);
			
			//htmlspecialchars_decode
			
			//$data['content']=htmlspecialchars_decode($_POST['content']);
			
			//var_dump($data['content']);
			
			
			/* $regex='/\<img/';
			
			preg_match($regex,$data['content'],$matches);
			
			var_dump($matches);
			
			echo "<hr>"; */
			
			//var_dump($data);
			
			//exit;
						
						
			$Mange=M('intruce');
			
			$res=$Mange->data($data)->add();
			
			echo $res;
			
		
		
		}
		
		
		public function uploadlx(){
		
	
			
			//$data['title']=$_POST['title2'];
			
		
			
			$data['content']=stripslashes($_POST['content']);
			
			//htmlspecialchars_decode
			
			//$data['content']=htmlspecialchars_decode($_POST['content']);
			
			//var_dump($data['content']);
			
			
			/* $regex='/\<img/';
			
			preg_match($regex,$data['content'],$matches);
			
			var_dump($matches);
			
			echo "<hr>"; */
			
			//var_dump($data);
			
			//exit;
						
						
			$Contact=M('contact');
			
			$res=$Contact->data($data)->add();
			
			echo $res;
			
		
		
		}
		
		}