<?php
namespace Wechat\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		//先做微信接口校验
		$model=D("WxToken");
       $model->check_wx_connect();       
       
       /**********下面是微信接口测试代码*******************/
		echo "这里是微信接口测试地址";
		echo "<hr>非WECHAT访问";
		var_dump($model->get_token());
		$mem=S(array(
			    'type'=>memcache,
			    'host'=>C('mem_host'),
			    'port'=>C('mem_port'),
				));
			//$mem->tp_mem="tp_mem_test";
		//echo $mem->tp_mem;
		S("tp_mem",array(5,6,8,9,10));
		phpinfo();
		var_dump($aa);
		$this->display();
	}
			
	
}