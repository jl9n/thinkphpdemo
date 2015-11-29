<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action{
//thinkphp当中模块（控制器），动作，与URL路径之间的关系

//我们的所有访问模块还有动作，全部都必须经过主入口文件（项目入口文件）
//如果我们访问admin.php这个主入口文件的时候，我们并不知道该访问哪一个模块（控制器），也不知道该问控制器当中的哪一个方法

//thinkphp规定，所有的主入口文件默认访问index控制器
//并且，所有的控制器默认是去找index方法（动作）

//用户注册相关的（在各个模块下面，放置与之相关的方法吧）
//商品管理相关



//你并没有解决我刚刚所说的
//因为thinkphp为我们提供了四种路径访问默式

//conf目录下来做做修改
//0    叫做普通模式  http://bbs.lampbrother.net/index.php?a=d&m=user
//1    叫pathinfo模式   http://bbs.lampbrother.net/index.php/shop/index(为默认访问默式)
//2    rewrite重写（伪静态） 你自己可以写相关的rewrite规则,也可以使用系统为我们提供的rewrite规则（）http://bbs.lampbrother.net/user/index

//当服务器上面不支持pathinfo模式的时候，但是你又在之前的路访问格式上面，全部用的是pathinfo格式。

//它会提示你路径格式不正确。  好，你可以用3兼容模式来处理  GET，
//3    叫做兼容模式   他的路径访问http://bbs.lampbrother.net/index.php?s=/user/g


    public function index(){
        header("Content-Type:text/html; charset=utf-8");
       echo '结婚是一个错，长久的婚姻是将错就错，你是否愿意与我将错就错。';
    }
    function del(){
    	echo '我我我我我我我我，你你你你你，他他他他他';
    }
    
    function reg(){
    	echo '我们都很好';
    }
}
?>