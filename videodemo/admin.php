<?php
//初使化，进行加载。
//通过这个英文名来了解，他是定义的与thinkphp有关的核心框架文件目录路径
//他可以通过这一个常量，在以后运行的时候都去找这个路径，确保在运行过程当，路径是绝对没有问题（绝对不会对整个项目运行加载路径产生错误）
//第二重意义，做一个操作（防跳墙）,是防止用户直接访问我们的敏感文件。
//我就可以做一个页面，包含这个敏感页面，用户的访问必须通过。在做的这个页当中（A），在A页当中处理好与安全相关的事宜。
define('THINK_PATH','./ThinkPHP/');
//APP_PATH,项目路径
//我们不是说，做项目吗？难道，这个地方的项目与我们所说的去开发一个项目是一个意思？
//开发一个cms项目，开发一个论坛项目，开发一个博客项目(project)工程。盖一个房子
//APP_PATH,应用路径（项目路径）  前台应用和后台应用。
//我们将前台应用专门放置一个文件夹，将后台应用放置一个文件夹（我们去查找的时候，是不是更加科学规范）
//
define('APP_PATH','./admin/');
//APP_NAME 项目名称（应用名称）
//第一，让thinkphp在加载的时候，能够很好的进行区分。
//第二，能够让我们以后在做权限管理的时候，RBAC的时候，能够去很好的控制前台和后台的权限，分开。
define('APP_NAME','admin');

define('LIB_PATH',APP_PATH.'Libraries');

define('CONF_PATH',APP_PATH.'Config/');

define('APP_DEBUG',true);
//temp
//define('RUNTIME_PATH','./admin/temp/');
//你的重点，不是着急！！！
//以后在排错的时候，是不是更加科学呀。
//define('STRIP_RUNTIME_SPACE',false);

//这样的话，确实能够在开发过当中，让其不缓存相关的加载项

//在你开发过程当中，可能会遇到这样的问题。
//就是你会发现你什么地方好像都没错。但是，他就提示你~runtime.php下面的第一行......错误



//你的重点，也不是我为你录了多少集.

//这一块知识点我真的掌握了吗？

//懂了，并不是会开发了。只有自己写了，才是会做了！
//require 
//require_once
//include
//他的主要目地就是干一件事，包含 thinkphp框架的入口文件
require THINK_PATH.'ThinkPHP.php';
//App::run(); 面向对象当中的静态方法和静态属性这一章
//App是一个类
App::run();




//~app.php这个文件，通常包含以下文件：项目配置文件（默认配置，自定义配置），项目公用函数文件common.php

//conf  app.php   return array(加载的文件列表);

//主入口文件没概念


?>