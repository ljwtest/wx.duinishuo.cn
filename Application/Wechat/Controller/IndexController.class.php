<?php
namespace Wechat\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	echo "这里是微信接口测试地址";
    	$model=M("wx_token"); 	
    	echo "test ".$GLOBALS['HTTP_RAW_POST_DATA'];
        $this->display();
    }
}