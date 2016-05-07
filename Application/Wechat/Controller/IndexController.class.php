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
		var_dump($model->get_user());
		$this->display();
	}
			
	
}