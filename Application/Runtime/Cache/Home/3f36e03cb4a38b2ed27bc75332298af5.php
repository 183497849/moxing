<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/Public/Home/css/public.css">
	<link rel="stylesheet" href="/Public/Home/css/all.css">
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
			<h5 class="container con-title-text"><a href="<?php echo U('Home/Index/index');?>"><span>3d模型库</span></a><span> > </span><a href="#"><span><?php echo $classify_data['name'] ?></span></a></h5>
		</div>
		<div class="content-box ">
		    <div class="con-bg clearfix">
		        <div class="type-title">
	                <h3><?php echo $classify_data['name'] ?></h3>
			    </div>
			    <div class="left">
			    	<img src="<?php echo '/Uploads/'.$classify_data['image']; ?>" alt="">
			    	
			    </div>
			    <div class="right">
			    	<table class="con-list">
			    	<?php for($i=0;$i<$pageNum;$i+=2){ ?>
						<tr>
						    <td><a href="<?php echo U('Home/Detial/index',array('mid'=>$moxing_data[$i]['id']));?>"><?php echo $moxing_data[$i]['name'] ?></a></td>
						    <td><a href="<?php echo U('Home/Detial/index',array('mid'=>$moxing_data[$i+1]['id']));?>"><?php echo $moxing_data[$i+1]['name'] ?></a></td>
						</tr>
						<?php } ?>
					</table>
				</div>
	    	</div>
		</div>
		<div class="page-box">
		<?php for($i=1;$i<=$allPage;$i++) { ?>	
        <a href="<?php echo U('Home/info/index',array('p'=>$i,'cid'=>$_GET['cid']));?>" class="page-btn"><?php echo $i ?></a>
		<?php } ?>
<!-- 			<a href="#" class="lead-btn">首页</a>
			<a href="#" class="page-btn">1</a>
			<a href="#" class="page-btn">2</a>
			<a href="#" class="page-btn">3</a>
			<a href="#" class="page-btn">4</a>
			<a href="#" class="page-btn">5</a>
			<a href="3" class="page-btn">...</a>
			<a href="#" class="lead-btn">下一页</a>
			<a href="#" class="lead-btn">末页</a> -->
		</div>
    </div>
</body>
</html>