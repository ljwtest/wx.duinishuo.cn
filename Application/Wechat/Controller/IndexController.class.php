<?php
namespace Wechat\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	echo "这里是微信接口测试地址";
    	$model=M("wx_token");
    	//var_dump($model);
    	var_dump($_SERVER['PATH_INFO']);
    	var_dump(pathinfo($_SERVER['PATH_INFO']))
		echo "测试git是否能同步";    	
        $this->display();
    }
}