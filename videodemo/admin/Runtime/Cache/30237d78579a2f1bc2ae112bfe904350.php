<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__PUBLIC__/admin/css/back.css" type=text/css rel=stylesheet>
<script language="javascript">
  $(function ($) { 
	//行颜色效果
	$('.all_cont tr').hover(
	function () {
        $(this).children().css('background-color', '#f9f9f9');
	},
	function () {
        $(this).children().css('background-color', '#fff');
	});
  });
</script>
<title>配置</title>
</head>
<body>
<div class="contener">
   <div class="list_head_m">
		  <div class="list_head_ml">当前位置：【环境信息】</div>
		  <div class="list_head_mr"></div>
   </div>


		<table width="100%" border="0" cellpadding="0" cellspacing="1" class="all_cont">
			<tr>
				<th width="100%" colspan="2">服务器概况</th>
			</tr>
			<tr>
				<td>服务器域名/IP地址：localhost(127.0.0.1)</td>
				<td>服务器时间：2014年7月8日 14:36:57</td>
			</tr>

			<tr>
				<td>服务器操作系统：Windows&nbsp;(内核版本：PY)</td>
				<td>站点物理路径：C:/AppServ/www</td>
			</tr>
			<tr>
				<td>服务器解译引擎：Apache/2.2.4 (Win32) PHP/5.2.3</td>
				<td>Web服务端口：80</td>
			</tr>
			<tr>
				<td>PHP版本：5.2.3</td>
				<td>PHP运行方式：APACHE2HANDLER</td>
			</tr>
			<tr>
				<td>POST最大字节数(post_max_size)：8M</td>
				<td>允许最大上传文件(upload_max_filesize)：2M</td>
			</tr>
			<tr>
				<td>程序最多允许使用内存量(memory_limit)：16M</td>
				<td>程序最长运行时间(max_execution_time)：30秒</td>
			</tr>
			
			<tr>
				<td>MySQL数据库：<font color="green">√</font></td>
				<td>Session支持：<font color="green">√</font></td>
			<tr>
				<td>允许使用URL打开文件(allow_url_fopen)：<font color="green">√</font></td>
				<td>允许动态加载链接库(enable_dl)：<font color="green">√</font></td>
			</tr>
			<tr>
				<td>显示错误信息(display_errors)：<font color="green">√</font></td>
				<td>自动定义全局变量(register_globals)：<font color="green">√</font></td>
			</tr>
		</table>

</div>

</body>
</html>