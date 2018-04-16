<?php
namespace Home\Controller;
use Think\Controller;
class DetialController extends Controller {
    public function index(){
    	$Moxing = D('moxing'); 
        $Classify = D('classify');
    	$moxing_id = array(
    		'id' => $_GET['mid']
    		);
        $moxing_data = $Moxing->where($moxing_id)->find();
        $classify_id = array(
            'id' => $moxing_data['parent_id']
            );
    	$classify_data = $Classify->where($classify_id)->find();
        $this->assign('classify_data',$classify_data);
    	$this->assign('moxing_data',$moxing_data);
        $this->display();
    }
    public function down(){
    	$Moxing = D('moxing'); 
    	$data = array(
    		'id' => $_GET['fid']
    		);
    	$moxing_data = $Moxing->where($data)->find();
    	$filename = C('file_url').$moxing_data['file'];
    	$status = fileDown($filename);
    }
}
