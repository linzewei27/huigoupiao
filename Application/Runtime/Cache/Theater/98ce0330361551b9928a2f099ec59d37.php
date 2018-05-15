<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/huigoupiao/Public/bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/huigoupiao/Public/common.css">
    <link rel="stylesheet" href="/huigoupiao/Public/Theater/index.css">
</head>
<body>
<div>

    <div class="container">
        <div class="tags-panel">
            <ul class="tags-lines">


                <li class="tags-line">
                    <div class="tags-title">日期:</div>
                    <ul class="tags selecttime">
                        <li class="active">
                        </li>

                    </ul>
                </li>

                <li class="tags-line tags-line-border" data-type="district">
                    <div class="tags-title ">行政区:</div>
                    <ul class="tags place">
                        <li class="active">
                            <a data-act="tag-click" data-val="{TagName:'全部', city_id:20}" data-id="-1" data-bid="b_ofl973zc">全部</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
        <div class="cinemas-list">
            <h2 class="cinemas-list-header">影院列表</h2>
        </div>
    </div>

</div>
<script src="/huigoupiao/Public/jquery-3.3.1.js"></script>
<script src="/huigoupiao/Public/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<script src="/huigoupiao/Public/common.js"></script>
<script src="/huigoupiao/Public/Theater/theater.js"></script>
</body>
</html>