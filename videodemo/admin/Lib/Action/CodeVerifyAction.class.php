<?php

	
			 
       //验证码类
	   class CodeVerifyAction extends Action{
		function codeVerify(){
				//模版设置传的验证码的参数
				$w = $_GET['w'];
			    $h = $_GET['h'];
			    $type = $_GET['type'];
			    $length = $_GET['length'];
		//创建画布
		$im=imagecreatetruecolor($w,$h);
		//分配颜色
		$qian=imagecolorallocate($im,mt_rand(127,255),mt_rand(127,255),mt_rand(127,255));
		$dark=imagecolorallocate($im,mt_rand(0,50),mt_rand(0,50),mt_rand(0,50));
		$dian=imagecolorallocate($im,mt_rand(110,222),mt_rand(0,100),mt_rand(110,220));
		$xian=imagecolorallocate($im,mt_rand(100,115),mt_rand(100,115),mt_rand(0,50));
		imagefill($im,0,0,$qian);
		//画干扰点
		for($i=0;$i<200;$i++){
		imagesetpixel($im,mt_rand(0,$w),mt_rand(0,$h),$dian);
		}
		//画干扰线
		for($i=0;$i<38;$i++){
		  imageline($im,mt_rand(0,$w),mt_rand(0,$h),mt_rand(0,$w),mt_rand(0,$h),$xian);
		}
		//写验证码
		//$type = 4;	
        //$length = 4;		
		     switch($type){
			      case 1:
				    $text = implode('',array_rand(range(0,9),$length));break;
				  case 2:
				    $text = implode('',array_rand(array_flip((range(a,z))),$length));break;
				  case 3:
				    $text = implode('',array_rand(array_flip(range(A,Z)),$length));break;
				  case 4:
				    $text = substr(str_shuffle(implode('',range(0,9)).implode('',range(a,z)).implode('',range(A,Z))),0,$length);break;
			 }		
		$fontFile='./Public/Font/verdanaz.ttf';//声明字体路径
		$pjz = $w/$length;//求出平均值 100/4==25    0  25  50 75 100
		for($i=0;$i<$length;$i++){
		$x=$i*$pjz+2;
		$y = mt_rand(25,$h-10);
		//为此类设置验证码
		$t.=$text[$i];
		//设置验证码
		$_SESSION['codeVerify'] = $t;
		imagettftext($im,20,0,$x,$y,$dark,$fontFile,$text[$i]);
		}		
		header("Content-Type:image/png");
		imagepng($im);
		}
	}