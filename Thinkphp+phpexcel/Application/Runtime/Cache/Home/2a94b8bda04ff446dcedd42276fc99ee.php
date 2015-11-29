<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title>演示：PHP之phpexcel导出和导入</title>
        <meta name="keywords" content="excel导入,excel导出" />
        <meta name="description" content="在网上找了很多excel导出和导入示例，代码不是很简洁，很多出错，自己在excel方法和控制器改了下。" />
        <link rel="stylesheet" type="text/css" href="http://www.sucaihuo.com/jquery/css/common.css" />

    </head>
    <body>
        <div class="head">
            <div class="head_inner clearfix">
                <ul id="nav">
                    <li><a href="http://www.sucaihuo.com">首 页</a></li>
                    <li><a href="http://www.sucaihuo.com/templates">网站模板</a></li>
                    <li><a href="http://www.sucaihuo.com/js">网页特效</a></li>
                    <li><a href="http://www.sucaihuo.com/php">PHP</a></li>
                    <li><a href="http://www.sucaihuo.com/site">精选网址</a></li>
                </ul>
                <a class="logo" href="http://www.sucaihuo.com"><img src="http://www.sucaihuo.com/Public/images/logo.jpg" alt="素材火logo" /></a>
            </div>
        </div>
        <div class="container">

            <div class="demo">
                <h2 class="title"><a href="http://www.sucaihuo.com/php/141.html">教程：PHP之phpexcel导出和导入</a></h2>
                <p style="margin:10px 0"><a href="<?php echo U('Index/excelExport');?>" class="btn">导出</a></p>
                <form action="<?php echo U('Index/upload');?>" method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label>Excel表格：</label>
                        <input type="file"  name="file"/>
                    </div>
                    <div class="control-group">
                        <input type="submit"  value="导入" />
                    </div>
                </form>
            </div>
        </div>
        <div class="foot">
            Powered by sucaihuo.com  本站皆为作者原创，转载请注明原文链接：<a href="http://www.sucaihuo.com" target="_blank">www.sucaihuo.com</a>
        </div>
    </body>
</html>