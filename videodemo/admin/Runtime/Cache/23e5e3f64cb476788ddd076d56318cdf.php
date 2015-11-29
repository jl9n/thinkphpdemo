<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/admin/css/back.css" type="text/css" rel=stylesheet>
<form action="__URL__/uploadmima" method="post">
<table><tr><td>
管理员账号</td><td>
<?php if(is_array($mima)): foreach($mima as $key=>$vo): ?><select name="selmima">
	<option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["username"]); ?></option>
</select></td></tr><?php endforeach; endif; ?><br />
<tr><td>原密码</td><td><input type="password" name="old"></td></tr>
<tr><td>新密码</td><td><input type="password" name="new"></td></tr>
<tr><td><input type="reset" value="重置" ></td><td>
<input type="submit" value="提交"></td></tr>
</table>
</form>