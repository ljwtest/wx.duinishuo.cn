<?php
require("./myConfig.php");
return array(
	//'配置项'=>'配置值'
	// URL请求地址的模式,0：普通 1：/模式 2：去掉index.php的/模式（需要REWRITE重写技术） 3：index.php?s=/xxx/xxx/xxx这种形式
	'URL_MODEL' => 2,
	//linux忽略大小写
	//'URL_CASE_INSENSITIVE' =>false,
	//'URL_PATHINFO_DEPR' => '-',
	'DB_TYPE' => 'mysql',
	'DB_HOST' => $mysql_config['host'],
	'DB_NAME' => 'wx_duinishuo',
	'DB_USER' => $mysql_config['user'],
	'DB_PWD' => $mysql_config['password'],
	//'DB_PREFIX' => 'sh_',
	/********* 微信相关配置 ***********/
	'APPID' => $wechat_config['appID'],
	'APP_SECRET' => $wechat_config['appSecret'],
	'APPOID' => $wechat_config['appOid'],
	'MY_WX_KEY' => $wechat_config['my_key'],
	/********* 默认请求的地址 ***********/
	'DEFAULT_MODULE' => 'Home',
	"DEFAULT_CONTROLLER" => "Index",
	"DEFAULT_ACTION" => "index",
	//接收到的数据使用函数过滤一下，就用于I函数
	'DEFAULT_FILTER' => 'trim,htmlspecialchars',
	//图片相关配置（自定义的，TP中没有）
	'MAX_UPLOAD_FILESIZE' =>"3M",//允许上传的大最尺寸
	"ALLOW_UPLOAD_FILETYPE" =>array('gif','png','jpg','jpeg','ejpeg','bmp'),
	'ROOT_PATH'=>'./Public/Uploads/',//图片在硬盘上的路径-->给PHP程序用的
	'VIEW_ROOT_PATH' => '/Public/Uploads/',//图片在网站中的路径-->给HTML浏览器用的
	//md5加密的密钥
	'MD5_KEY' => '!343!129fd$fd_fds=+43>?lg',
);