<?php
class FileAction extends Action{
		
	
	
		function index(){
			$file=M('file');
			$list=$file->select();
			
			$this->assign('filelist',$list);
			
			$this->display();
		}
		
		function upload(){
			//文件上传的地址提交给他，并且上传完成之后返回一个信息，让其写入数据库
			//如果$_FILES为空的话，我就让action给出一个错误提示，告诉用户必须选择上传文件，如果有上传文件,则调用up方法
			if(empty($_FILES)){
				$this->error('必须选择上传文件');
			}else{
				$a=$this->up();
				if(isset($a)){
					//写入数据库的方法
					if($this->c($a)){
						$this->success('上传成功');
					}else{
						$this->error('写入数据库失败');
					}
				}else{
					$this->error('上传文件有异常请与系统管理员联系');
				}
			}
			
		}
		
		private function c($data){
					$file=M('file');
					$data['filename']=$data[0]['savename'];
					if($file->data($data)->add()){
						return true;
					}else{
						return false;
					}
		}
		//私有方法，在这个方法当中，完成与thinkphp相关的，文件上传类的调用
		private function up(){
			//echo '模拟上传';
			//基本上传功能
			//批量上传功能
			//生成图片缩略图
			//自定义参数上传
			//上传检测(大小，后缀，mime类型)
			//支持覆盖方式上传
			//上传类型，附件大小，上传路径定义
			//支持哈希或者日期子目录保存上传文件
			//上传图片的安全性检测
			//对上传文件的hash检测
			//上传文件名自定规范
			import('@.Org.UploadFile');
			$upload=new UploadFile();
			$upload->maxSize='1000000';  //是指上传文件的大小，默认为-1,不限制上传文件大小bytes
			$upload->savePath='./Public/upload/';       //上传保存到什么地方？路径建议大家已主文件平级目录或者平级目录的子目录来保存
			$upload->saveRule=uniqid;    //上传文件的文件名保存规则  time uniqid  com_create_guid  uniqid
			//$upload->autoCheck=false   ;  //是否自动检测附件
			$upload->uploadReplace=true;     //如果存在同名文件是否进行覆盖
			$upload->allowExts=array('jpg','jpeg','png','gif');     //准许上传的文件后缀
			$upload->allowTypes=array('image/png','image/jpg','image/pjpeg','image/gif','image/jpeg');  //检测mime类型
			$upload->thumb=true;   //是否开启图片文件缩略
			$upload->thumbMaxWidth='300,500';  //以字串格式来传，如果你希望有多个，那就在此处，用,分格，写上多个最大宽
			$upload->thumbMaxHeight='200,400';	//最大高度
			$upload->thumbPrefix='s_,m_';//缩略图文件前缀
			//$upload->thumbSuffix='_s,_m';  //文件后缀
			//$upload->thumbPath='' ;  // 如果留空直接上传至
			//$upload->thumbFile   在数据库当中也存一个文件名即可
			$upload->thumbRemoveOrigin=1;  //如果生成缩略图，是否删除原图
			//$upload->autoSub   是否使用子目录进行保存上传文件
			//$upload->subType=''   子目录创创方式默认为hash 也可以设为date
			//$upload->dateFormat  子目录方式date的指定日期格式
			//$upload->hashLevle
			
			//upload()  如果上传成功，返回tur,失败返回false
			
			if($upload->upload()){
					//局部变量，你可以在此处，保存到一个超全局变量当中去进行返回
					$info=$upload->getUploadFileInfo();
					return $info;
			}else{
				//是专门来获取上传的错误信息的
				$this->error($upload->getErrorMsg());
			}
			
		}
	
	
	
}


?>