<?php if (!defined('THINK_PATH')) exit();?>   <script src="js/jquery-1.10.2.min.js"></script>
   <link rel=stylesheet href="__PUBLIC__/admin/dhtmlet.css" type="text/css">
   <link href="__PUBLIC__/admin/css/back.css" type="text/css" rel=stylesheet>
	<script src="js/jquery-validation-1.12.0/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.js"></script>
  <script src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
	<script src="__PUBLIC__/js/jquery-validation-1.12.0/dist/jquery.validate.min.js"></script>
<h3>学生信息添加</h3>

<form method="post" action="__APP__/Upload/photoupload" enctype="multipart/form-data" id="photoupForm">
	<div style="width:300px;margin:5px 3px;">分类: <br /><br /><select class="wd" name="sort">
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	</select><br /><br /></div>
	<div style="width:300px;margin:5px 3px;">
	标题*<br /><br />
	<input type="text" name="title2"><br /><br /></div>
	<div style="width:300px;margin:5px 3px;">
	标签*<br /><br />
	<select name="tag">
		<option></option>
		<option >   专业管理   </option>
		<option>各项通知</option>
		<option>  毕业与学位管理  </option>
	</select><br /><br /></div>
	标题图<br /><br />
	
		<input type="file" name="photo"><br /><br />
		
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