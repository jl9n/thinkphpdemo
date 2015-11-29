<?php if (!defined('THINK_PATH')) exit();?><html>
<head>


</head>

<body>
公共的头信息

<script>
	function show(){
		
		alert('aaaa');
	}
</script>

<select id="" name="id" onchange="" ondblclick="show()" class="" ><?php  foreach($list as $key=>$val) { ?><option value="<?php echo $key ?>"><?php echo $val ?></option><?php } ?></select>





<?php echo (($title)?($title):'这家伙很懒,什么都没有留下'); ?>

<h1><?php echo ($title->id); ?></h1>时间<span><?php echo (date('Y-m-h H:i:s',$atime)); ?></span>


公工的底部信息
</body>



</html>