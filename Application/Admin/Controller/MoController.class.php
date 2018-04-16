<?php
namespace Admin\Controller;
use Think\Controller;
class MoController extends Controller {
    public function add(){
 		$Classify = D('classify');
 		$classify_data = $Classify->select(); 
 		$this->assign('classify_data',$classify_data);		      	
        $this->display();
    }

    public function doAdd(){
    	$parent_id = $_POST['option'];
    	$name = $_POST['name'];
        $info = $_POST['info'];
        $file_name = $_POST['file'];
        $file = 'File/'.$file_name.'.zip';
    	// $subdirectory = 'File';
    	$time = date('Y-m-d H:i:s');
		// $file = uploadFile2($subdirectory);
    	$data = array(
    		'name' => $name,
            'info' => $info,
    		'file' => $file,
    		'time' => $time,
    		'parent_id' => $parent_id
    		);
        // var_dump($data);
        // die();
    	$Moxing = D('moxing');
    	$status = $Moxing->add($data);
    	if($status){
			 $this->success('发布成功',U('Admin/Mo/lists'));
		}else{
			 $this->error('发布失败',U('Admin/Mo/add'));
		}
    }

    public function lists(){
        $Moxing = D('moxing');
        $data=$Moxing->select();
        // var_dump($data);
        // die();
        $this->assign('data',$data);
        $this->display();
    }

    public function delete(){
            $id = $_GET['id'];  
            $Moxing = D('moxing');
            $status = $Moxing->delete($id);
            if ($status) {
                $this->success('删除成功', U('Admin/Mo/lists'));
                die();
            } else {
                $this->error('删除失败',U('Admin/Mo/lists'));
                die();
            }
    }
}