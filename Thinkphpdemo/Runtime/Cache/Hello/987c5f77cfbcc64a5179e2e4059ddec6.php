<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>ThinkPHP示例：Hello,ThinkPHP</title>
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:24px; font-family: "微软雅黑"} 
	div{ padding: 3px 20px;} 
	body{ background: #fff; color: #333;}
	h2{font-size:36px}
	</style>
	<script language="javascript" type="text/javascript" src="/Think321demo/Public/date/My97DatePicker/WdatePicker.js"></script>
</head>
<body>
	<div class="main">
		<h2>ThinkPHP示例之Hello</h2>
		<div class="result"><?php echo ($hello); ?></div>
		<input class="Wdate" type="text" onClick="WdatePicker()" name="biyeshijian" > 
	</div>
</body>
</html>