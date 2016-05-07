<?php
namespace Wechat\Model;
use Think\Model;
class WxTokenModel extends Model
{
	
	public function check_wx_connect(){
		$echoStr = $_GET["echostr"];
        if($this->checkSignature()){
        	echo $echoStr;
        	exit;
        }
	}	
	//用来验证微信的校验的
	private function checkSignature()
	{
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }
        
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
	
	///获取微信access_token的方法（用文件实现)
	public function get_token(){
		$appID=C('APPID');
		$appSecret=C('APP_SECRET');
		$appOid=C('APPOID');
		$token=$this->limit(1)->find();	
		if($token && time()- strtotime($token['add_time']) < 4000){
			return $token['token'];
		}else{
			$return=file_get_contents("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appID."&secret=".$appSecret);
			$re_obj=json_decode($return);
			$data['token']=$re_obj->access_token;
			$this->add($data);
			return $re_obj->access_token;
		}
	}
	//获取微信ip接口
	public function get_wx_ip(){
		$token=$this->get_token();
		$return=file_get_contents("https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=".$token);
		return $return;
	}
	
	public function get_user(){
		$token=$this->get_token();
		$return=file_get_contents("https://api.weixin.qq.com/cgi-bin/user/get?access_token=".$token."&next_openid=");
		return $return;
	}
}