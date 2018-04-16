<?php
function uploadFile($subdirectory){
 	$upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','zip');// 设置附件上传类型
    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    $upload->savePath  =     "$subdirectory/"; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    // var_dump($info);
    //  echo $upload->getError();
    //  die();
    $img= $info['image']['savepath'].$info['image']['savename'];
    return $img;
}
function uploadFile2($subdirectory){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728000000000000 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','zip');// 设置附件上传类型
    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    $upload->savePath  =     "$subdirectory/"; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    // var_dump($info);
    //  echo $upload->getError();
    //  die();
    $img= $info['file']['savepath'].$info['file']['savename'];
    return $img;
}

function fileDown($filename){
    header("Cache-Control: public"); 
    header("Content-Description: File Transfer"); 
    header('Content-disposition: attachment; filename='.basename($filename)); //文件名  
    header("Content-Type: application/zip"); //zip格式的  
    header("Content-Transfer-Encoding: binary"); //告诉浏览器，这是二进制文件  
    header('Content-Length: '. filesize($filename)); //告诉浏览器，文件大小  
    @readfile($filename);

}

