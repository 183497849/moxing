<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="<?php echo U('Admin/Mo/doAdd');?>" method="post" enctype="multipart/form-data">
    <select name="option">
        <option value="0">选择分类</option>
        <?php foreach ($classify_data as $value) { ?>
        <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
        <?php } ?>
    </select>
    <br>
    模型名：<input type="text" name="file"><br>
    模型标题：<input type="text" name="name"><br>
    内容： <textarea name="info" rows="20" cols="100"></textarea>
    <br>
    <input type="submit" name="">
</form>
</body>
<a href="<?php echo U('Admin/Mo/lists');?>">模型列表</a>
<a href="<?php echo U('Home/Index/index');?>">主页</a>
</html>