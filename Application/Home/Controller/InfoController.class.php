<?php
namespace Home\Controller;
use Think\Controller;
class InfoController extends Controller {
    public function index(){
    	$Moxing = D('moxing');
        $Classify = D('classify'); 
    	$id = $_GET['cid'];
        $classify_id = array(
            'id' => $id
            );
    	$data2 = array(
    		'parent_id' => $id
    		); 

    	$p = isset($_GET['p']) ? $_GET['p'] : 1;
		$pageNum = 8;
		$offset = ($p-1)*$pageNum;
		$count = $Moxing->where($data2)->count('id');
		$allPage = ceil($count/$pageNum);
		$this->assign('allPage',$allPage);
        $this->assign('pageNum',$pageNum);

        $classify_data = $Classify->where($classify_id)->find();
    	$moxing_data= $Moxing->where($data2)->limit($offset,$pageNum)->select();
    	$this->assign('moxing_data',$moxing_data);
        $this->assign('classify_data',$classify_data);
        $this->display();
    }
}
