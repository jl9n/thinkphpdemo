<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
    public function index(){
      	//系统常量定义
      	//系统常量定义，是THINKPHP为我们已经准备好的一些常量，在这些常量当，已经封装好了相对应的功能和值
      	//系统常量，主要是用在我们的模块下面的方法 这样的话，能够很大的提高我们的开发效率
      	
    /*  	
      	echo __ROOT__.'<br>';//代表网站的根目录地址
      	echo __APP__.'<br>';//代前项目的入口文件地址
      	echo __URL__.'<br>';//代表当前模块地址
      	echo __ACTION__.'<br>';//代表当前操作地址
      	echo __SELF__.'<br>';//代表当前的URL地址
      	echo __CURRENT__.'<br>';//代表当前模块的模版目录
      	echo ACTION_NAME.'<br>';  //当前操作名称
      	echo APP_PATH.'<br>'; //代表当前项目目录
      	echo APP_NAME.'<br>'; //代表当前项目名称
      	echo APP_TMPL_PATH.'<br>'; //代表当前项目的模版目录
      	echo APP_PUBLIC_PATH.'<br>';  //代表项目公共文件目录
      	echo CACHE_PATH.'<br>';  //项目模版缓存目录
      	echo CONFIG_PATH.'<br>';//项目的配置文件放在什么地方
      	echo COMMON_PATH.'<br>'; //项目的公共文件目录
     
      	
      	
      	//jquery   对于浏览器来解析的时候，他会按照路径和名称来去缓这些jquery.js
      	//home  admin
      	//logo   
      	//   ./Public
      	echo WEB_PUBLIC_PATH.'<br>';
      	
      	*/
      	
    		
    	
    	
    }
    
    public function tt(){
    	//$this->assign();
    	$he='成功的爱情和婚姻都需要经营';
    	
    	$this->assign('hello',$he);
    	
    	$this->display();
    }
}
?>