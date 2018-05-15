<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>惠购票</title>
    <link rel="stylesheet" href="/huigoupiao/Public/bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/huigoupiao/Public/common.css">
    <link rel="stylesheet" href="/huigoupiao/Public/Admin/login.css">
    <link rel="stylesheet" href="/huigoupiao/Public/Admin/siginIn.css">
</head>
<body class="login-page">
<div class="container text-info">
    <div class="logo">惠购票</div>
    <form class="form-signin">
        <h3 class="form-signin-heading ml74">注册</h3>
        <div class="input-box clearfix">
        <label for="inputUser" class="">用户名</label>
        <input type="text" id="inputUser" class="form-control " placeholder="请输入账号"  autofocus="">
            <span class="import">*</span>
        </div>
        <div class="input-box clearfix">
            <label for="inputPassword" class="">密码</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="请输入密码">
            <span class="import">*</span>
        </div>
        <div class="input-box clearfix">
            <label for="inputAgainPassword" class="">重复密码</label>
        <input type="password" id="inputAgainPassword" class="form-control" placeholder="请再次输入密码">
            <span class="import">*</span>
        </div>
        <div class="input-box clearfix">
            <label for="tel" class="">手机</label>
        <input type="tel" id="tel" class="form-control" placeholder="请输入手机号码">
            <span class="import"></span>
        </div>
        <div class="input-box clearfix">
            <label for="email" class="">邮箱</label>
        <input type="email" id="email" class="form-control" placeholder="请输入邮箱">
            <span class="import"></span>
        </div>
        <div class="checkbox ml88">
            <label>
                <input type="checkbox"  id="remember"> 同意《注册惠购票条例》
            </label>
            <label class="text-danger pull-right errInfo">

            </label>
        </div>
        <button class="btn  btn-primary btn-block ml74"  id="siginIn" type="button">注册</button>
    </form>

</div>
</body>
<script src="/huigoupiao/Public/jquery-3.3.1.js"></script>
<script src="/huigoupiao/Public/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<script src="/huigoupiao/Public/Admin/siginIn.js"></script>
</html>