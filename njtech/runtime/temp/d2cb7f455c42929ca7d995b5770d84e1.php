<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"/Applications/MAMP/htdocs/njtech/public/../application/index/view/artlst/lst.html";i:1545385263;s:83:"/Applications/MAMP/htdocs/njtech/public/../application/index/view/public/title.html";i:1546429796;s:81:"/Applications/MAMP/htdocs/njtech/public/../application/index/view/public/top.html";i:1545296879;s:82:"/Applications/MAMP/htdocs/njtech/public/../application/index/view/public/foot.html";i:1545457848;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="__INDEX__/images/njtech2.png">
<link rel="icon" type="image/png" sizes="96x96" href="__INDEX__/images/njtech2.png">
<title>南京工业大学教学事务部</title>
<meta name="keywords" content="南京工业大学教学事务部">
    <link href="__INDEX__/css/bootstrap.min.css" rel="stylesheet">
    <link href="__INDEX__/css/bootstrap-theme.css" rel="stylesheet">
    <link rel='stylesheet' href='__INDEX__/css/style.css'>
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
        h4{
            color: #0093dd;
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
    <style>
        @media screen and (max-width: 768px) and (min-width: 320px) {
            .pic{
                display: none;
            }

        }

        /* Extra Small Devices, Phones */
        @media screen and (max-width: 992px) and (min-width: 768px) {
            .pic{
                display: none;
            }

        }
        @media only screen and (max-width: 1200px) and (min-width : 992px) {
            .pic{
                display: none;
            }
        }


        /* Large Devices, Wide Screens */
        @media only screen and (min-width : 1200px) {

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
        <div style="margin:0 auto;">
            <div class="navbar-header" style="float: left;">
                <button type="button" class="navbar-toggle bg-primary" data-toggle="collapse"
                        data-target="#example-navbar-collapse" style="height: 20px;">
                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>

                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse" style="text-align: center;">
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
                           href="/njtech/public/index.php/index/artlist/lst/cateid/<?php echo $cate['id']; ?>">
                            <?php echo $cate['catename']; ?>
                        </a>
                        <?php if($cate['children'] != 0): ?>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="width: 100px;">
                            <?php foreach ($cate['children'] as $k2 => $v2):?>
                            <li style="width: 100px;height: 35px;">
                                <a href="/njtech/public/index.php/index/artlist/lst/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['catename'];?></a>
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

    <!--主体部分开始-->
    <div class="container body-content mycontent">
        <!--面包屑导航和搜索框开始-->
        <div class="row">
            <div class="col-md-9">
                <ol class="breadcrumb">
                    <li><a href="<?php echo url('index/index'); ?>">网站首页</a></li>
                    <li class="active">教学公告</li>
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
        <!--<div class="row" style="margin-top: 5px;">
            <div class="col-md-12">
                <div class="container-fluid">
                    <h4><span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="float: left;margin-right: 10px"></span>机构设置</h4>
                </div>
                <div class="container-fluid" style="height: 2px;background: #0093dd;margin-top: 5px;margin-bottom: 5px"></div>
            </div>
        </div>-->
        <!--面包屑导航和搜索框结束-->

        <!--左侧子导航和右侧列表开始-->
        <div class="row" style="margin-top: 10px">

            <!--左侧列表开始-->
            <!--<div class="col-md-3">
                <div class="row">
                    <div class="col-md-11">
                        <ul class="nav nav-pills nav-stacked" style="width: 100%">
                            <li role="presentation" class="active"><a href="#">部领导</a></li>
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    各科室<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li role="presentation"><a href="#">综合事务科</a></li>
                                    <li role="presentation"><a href="#">专业建设科</a></li>
                                    <li role="presentation"><a href="#">教学运行科</a></li>
                                    <li role="presentation"><a href="#">实践教学科</a></li>
                                    <li role="presentation"><a href="#">学业事务科</a></li>
                                    <li role="presentation"><a href="#">学生交流科</a></li>
                                    <li role="presentation"><a href="#">教学评价科</a></li>
                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    挂靠机构<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li role="presentation"><a href="#">现代教育中心</a></li>
                                    <li role="presentation"><a href="#">教师（教学）发展中心</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row pic" style="margin-top: 10px">
                    <div class="col-md-11">
                        <img src="__INDEX__/images/view.jpg" class="img-responsive" alt="Responsive image">
                    </div>
                </div>
            </div>-->
            <!--左侧列表结束-->

            <!--右侧子导航开始-->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6"style="margin-top: 3px;margin-bottom: 3px;">
                        <div class="panel">
                            <div class="panel-heading" style="background-color: #265CB4;color: white;">
                                <h3 class="panel-title">综合事务科</h3>
                            </div>
                            <div class="panel-body" style="min-height: 260px;">
                                <table class="table">
                                    <?php if(is_array($article1) || $article1 instanceof \think\Collection): $i = 0; $__LIST__ = $article1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article1): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><a href="<?php echo url(('article2/index'),array('cateid'=>$article1['id'])); ?>"><?php echo mb_substr($article1['title'], 0,32,'utf-8'); ?></a></td>
                                        <td width="90px"><a href="<?php echo url(('article2/index'),array('cateid'=>$article1['id'])); ?>"><?php echo date("Y-m-d",$article1['time']); ?></a></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="<?php echo url(('newlst/index'),array('k_id'=>$article1['k_id'])); ?>">more>></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"style="margin-top: 3px;margin-bottom: 3px;">
                        <div class="panel">
                            <div class="panel-heading" style="background-color: #265CB4;color: white;">
                                <h3 class="panel-title">专业建设科</h3>
                            </div>
                            <div class="panel-body" style="min-height: 260px">
                                <table class="table">
                                    <?php if(is_array($article2) || $article2 instanceof \think\Collection): $i = 0; $__LIST__ = $article2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article2): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><a href="<?php echo url(('article2/index'),array('cateid'=>$article2['id'])); ?>"><?php echo mb_substr($article2['title'], 0,32,'utf-8'); ?></a></td>
                                        <td width="90px"><a href="<?php echo url(('article2/index'),array('cateid'=>$article2['id'])); ?>"><?php echo date("Y-m-d",$article2['time']); ?></a></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="<?php echo url(('newlst/index'),array('k_id'=>$article2['k_id'])); ?>">more>></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"style="margin-top: 3px;margin-bottom: 3px;">
                        <div class="panel">
                            <div class="panel-heading" style="background-color: #265CB4;color: white;">
                                <h3 class="panel-title">教学运行科</h3>
                            </div>
                            <div class="panel-body" style="min-height: 300px">
                                <table class="table">
                                    <?php if(is_array($article3) || $article3 instanceof \think\Collection): $i = 0; $__LIST__ = $article3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article3): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><a href="<?php echo url(('article2/index'),array('cateid'=>$article3['id'])); ?>"><?php echo mb_substr($article3['title'], 0,32,'utf-8'); ?></a></td>
                                        <td width="90px"><a href="<?php echo url(('article2/index'),array('cateid'=>$article3['id'])); ?>"><?php echo date("Y-m-d",$article3['time']); ?></a></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="<?php echo url(('newlst/index'),array('k_id'=>$article3['k_id'])); ?>">more>></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"style="margin-top: 3px;margin-bottom: 3px;">
                        <div class="panel">
                            <div class="panel-heading" style="background-color: #265CB4;color: white;">
                                <h3 class="panel-title">实践教学科</h3>
                            </div>
                            <div class="panel-body" style="min-height: 300px">
                                <table class="table">
                                    <?php if(is_array($article4) || $article4 instanceof \think\Collection): $i = 0; $__LIST__ = $article4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article4): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><a href="<?php echo url(('article2/index'),array('cateid'=>$article4['id'])); ?>"><?php echo mb_substr($article4['title'], 0,32,'utf-8'); ?></a></td>
                                        <td width="90px"><a href="<?php echo url(('article2/index'),array('cateid'=>$article4['id'])); ?>"><?php echo date("Y-m-d",$article4['time']); ?></a></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="<?php echo url(('newlst/index'),array('k_id'=>$article4['k_id'])); ?>">more>></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"style="margin-top: 3px;margin-bottom: 3px;">
                        <div class="panel">
                            <div class="panel-heading" style="background-color: #265CB4;color: white;">
                                <h3 class="panel-title">学业事务科</h3>
                            </div>
                            <div class="panel-body" style="min-height: 300px">
                                <table class="table">
                                    <?php if(is_array($article5) || $article5 instanceof \think\Collection): $i = 0; $__LIST__ = $article5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article5): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><a href="<?php echo url(('article2/index'),array('cateid'=>$article5['id'])); ?>"><?php echo mb_substr($article5['title'], 0,32,'utf-8'); ?></a></td>
                                        <td width="90px"><a href="<?php echo url(('article2/index'),array('cateid'=>$article5['id'])); ?>"><?php echo date("Y-m-d",$article5['time']); ?></a></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="<?php echo url(('newlst/index'),array('k_id'=>$article5['k_id'])); ?>">more>></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"style="margin-top: 3px;margin-bottom: 3px;">
                        <div class="panel " >
                            <div class="panel-heading" style="background-color: #265CB4;color: white;">
                                <h3 class="panel-title">学生交流科</h3>
                            </div>
                            <div class="panel-body" style="min-height: 300px">
                                <table class="table">
                                    <?php if(is_array($article6) || $article6 instanceof \think\Collection): $i = 0; $__LIST__ = $article6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article6): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><a href="<?php echo url(('article2/index'),array('cateid'=>$article6['id'])); ?>"><?php echo mb_substr($article6['title'], 0,32,'utf-8'); ?></a></td>
                                        <td width="90px"><a href="<?php echo url(('article2/index'),array('cateid'=>$article6['id'])); ?>"><?php echo date("Y-m-d",$article6['time']); ?></a></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="<?php echo url(('newlst/index'),array('k_id'=>$article6['k_id'])); ?>">more>></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"style="margin-top: 3px;margin-bottom: 3px;">
                        <div class="panel ">
                            <div class="panel-heading" style="background-color: #265CB4;color: white;">
                                <h3 class="panel-title">教学评价科</h3>
                            </div>
                            <div class="panel-body" style="min-height: 300px">
                                <table class="table">
                                    <?php if(is_array($article7) || $article7 instanceof \think\Collection): $i = 0; $__LIST__ = $article7;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article7): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><a href="<?php echo url(('article2/index'),array('cateid'=>$article7['id'])); ?>"><?php echo mb_substr($article7['title'], 0,32,'utf-8'); ?></a></td>
                                        <td width="90px"><a href="<?php echo url(('article2/index'),array('cateid'=>$article7['id'])); ?>"><?php echo date("Y-m-d",$article7['time']); ?></a></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="<?php echo url(('newlst/index'),array('k_id'=>$article7['k_id'])); ?>">more>></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"style="margin-top: 3px;margin-bottom: 3px;">
                        <div class="panel ">
                            <div class="panel-heading" style="background-color: #265CB4;color: white;">
                                <h3 class="panel-title">现代教学中心</h3>
                            </div>
                            <div class="panel-body" style="min-height: 300px">
                                <table class="table">
                                    <?php if(is_array($article8) || $article8 instanceof \think\Collection): $i = 0; $__LIST__ = $article8;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article8): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><a href="<?php echo url(('article2/index'),array('cateid'=>$article8['id'])); ?>"><?php echo mb_substr($article8['title'], 0,32,'utf-8'); ?></a></td>
                                        <td width="90px"><a href="<?php echo url(('article2/index'),array('cateid'=>$article8['id'])); ?>"><?php echo date("Y-m-d",$article8['time']); ?></a></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="<?php echo url(('newlst/index'),array('k_id'=>$article8['k_id'])); ?>">more>></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"style="margin-top: 3px;margin-bottom: 3px;">
                        <div class="panel ">
                            <div class="panel-heading" style="background-color: #265CB4;color: white;">
                                <h3 class="panel-title">教师（教学）发展中心</h3>
                            </div>
                            <div class="panel-body" style="min-height: 300px">
                                <table class="table">
                                    <?php if(is_array($article9) || $article9 instanceof \think\Collection): $i = 0; $__LIST__ = $article9;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article9): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><a href="<?php echo url(('article2/index'),array('cateid'=>$article9['id'])); ?>"><?php echo mb_substr($article9['title'], 0,32,'utf-8'); ?></a></td>
                                        <td width="90px"><a href="<?php echo url(('article2/index'),array('cateid'=>$article9['id'])); ?>"><?php echo date("Y-m-d",$article9['time']); ?></a></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="<?php echo url(('newlst/index'),array('k_id'=>$article9['k_id'])); ?>">more>></a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--右侧子导航结束-->
        </div>

    </div>

    <div class="myfooter hidden-print" style="width:100%;min-height:50px;color:white;height: 120px;background-color: #265CB4;overflow: hidden">
    <!--<div style="float: right;position: absolute;">
        <img src="__INDEX__/images/njtech2.png" alt="" style="width: 70px;height: 80px;float: right;" class="img-rounded">
    </div>-->
    <div class="container" style="max-width: 1150px;margin: 0 auto;height: 120px;">
        <div class="col-md-4" style="height: 120px;float: left;">
            <div class="row" style="margin-top: 25px;height: 25px;">
                <p style="width: 100%;">Copyright@ 南京工业大学教学事务部</p>
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

</div>
<!--底部导航栏-->


<!--底部导航栏-->
</body>
</html>
