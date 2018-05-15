<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/huigoupiao/Public/bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/huigoupiao/Public/common.css">
    <link rel="stylesheet" href="/huigoupiao/Public/Admin/allMovie.css">
</head>
<body>
<div class="subnav">
    <ul class="navbar ">
        <li>
            <a class="active type" href="javascript:void(0);" value="1" >正在热映</a>
        </li>
        <li >
            <a class="type hasnt" href="javascript:void(0);"  value="0"> 即将上映</a>
        </li>
    </ul>
</div>
<div class="container" id="app">
    <div class="movies-channel">
        <div class="tags-panel">
            <ul class="tags-lines slelect">
                <li class="tags-line" data-val="{tagTypeName:'cat'}">
                    <div class="tags-title">类型 :</div>
                    <ul class="tags typeSelect">
                        <li class="active" >
                            <a >全部</a>
                        </li>
                        <li>
                            <a>爱情</a>
                        </li>
                        <li>
                            <a>喜剧</a>
                        </li>
                        <li>
                            <a>恐怖</a>
                        </li>

                        <li>
                            <a>科幻</a>
                        </li>
                        <li>
                            <a>动作</a>
                        </li>

                        <li>
                            <a >其他</a>
                        </li>
                    </ul>
                </li>
                <li class="tags-line tags-line-border" data-val="{tagTypeName:'source'}">
                    <div class="tags-title">区域 :</div>
                    <ul class="tags placeSelect">
                        <li class="active" data-state-val="{ sourceTagName:'全部'}">
                            <a >全部</a>
                        </li>
                        <li>
                            <a >大陆</a>
                        </li>
                        <li>
                            <a >美国</a>
                        </li>
                        <li>
                            <a >韩国</a>
                        </li>
                        <li>
                            <a>日本</a>
                        </li>

                        <li>
                            <a>其他</a>
                        </li>
                    </ul>
                </li>
                <li class="tags-line tags-line-border" data-val="{tagTypeName:'year'}">
                    <div class="tags-title">年代 :</div>
                    <ul class="tags yearSelect">
                        <li class="active" data-state-val="{ yearTagName:'全部'}">
                            <a >全部</a>
                        </li>

                        <li>
                            <a >2018</a>
                        </li>
                        <li>
                            <a >2017</a>
                        </li>
                        <li>
                            <a>2016</a>
                        </li>
                        <li>
                            <a >2015</a>
                        </li>
                        <li>
                            <a >2014</a>
                        </li>
                        <li>
                            <a >2013</a>
                        </li>
                        <li>
                            <a >2012</a>
                        </li>
                        <li>
                            <a >2011</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="movies-panel">
            <div class="movies-list">

                <dl class="movie-list">



                </dl>


            </div>
 <!--           <div class="movies-pager">


                <ul class="list-pager">


                    <li class="active">
                        <a class="page_1" href="javascript:void(0);" style="cursor: default">1</a>

                    </li>
                    <li>
                        <a class="page_2" href="?offset=30">2</a>

                    </li>
                    <li>
                        <a class="page_3" href="?offset=60">3</a>

                    </li>
                    <li>
                        <a class="page_4" href="?offset=90">4</a>

                    </li>
                    <li>
                        <a class="page_5" href="?offset=120">5</a>

                    </li>

                    <li class="sep">...</li>
                    <li>
                        <a class="page_27311" href="?offset=819300">27311</a>

                    </li>


                    <li><a class="page_2" href="?offset=30">下一页</a>
                    </li>
                </ul>


            </div>-->
        </div>
    </div>

</div>
<script src="/huigoupiao/Public/jquery-3.3.1.js"></script>
<script src="/huigoupiao/Public/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<script src="/huigoupiao/Public/common.js"></script>
<script src="/huigoupiao/Public/Admin/allMovie.js"></script>
</body>
</html>