<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>用户登录</title>
    <script type="text/javascript" src="/Think321demo/Public/User/js/Jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/Think321demo/Public/User/js/Jquery/jquery.form.js"></script>
	<link rel="stylesheet" type="text/css" href="/Think321demo/Public/User/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="/Think321demo/Public/User/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="/Think321demo/Public/User/css/bootstrap.min.css" />
	<script type="text/javascript" src="/Think321demo/Public/User/js/bootstrap.js"></script>
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:16px; font-family: "微软雅黑"} 
	div{ padding: 3px 20px;} 
	body{ background: #fff; color: #333;}
	h2{font-size:36px}
	input,textarea {border:1px solid silver;padding:5px;width:350px}
	input{height:32px}
	input.button,input.submit{width:68px; margin:2px 5px;letter-spacing:4px;font-size:16px; font-weight:bold;border:1px solid silver; text-align:center; background-color:#F0F0FF;cursor:pointer}
	div.result{border:1px solid #d4d4d4; background:#FFC;color:#393939; padding:8px 20px;float:auto; width:85%;margin:2px}
	</style>
</head>
<body><script language="JavaScript">
    <!--
    $(function(){
        $('#form1').ajaxForm({
            beforeSubmit:  checkForm,  // pre-submit callback
            success:       complete,  // post-submit callback
            dataType: 'json'
        });
        function checkForm(){
            if( '' == $.trim($('#title').val())){
                $('#result').html('标题不能为空').show();
                return false;
            }
            //可以在此添加其它判断
        }
        function complete(data){
            if (data.status==1){
                $('#result').html(data.info).show();
                // 更新列表
                data = data.data;
                var html =  '<div class="result" style=\'font-weight:normal;background:#A6FF4D\'><div style="border-bottom:1px dotted silver">标题：'+data.title+'  [ '+data.create_time+' ]</div><div class="content">内容：'+data.content+'</div></div>';
                $('#list').prepend(html);
            }else{
                $('#result').html(data.info).show();
            }
        }

    });
    function checkTitle(){
        $.post('/Think321demo/User/Index/checkTitle',{'title':$('#title').val()},function(data){
            $('#result').html(data.info).show();
        },'json');
    } 
    //-->
    </script>
    <div class="main">
        <h2>用户登录</h2>
        <form id="form1" method='post' action="/Think321demo/User/Index/insert">   
            <table cellpadding=2 cellspacing=2>
                <tr>
                    <td colspan="2"><div id="result" class="result" style="display:none;"></div></td>
                </tr>
                <tr>
                    <td >用户名：</td>
                    <td ><div class="input-group">
					<span class="input-group-addon" id="basic-addon1"></span>
					<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
				</div></td>
                </tr>
                <tr>
                    <td >密码：</td>
                    <td><div class="input-group">
					<span class="input-group-addon" id="basic-addon1"></span>
					<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1"></div>
				</td>
				<td>
				<div class="btn-group" role="group" aria-label="...">
				<button type="button" class="btn btn-default"><a href=" <?php echo U('Index/reg',array('tid'=>$vo['tid']));?>">注册</a></button>
				</div>
				</td>
                </tr>
				  <tr>
                    <td ></td>
                    <td ><div class="input-group">
					<span class="input-group-addon" id="basic-addon1"></span>
					<input type="text" class="form-control" placeholder="verify" aria-describedby="basic-addon1">
				</div></td>
				<td><img src="/Think321demo/User/Index/verify" style="position:relative; top:6px;" onclick="this.src=this.src"+new Date().getTime();/></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="ajax" value="1"></td>
                    <td><div class="btn-group" role="group" aria-label="...">
				<button type="button" class="btn btn-default">登录</button>
				</div> <div class="btn-group" role="group" aria-label="...">
				<button type="button" class="btn btn-default">清空</button>
				</div></td>
                </tr>
                <tr>
                    <td colspan="2"> <div id="list" >
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="result" style='font-weight:normal;<?php if(($mod) == "1"): ?>background:#ECECFF<?php endif; ?>'><div style="border-bottom:1px dotted silver">标题：<?php echo ($vo["title"]); ?>  [ <?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?> ]</div>
                                    <div class="content">内容：<?php echo (nl2br($vo["content"])); ?></div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>