<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

Time:<?php echo (date('Y-m-d H:i:s',$time)); ?><br>
String:<?php echo (strtoupper(substr($str,0,5))); ?>
</body>
</html>