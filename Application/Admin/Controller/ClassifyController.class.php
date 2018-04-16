<?php
namespace Admin\Controller;
use Think\Controller;
class ClassifyController extends Controller {
    public function add(){   	
        $this->display();
    }

    public function doAdd(){
    	$name = $_POST['name'];
        $info = $_POST['info'];
    	$subdirectory = 'Classify';
		$image = uploadFile($subdirectory);
    	$data = array(
    		'name' => $name,
            'info' => $info,
    		'image' => $image
    		);
    	$Classify = D('classify');
    	$classify = $Classify->add($data);
    }

}
