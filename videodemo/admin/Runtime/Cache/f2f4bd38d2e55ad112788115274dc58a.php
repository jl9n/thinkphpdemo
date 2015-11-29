<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/admin/css/back.css" type="text/css" rel=stylesheet>
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><?php echo ($vo["id"]); ?>

<?php echo ($vo["username"]); ?><?php endforeach; endif; ?>