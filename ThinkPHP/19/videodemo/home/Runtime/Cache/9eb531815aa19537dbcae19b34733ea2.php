<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<script src="__PUBLIC__/js/Base.js"></script>
<script src="__PUBLIC__/js/prototype.js"></script>
<script src="__PUBLIC__/js/mootools.js"></script>
<script src="__PUBLIC__/js/Ajax/ThinkAjax.js"></script>
<script>
	function add(){
		ThinkAjax.sendForm('frm','__URL__/add',wc,'result');
	}
	
	function wc(data,status){
			if(status!=1){
				alert('发送失败请检查');
			}else{
				$('list').innerHTML+='标题'+data.title+',信息'+data.message;
			}
		
	}
</script>
</head>

<body>
<div id="result"></div>
<div id="list"></div>
<form action="__URL__/add" method="POST" id="frm">

	标题<input type="text" name="title"><br>
	
	信息<input type="text" name="message"><br>
	
	<input type="button" value="提交" onclick="add()">

</form>


</body>
</html>