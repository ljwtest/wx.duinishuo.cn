<?php
namespace Wechat\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	echo "这里是微信接口测试地址";
    	$model=M("wx_token");
    	//var_dump($model);
    	echo $_SERVER['PATH_INFO']."</br>";
    	echo pathinfo($_SERVER['PATH_INFO']);
    	
        $this->display();
    }
}