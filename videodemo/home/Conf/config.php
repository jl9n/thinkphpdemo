<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'=>'mysql',//指定数据库连接方式
	'DB_NAME'=>'study',//指定数据库名
	'DB_HOST'=>'localhost',//本机
	'DB_USER'=>'root',		//数据库登陆用户名
	'DB_PWD'=>'root',		//登陆密码
	'DB_PREFIX'=>'think_',	//表前缀
	//'URL_MODEL'=>2,
	//'SHOW_PAGE_TRACE'=>true,
	//'HTML_CACHE_ON'=>true,
	//'URL_ROUTER_ON'=>true,
	'URL_HTML_SUFFIX'=>'.html',
	//'URL_MODEL'=>'2',
	//'DB_PREFIX'=>'f_',
	'URL_CASE_INSENSITIVE' =>false,
	'DB_PORT'=>'3306',
	//'HTML_FILE_SUFFIX'=>'.html',
	'TMPL_PARSE_STRING'=>array(
		'__PUBLIC__'=>'Public',
		'__JS__'=>'Public/js',
		'__UPLOAD__'=>'Uploads',
		'TMPL_L_DELIM'=>'<{',
		'TMPL_R_DELIM'=>'}>',
		
	)
);
?>