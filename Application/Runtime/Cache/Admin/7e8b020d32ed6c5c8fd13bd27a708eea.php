<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="<?php echo U('Admin/Classify/doAdd');?>" method="post" enctype="multipart/form-data">
    分类名：<input type="text" name="name">
    <br>
    详细信息：<input type="text" name="info">
    <br>
    分类图片：<input type="file" name="image"><br>
    <input type="submit" name="">
</form>
</body>
</html>