<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>惠购票</title>
    <link rel="stylesheet" href="/huigoupiao/Public/bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/huigoupiao/Public/common.css">
    <link rel="stylesheet" href="/huigoupiao/Public/Admin/personCenter.css">
</head>
<body class="login-page">
<div class="container" id="app">
    <div class="content">
        <div class="main">
            <div class="info-content clearfix">
                <div class="user-profile-nav">
                    <h1>个人中心</h1>
                    <a class="orders active"  target="hasBook">我的订单</a>
                    <a  class="profile "  target="collection">我的收藏</a>
                </div>

                <div class="orders-container hasBook">
                    <div class="profile-title">我的订单</div>



                    <div class="orders-pager">

                    </div>

            </div>
                <div class="orders-container collection hidden">
                    <div class="profile-title">我的收藏</div>



                    <div class="orders-pager">

                    </div>
                </div>
        </div>


    </div>



</div>
</body>
<script src="/huigoupiao/Public/jquery-3.3.1.js"></script>
<script src="/huigoupiao/Public/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<script src="/huigoupiao/Public/common.js"></script>
<script src="/huigoupiao/Public/Admin/personCenter.js"></script>
</html>