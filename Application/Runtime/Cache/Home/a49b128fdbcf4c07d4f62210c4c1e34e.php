<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="/Public/Home/css/public.css">
	<link rel="stylesheet" href="/Public/Home/css/detail.css">
</head>
<body>
	<div class="contain-box">
    	<div class="top">
			<div class="top-box clearfix">
				<div class="top-left">
					您好，欢迎访问专业的3d打印模型资源下载网站！
				</div>
			</div>
        </div>
		<div class="title">
			<h1 class="container">3d打印私人订制</h1>
		</div>
		<div class="nav-list">
			<ul class="container nav clearfix">
				<li><a href="<?php echo U('Home/Index/index');?>" class="active">3D模型库</a></li>
			</ul>
		</div>
		<div class="con-title">
			<h5 class="container con-title-text"><a href="<?php echo U('Home/Index/index');?>"><span>3d模型库</span></a><span> > </span><a href="<?php echo U('Home/Info/index',array('cid'=>$classify_data['id']));?>"><span><?php echo $classify_data['name'] ?></span></a><span> > </span><a href="#"><span><?php echo $moxing_data['name'] ?></span></a></h5>
		</div>
		<div class="cp_detail_box">
			<div class="cp_sum ">
			    <div class="cp_sumbox clearfix">
				<div class="cp_right">
					<h1><?php echo $moxing_data[0]['name'] ?> </h1>
					<div class="cp_design clearfix">
						<div class="design_left">
							<a href="#"><img src="/Public/Home/img/dfboy.png" alt=""></a>
						</div>

					</div>
					
				</div>
				<div class="cp_detail cp_righta">
					    <p>上传者：刘俊安</p>
						<p>大小: 1MB</p>
						<p>上传时间：<?php echo $moxing_data['time'] ?></p>
	                    <p>保 障：安全无病毒</p>
	                    <p>下载数： 5626 </p>
	                    <p>浏览数： 5626 </p>
	                    <div class="down-btn">
						   <a href="<?php echo U('Home/Detial/down',array('fid'=>$moxing_data['id']));?>">免费下载</a>
				        </div>
			    </div>
				</div>
			</div>
			<div class="detail-box">
				<div class="de-title">
					模型简介/描述：
				</div>
				<div class="de-info">
				   <?php echo $moxing_data['info'] ?>            
				</div>
			</div>
		</div>
	</div>
</body>
</html>