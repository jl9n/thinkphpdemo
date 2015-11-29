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
				<td>服务器域名/IP地址：<<?php echo ($config_arr["server_name"]); ?>>(<<?php echo ($config_arr["server_ip"]); ?>>)</td>
				<td>服务器时间：<<?php echo ($config_arr["server_time"]); ?>></td>
			</tr>

			<tr>
				<td>服务器操作系统：<<?php echo ($config_arr["os"]); ?>>&nbsp;(内核版本：<<?php echo ($config_arr["os_core"]); ?>>)</td>
				<td>站点物理路径：<<?php echo ($config_arr["server_root"]); ?>></td>
			</tr>
			<tr>
				<td>服务器解译引擎：<<?php echo ($config_arr["server_engine"]); ?>></td>
				<td>Web服务端口：<<?php echo ($config_arr["server_port"]); ?>></td>
			</tr>
			<tr>
				<td>PHP版本：<<?php echo ($config_arr["php_version"]); ?>></td>
				<td>PHP运行方式：<<?php echo ($config_arr["php_run_type"]); ?>></td>
			</tr>
			<tr>
				<td>POST最大字节数(post_max_size)：<<?php echo ($config_arr["post_max_size"]); ?>></td>
				<td>允许最大上传文件(upload_max_filesize)：<<?php echo ($config_arr["upload_max_filesize"]); ?>></td>
			</tr>
			<tr>
				<td>程序最多允许使用内存量(memory_limit)：<<?php echo ($config_arr["memory_limit"]); ?>></td>
				<td>程序最长运行时间(max_execution_time)：<<?php echo ($config_arr["max_execution_time"]); ?>>秒</td>
			</tr>
			
			<tr>
				<td>MySQL数据库：<<?php echo ($config_arr["mysql_support"]); ?>></td>
				<td>Session支持：<<?php echo ($config_arr["session_support"]); ?>></td>
			<tr>
				<td>允许使用URL打开文件(allow_url_fopen)：<<?php echo ($config_arr["allow_url_fopen"]); ?>></td>
				<td>允许动态加载链接库(enable_dl)：<<?php echo ($config_arr["enable_dl"]); ?>></td>
			</tr>
			<tr>
				<td>显示错误信息(display_errors)：<<?php echo ($config_arr["display_errors"]); ?>></td>
				<td>自动定义全局变量(register_globals)：<<?php echo ($config_arr["register_globals"]); ?>></td>
			</tr>
		</table>

</div>
</body>
</html>