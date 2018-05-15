<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link rel="stylesheet" href="/huigoupiao/Public/bootstrap-3.3.7/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/huigoupiao/Public/common.css">
    <link rel="stylesheet" href="/huigoupiao/Public/Home/home.css">
</head>
<body>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active slider" movieid="18">
                <img src="/huigoupiao/Public/Home/images/slider1.jpg" alt="">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item slider" movieid="16">
                <img src="/huigoupiao/Public/Home/images/slider2.jpg" alt="">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item slider" movieid="19">
                <img src="/huigoupiao/Public/Home/images/slider3.jpg" alt="">
                <div class="carousel-caption">

                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
    <div class="row row-offcanvas row-offcanvas-right movie-block">

        <div class="col-xs-12 col-sm-12">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="title">
                <span class="title-name">正在热映（<?php echo ($hotPlayNum); ?>部）</span>
                <span class="title-more">全部 ></span>
            </div>
            <div class="row">
                    <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-xs-6 col-lg-3">
                            <div class="movie-info">
                                <div class="movie-top" movieId="<?php echo ($vo["mid"]); ?>">
                                    <img src="<?php echo ($vo["mpic"]); ?>" alt="">
                            <div class="info">
                                <span><?php echo ($vo["mcname"]); ?></span>
                                <span class="pull-right info-num"><?php echo ($vo["mgrade"]); ?></span>
                            </div>
                        </div>
                        <div class="movie-bottom buy" movieId="<?php echo ($vo["mid"]); ?>">
                            购票
                        </div>
                        </div>

                            </div><!--/.col-xs-6.col-lg-4--><?php endforeach; endif; else: echo "" ;endif; ?>
            </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

       <!-- <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="title">
                <span class="title-name">今日票房</span>
            </div>
        </div>&lt;!&ndash;/.sidebar-offcanvas&ndash;&gt;-->
    </div><!--/row-->



        <div class="row row-offcanvas row-offcanvas-right movie-block">

            <div class="col-xs-12 col-sm-12">
                <p class="pull-right visible-xs">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                </p>
                <div class="title">
                    <span class="title-name">即将上映（<?php echo ($nearPlayNum); ?>部）</span>
                    <span class="title-more isnthas">全部 ></span>
                </div>
                <div class="row">

                    <?php if(is_array($near)): $i = 0; $__LIST__ = $near;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-xs-6 col-lg-3">
                            <div class="movie-info">
                                <div class="movie-top" movieId="<?php echo ($vo["mid"]); ?>">
                                    <img src="<?php echo ($vo["mpic"]); ?>" alt="">
                                    <div class="info">
                                        <span class="light-text"><?php echo ($vo["mcname"]); ?></span>
                                        <span class="pull-right info-num"><?php echo ($vo["mbegintime"]); ?></span>
                                    </div>
                                </div>
                                <div class="movie-bottom look" movieId="<?php echo ($vo["mid"]); ?>">
                                    查看详情
                                </div>
                            </div>

                        </div><!--/.col-xs-6.col-lg-4--><?php endforeach; endif; else: echo "" ;endif; ?>
                </div><!--/row-->
            </div><!--/.col-xs-12.col-sm-9-->

            <!-- <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                 <div class="title">
                     <span class="title-name">今日票房</span>
                 </div>
             </div>&lt;!&ndash;/.sidebar-offcanvas&ndash;&gt;-->
        </div><!--/row-->
    </div>
</div>
</body>
<script src="/huigoupiao/Public/jquery-3.3.1.js"></script>
<script src="/huigoupiao/Public/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<script src="/huigoupiao/Public/Home/home.js"></script>
</html>