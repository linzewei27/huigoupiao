<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>惠购票</title>
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
                <li class="active home" target="home"><a>首页</a></li>
                <li target="movie" class="movie"><a>电影</a></li>
                <li target="theater"  class="theater"><a>影院</a></li>
            <!--    <li target="top"  class="top"><a>榜单</a></li>-->

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <div class="input-group mr30">
                    <input type="text" id="searchInput" class="form-control" placeholder="请输入电影名称">
                    <span class="input-group-btn" id="searchBtn">
                    <button class="btn btn-default h34" type="button">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                    </span>
                </div><!-- /input-group -->
                <li class="loginInfo"><a href="/huigoupiao/Admin/Public/login.html">登录</a></li>
                <li class="loginInfo" id="person"><a href="/huigoupiao/Admin/Public/siginIn.html">注册</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->



        <div class="home main-container "><iframe src="/huigoupiao/Home/Index/home.html" frameborder="0" scrolling="no" id="mainIframe"></iframe></div>
<div class="footer" style="visibility: visible;">
    <p class="friendly-links">
        违法和不良信息举报电话: 15521166321
        举报邮箱: linzewei@hgp.com
    </p>
    <p>
        ©2018
        惠购票 huigoupiao.com
        <a href="https://tsm.miit.gov.cn/pages/EnterpriseSearchList_Portal.aspx?type=0&amp;keyword=京ICP证160733号&amp;pageNo=1" target="_blank">京ICP证160733号</a>
        <a href="http://www.miibeian.gov.cn" target="_blank">京ICP备1802244179号-1</a>
        京公网安备 11010502030881号
        <a href="/about/licence" target="_blank">网络文化经营许可证</a>
        <a href="http://www.meituan.com/about/rules" target="_blank">电子公告服务规则</a>
    </p>
</div>
</body>
<script src="/huigoupiao/Public/jquery-3.3.1.js"></script>
<script src="/huigoupiao/Public/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<script src="/huigoupiao/Public/common.js"></script>
<script src="/huigoupiao/Public/Admin/index.js"></script>
</html>