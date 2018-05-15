<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>惠购票</title>
    <link rel="stylesheet" href="/huigoupiao/Public/bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/huigoupiao/Public/common.css">
    <link rel="stylesheet" href="/huigoupiao/Public/Admin/login.css">
</head>
<body class="login-page">
<div class="container text-info">
    <div class="logo">惠购票</div>
    <form class="form-signin">
        <h3 class="form-signin-heading">请登录</h3>
        <label for="inputUser" class="sr-only">账户</label>
        <input type="text" id="inputUser" class="form-control mb10" placeholder="请输入账号"  autofocus="">
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="请输入密码">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> 记住我
            </label>
            <label class="text-danger pull-right errInfo">

            </label>
        </div>
        <button class="btn  btn-primary btn-block mb10"  id="login" type="button">登录</button>
        <div class="text-info">还没有账号？<a href="/huigoupiao/Admin/Public/siginIn.html">免费注册</a></div>
    </form>

</div>
</body>
    <script src="/huigoupiao/Public/jquery-3.3.1.js"></script>
    <script src="/huigoupiao/Public/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="/huigoupiao/Public/Admin/login.js"></script>
</html>