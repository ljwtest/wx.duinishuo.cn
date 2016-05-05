<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	echo "测试git是否能同步";  
    	//echo C("DB_USER");
        $this->display();
    }
}