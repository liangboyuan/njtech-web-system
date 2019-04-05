<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"/Applications/MAMP/htdocs/njtech/application/index/view/article/article.html";i:1546529210;s:73:"/Applications/MAMP/htdocs/njtech/application/index/view/public/title.html";i:1547459628;s:71:"/Applications/MAMP/htdocs/njtech/application/index/view/public/top.html";i:1547550418;s:72:"/Applications/MAMP/htdocs/njtech/application/index/view/public/foot.html";i:1547054214;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="__INDEX__/images/njtech2.png">
<link rel="icon" type="image/png" sizes="96x96" href="__INDEX__/images/njtech2.png">
<title></title>
<meta property="og:type" content="website">
    <link href="__INDEX__/css/bootstrap.min.css" rel="stylesheet">
    <link href="__INDEX__/css/bootstrap-theme.css" rel="stylesheet">
    <script src="__INDEX__/js/jquery.min.js"></script>
    <script src="__INDEX__/js/bootstrap.js"></script>
    <script src="__INDEX__/js/npm.js"></script>
    <style>
        body{
            margin:0;
            padding: 0;
        }
        .navbar{
            background-color: #0093dd;
            color: white;
        }
        .dropdown-toggle{
            background-color: #0093dd;
            color: white;
        }
        .navbar-brand{
            color: white;
            background-color: #0093dd;
        }
        #myCarousel{
            width:100%;
            margin:auto;
            margin-top: -1em;
        }

        .mess{
            width: 100%;
        }
        #myCarousel{
            width: 100%;
        }
        .dropdown{
            margin:auto;
        }

    </style>
    <style type="text/css">
        .dropdown-submenu {
            position: relative;
        }
        .dropdown-submenu > .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
            margin-left: -1px;
            -webkit-border-radius: 0 6px 6px 6px;
            -moz-border-radius: 0 6px 6px;
            border-radius: 0 6px 6px 6px;
        }
        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }
        .dropdown-submenu > a:after {
            display: block;
            content: " ";
            float: right;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 5px 0 5px 5px;
            border-left-color: #ccc;
            margin-top: 5px;
            margin-right: -10px;
        }
        .dropdown-submenu:hover > a:after {
            border-left-color: #fff;
        }
        .dropdown-submenu.pull-left {
            float: none;
        }
        .dropdown-submenu.pull-left > .dropdown-menu {
            left: -100%;
            margin-left: 10px;
            -webkit-border-radius: 6px 0 6px 6px;
            -moz-border-radius: 6px 0 6px 6px;
            border-radius: 6px 0 6px 6px;
        }
    </style>
</head>
<body>
<script>
    $(function () {
        $(".dropdown").mouseover(function () {
            $(this).addClass("open");
        });
        $(".dropdown").mouseleave(function(){
            $(this).removeClass("open");
        })
    })
    $(function () {
        $(".dropdown-toggle").mouseover(function () {
            $(this).addClass("open");
        });
        $(".dropdown-toggle").mouseleave(function(){
            $(this).removeClass("open");
        })
    })
</script>
<div class="container-fluid" style="margin: 0px;padding: 0px;">

    <!--导航栏开始-->
    <!--<nav class="navbar" role="navigation">
    <div class="container-fluid">
        <div style="margin:0 auto;">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle bg-primary" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse" style="text-align: center;">
                <ul class="nav navbar-nav nav-pills" style="display: inline-block;float: none;">
                    <li class="active"><a href="<?php echo url('index/index'); ?>">网站首页</a></li>
                    <?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                    <li  class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $cate['catename']; ?><b class="caret"></b></a>
                        <?php if($cate['children'] != 0): ?>
                        <ul class="dropdown-menu" style="max-width: 150px;min-width: 100px;opacity: 1;background-color: rgba(254,255,180,0.28)">
                            <?php foreach ($cate['children'] as $k2 => $v2):?>
                            <li style="width: 100px"><a href="#"><?php echo $v2['catename'];?></a></li>
                            <?php endforeach;?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>-->
<div style="width: 100%;background-color: #F9F9F9">
    <div style="max-width: 1150px;margin: auto;">
        <img src="__INDEX__/images/njtech_top.png" class="img-responsive top-img" alt="Responsive image" style="">
    </div>
</div>

<nav class="navbar" role="navigation" style="background-color: #265CB4">
    <div class="container-fluid">
        <div style="margin:auto;max-width: 1150px;">
            <div class="navbar-header" style="float: left;">
                <button type="button" class="navbar-toggle bg-primary" data-toggle="collapse"
                        data-target="#example-navbar-collapse" style="height: 20px;">
                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>

                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse" style="text-align: center;float: left">
                <ul class="nav navbar-nav nav-pills" style="display: inline-block;float: none;">
                    <li class="dropdown" style="background-color: #265CB4;color: white;">
                        <a style="background-color: #265CB4;color: white;" id="dLabel" role="button"  class="btn" data-target="#"
                           href="<?php echo url('index/index'); ?>">
                            网站首页
                        </a>
                    </li>
                    <?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                    <li class="dropdown" style="background-color: #265CB4;color: white;width: 100px;">
                        <a style="background-color: #265CB4;color: white;" id="dLabel" role="button" data-toggle="dropdown" class="btn" data-target="<?php echo url('listmenu/lst'); ?>"
                           href="/njtech/index/artlist/lst/cateid/<?php echo $cate['id']; ?>">
                            <?php echo $cate['catename']; ?>
                        </a>
                        <?php if($cate['children'] != 0): ?>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="width: 100px;">
                            <?php foreach ($cate['children'] as $k2 => $v2):?>
                            <li style="width: 100px;height: 35px;">
                                <a href="/njtech/index/artlist/lst/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['catename'];?></a>
                                <!--<ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="javascript:;">1111</a></li>
                                </ul>-->
                            </li>
                            <?php endforeach;?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>

        </div>
    </div>
</nav>
    <!--导航栏结束-->
    <div class="container-fluid"  style="max-width: 1250px;min-height: 450px">
        <!--面包屑导航和搜索框开始-->
        <div class="row">
            <div class="col-md-9">
                <ol class="breadcrumb">
                    <li><a href="<?php echo url('index/index'); ?>">网站首页</a></li>
                    <li class="active">教学新闻</li>
                </ol>
            </div>
            <div class="col-md-3">
                <form class="form-inline" action="<?php echo url('search/index'); ?>" method="get" role="form"style="">
                    <div class="form-group">
                        <input type="text" name="keywords" class="form-control" id="keywords" placeholder="请输入关键词" style="width: 80%;float: left;">
                        <button type="submit" class="btn btn-primary" style="color: #FFFFFF;float: left;height: 35px;">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!--面包屑导航和搜索框结束-->

        <div class="row">
            <div class="col-md-9">
                <div class="panel" style="margin-top: 10px;min-height: 500px; border: 1px solid #265CB4;">
                    <div class="panel-heading" style="background-color: #265CB4;color: white;">
                        <h3 class="panel-title" align="center"> &nbsp&nbsp</h3>
                    </div>
                    <div class="panel-body">
                        <div style="margin-top: -20px;">
                            <h4 align="center"><?php echo $articles['title']; ?></h4>
                        </div>
                        <div>
                            <p align="center" style="color: grey;">浏览次数：<?php echo $articles['click']; ?> &nbsp&nbsp <?php echo date("Y-m-d",$articles['time']); ?>&nbsp&nbsp<?php echo $articles['author']; ?> </p>
                        </div>


                        <?php echo $articles['content']; ?>
                    </div>
                </div>
            </div>

            <!--最热新闻开始-->
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid">
                            <h4 style="color:#265CB4 ">最新新闻</h4>
                        </div>
                        <div class="container-fluid" style="height: 2px;background: #265CB4;margin-top: 5px;margin-bottom: 5px"></div>

                        <ul class="list-group" style="margin-top: 10px">
                            <?php if(is_array($newlist) || $newlist instanceof \think\Collection): $i = 0; $__LIST__ = $newlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newlist): $mod = ($i % 2 );++$i;?>
                            <li class="list-group-item" style="border-bottom:dashed 1px #ccc;border-top:dashed 1px #ccc;height:60px;">
                                <div style="width:100%;height:38px; overflow:hidden;"><a href="<?php echo url('article/index3',array('cateid'=>$newlist['id'])); ?>" title="" style="">[<?php echo date("y-m-d",$newlist['time']); ?>]<?php echo $newlist['title']; ?></a></div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
                <!--最热新闻结束-->
        </div>
    </div>


</div>
<!--底部导航栏-->
<div class="myfooter hidden-print" style="width:100%;min-height:50px;color:white;height: 120px;background-color: #265CB4;overflow: hidden">
    <!--<div style="float: right;position: absolute;">
        <img src="__INDEX__/images/njtech2.png" alt="" style="width: 70px;height: 80px;float: right;" class="img-rounded">
    </div>-->
    <div class="container" style="max-width: 1150px;margin: 0 auto;height: 120px;">
        <div class="col-md-4" style="height: 120px;float: left;">
            <div class="row" style="margin-top: 25px;height: 25px;">
                <p style="width: 100%;">Copyright@ 南京工业大学教学事务部 &nbsp;&nbsp;<a href="http://202.119.248.200" style="color: white" target="_blank">旧版回顾</a></p>
            </div>
            <div class="row" style="height: 25px;">
                <p style="width: 100%;">技术支持： <a href="http://green.njtech.edu.cn/" target="_blank" style="color: white;">计算机科学与技术学院绿荫工作室</a> </p>
            </div>
            <div class="row" style="height: 25px;">
                <p style="width: 100%;">地址：中国江苏省南京市江北新区浦珠南路30号<a href="<?php echo url('admin/login/index'); ?>" target="_blank">后台入口</a> </p>
            </div>
        </div>
        <div class="col-md-4" style="height: 120px;width: 510px;float: right;">
            <div style="height: 80px;width: 80px;margin:10px 20px;float: left;text-align: center">
                <img src="__INDEX__/images/erweima1.png" width="80px" height="80px"/>
                <p>南工官微</p>
            </div>
            <div style="height: 80px;width: 80px;margin:10px 20px;float: left;text-align: center">
                <img src="__INDEX__/images/erweima2.png" width="80px" height="80px"/>
                <p>南工教学</p>
            </div>
            <div style="height: 80px;width: 80px;margin:10px 20px;float: left;text-align: center">
                <img src="__INDEX__/images/erweima3.png" width="80px" height="80px"/>
                <p>微言教育</p>
            </div>
            <div style="height: 80px;width: 80px;margin:10px 20px;float: left;text-align: center">
                <img src="__INDEX__/images/erweima4.png" width="80px" height="80px"/>
                <p>江苏教育</p>
            </div>
        </div>
    </div>


    <!--<img src="__INDEX__/images/foot.png" alt="" style="width: 100%;min-height: 30px;" class="img-rounded">-->
</div>

<!--底部导航栏-->
</body>
</html>
