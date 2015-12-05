<?php
//公共文件，实现redis的连接

$redis = new Redis(); //创建Redis对象

$redis->connect("localhost"); //连接服务
$redis->auth("123456"); //验证
