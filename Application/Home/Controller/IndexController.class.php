<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$Classify = D('classify');
    	$classify_data = $Classify->select();
    	$this->assign('classify_data',$classify_data);
        $this->display();
    }
}
