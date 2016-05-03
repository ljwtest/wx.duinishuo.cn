<?php
header("content-type:text/html;charset=utf-8");
/**
  * wechat php test
  */
require("./myConfig.php");
$appId		=	$wechat_config['appID'];
$appSecret	=	$wechat_config['appSecret'];
$appOid 	=	$wechat_config['appOid'];
define('APPID',$appId);
define('APPSECRET',$appSecret);

///获取微信access_token的方法（用文件实现)
function get_token(){
	if(file_exists("./wx_token") && time()-filemtime("./wx_token")<4000){
		return file_get_contents("./wx_token");
	}else{
		$return=file_get_contents("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".APPID."&secret=".APPSECRET);
		$re_obj=json_decode($return);
		file_put_contents("./wx_token",$re_obj->access_token);		
		return $re_obj->access_token;
	}	
}

function get_wx_ip(){
	$token=get_token();
	$return=file_get_contents("https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=".$token);
	return $return;
}

$v=json_decode(get_wx_ip(),true);

var_dump($v);