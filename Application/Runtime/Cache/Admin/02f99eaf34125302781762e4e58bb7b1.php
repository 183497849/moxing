<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {width:1000px;margin: 0 auto}
		table {margin:0 auto;}
		td {width:100px;text-align:center;}
	</style>
	<meta charset="utf-8">
</head>
<body>

<table border="1px" cellspacing="0" cellpadding="0"> 
	<tr>
		<td>id</td>
		<td>name</td>
		<td>操作</td>
	</tr>

	<?php foreach($data as $key=>$value) { ?>
	<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['name']; ?></td>
		<td><a href="<?php echo U('Admin/Mo/delete',array('id'=>$value['id']));?>">删除</a></td>
	</tr>
	<?php } ?>
</table>

<a href="<?php echo U('Admin/Mo/add');?>">添加模型</a>
</html>