<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="/huigoupiao/Public/bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/huigoupiao/Public/common.css">
    <link rel="stylesheet" href="/huigoupiao/Public/Admin/index.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo small-logo" href="#">惠购票</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active" target="home"><a>首页</a></li>
                <li target="movie"><a>电影</a></li>
                <li target="theater"><a>影院</a></li>
                <li target="top"><a>榜单</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a>登录</a></li>
                <li><a>注册</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->


<div class="container mt80">
        <div class="home main-container active"><iframe src="/huigoupiao/Index/home.html" frameborder="0"></iframe></div>
        <div class="movie main-container"><iframe src="Public/login.html" frameborder="0"></iframe></div>
        <div class="theater main-container"><iframe src="Index/home.html" frameborder="0"></iframe></div>
        <div class="top main-container"><iframe src="Index/home.html" frameborder="0"></iframe>></div>
    <hr>

    <footer>
        <p>© 2016 Company, Inc.</p>
    </footer>
</div> <!-- /container -->
</body>
<script src="/huigoupiao/Public/jquery-3.3.1.js"></script>
<script src="/huigoupiao/Public/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<script src="/huigoupiao/Public/Admin/index.js"></script>
</html>