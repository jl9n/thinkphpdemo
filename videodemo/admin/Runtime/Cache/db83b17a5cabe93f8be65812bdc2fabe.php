<?php if (!defined('THINK_PATH')) exit();?>   <script src="js/jquery-1.10.2.min.js"></script>
   <link rel=stylesheet href="__PUBLIC__/admin/dhtmlet.css" type="text/css">
	<script src="js/jquery-validation-1.12.0/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.js"></script>
  <script src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
	<script src="__PUBLIC__/js/jquery-validation-1.12.0/dist/jquery.validate.min.js"></script>
<h3>学院信息添加</h3>

<form method="post" action="__APP__/Upload/uploadzx" enctype="multipart/form-data" id="photoupForm">
	
	<div style="width:300px;margin:5px 3px;">
	标题*<br /><br />
	<input type="text" name="title2"><br /><br /></div>
		
	<br />
	详细：<br /><br />
	<textarea name="content" id="content"></textarea><br />
	<input type="submit" value="submit"><br />
</form>
 <script type="text/javascript">
	
		UE.getEditor('content',{
           
        });
		
		window.UEDITOR_CONFIG = {
		
		
			
		}
	
</script>
<script>
	$().ready(function(){
		$("#photoupForm").validate({
			autoCreateRanges:true,
			errorClass:"error",
			errorElement:"span",
			rules:{
				title2:{
					required:true
				},
				tag:{
					required:true
				},
				photo:{
					required:true
				}
			},
			messages:{
				title2:{
					required:"<span style='color:red;margin-left:10px;'>*</span>"
				},
				tag:{
					required:"<span style='color:red;margin-left:10px;'>*</span>"
				},
				photo:{
					required:"<span style='color:red;margin-left:10px;'>*</span>"
				}
			}
		
		});
	
	
	
	});
	
</script>