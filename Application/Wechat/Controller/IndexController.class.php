<?php
namespace Wechat\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		//先做微信接口校验
       $this->check_wx_connect();       
       
		echo "这里是微信接口测试地址";
		echo "<hr>非WECHAT访问";
		$model=M("wx_token");
		var_dump($this->get_token());
		$this->display();
	}
	
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
		if(file_exists("./wx_token") && time()- filemtime("./wx_token")<4000){
			return file_get_contents("./wx_token");
		}else{
			$return=file_get_contents("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appID."&secret=".$appSecret);
			$re_obj=json_decode($return);
			file_put_contents("./wx_token",$re_obj->access_token);
			return $re_obj->access_token;
		}
	}

	public function get_wx_ip(){
		$token=get_token();
		$return=file_get_contents("https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=".$token);
		return $return;
	}
	
	public function get_user(){
		$token=get_token();
		$return=file_get_contents("https://api.weixin.qq.com/cgi-bin/user/get?access_token=".$token."&next_openid=");
		return $return;
	}
}