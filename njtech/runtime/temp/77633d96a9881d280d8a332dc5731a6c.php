<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"/Applications/MAMP/htdocs/njtech/public/../application/index/view/newlst/filelst.html";i:1542943353;s:83:"/Applications/MAMP/htdocs/njtech/public/../application/index/view/public/title.html";i:1542772127;s:81:"/Applications/MAMP/htdocs/njtech/public/../application/index/view/public/top.html";i:1542790012;s:82:"/Applications/MAMP/htdocs/njtech/public/../application/index/view/public/foot.html";i:1545287651;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="__INDEX__/images/njtech2.png">
<link rel="icon" type="image/png" sizes="96x96" href="__INDEX__/images/njtech2.png">
<title>南京工业大学教学事务部</title>
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
                    <span>教学事务部</span>
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
                    <li class="active">教学文件</li>
                </ol>
            </div>
            <div class="col-md-3">
                <form class="form-inline" action="<?php echo url('search/indexs'); ?>" method="get" role="form">
                    <div class="form-group">
                        <input type="text" name="keywords" class="form-control" id="keywords" placeholder="请输入关键词" style="width: 215px;float: left;">
                        <button type="submit" class="btn btn-primary" style="color: #FFFFFF;float: right;height: 35px;">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div> 
                </form>
            </div>
        </div>
        <!--<div class="row" style="margin-top: 10px;">
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
            <!--左侧子导航开始-->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel" style="min-height: 400px;">
                            <div class="panel-heading"  style="background-color: #265CB4;color: white;">
                                <h3 class="panel-title">文件列表</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <?php if(is_array($file) || $file instanceof \think\Collection): $i = 0; $__LIST__ = $file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$file1): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><a href="<?php echo url(('article/file'),array('cateid'=>$file1['id'])); ?>"><?php echo $file1['title']; ?></a></td>
                                        <td width="100px"><a href="<?php echo url(('article/file'),array('cateid'=>$file1['id'])); ?>"><?php echo date("Y-m-d",$file1['time']); ?></a></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                            </div>
                            <div style="margin-left: 30%;">
                                <?php echo $file->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--左侧子导航结束-->

            <!--右侧列表开始-->
            <!--<div class="col-md-3">
                <div class="row">
                    <div class="col-md-11">
                        <ul class="nav nav-pills nav-stacked" style="width: 100%">
                            <li role="presentation" class="active"><a href="#">部领导</a></li>
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown role="button" aria-haspopup="true" aria-expanded="false">
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
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                <div class="row" style="margin-top: 15px;height: 300px;">
                    <div class="col-md-11">
                        <div class="panel panel-primary" style="height: 300px;">
                            <div class="panel-heading">
                                <h3 class="panel-title">最新文章</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td><a href=""></a></td>
                                        <td width="100px"><a href="#"></a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                &lt;!&ndash;<div class="row" style="margin-top: 10px">
                    <div class="col-md-11">
                        <img src="__INDEX__/images/view.jpg" class="img-responsive" alt="Responsive image">
                    </div>
                </div>&ndash;&gt;
            </div>-->

            <!--右侧列表结束-->
        </div>

    </div>



</div>
<!--底部导航栏-->
<div class="myfooter hidden-print" style="width:100%;min-height:50px;color:white;height: 100px;background-color: #265CB4;">

    <!--<div style="float: right;position: absolute;">
        <img src="__INDEX__/images/njtech2.png" alt="" style="width: 70px;height: 80px;float: right;" class="img-rounded">
    </div>-->
    <div style="width: 1150px;margin: 0 auto;border:1px solid red;height: 100px;">
        <div style="width: 500px;height: 100px;float: left;">
            <div style="width:400px;float: left;text-align: center;margin-top: 10px;border: 1px solid red ;">
                <p style="width: 100%;text-align: center;">@2018 南京工业大学教学事务部 <a href="http://green.njtech.edu.cn/" target="_blank" style="color: white;">GreenStudio</a> <a href="<?php echo url('admin/login/index'); ?>" target="_blank">后台入口</a></p>
            </div>
            <div style="width: 400px;"></div>
        </div>
        <div style="height: 100px;width: 600px;float: right;border: 1px solid red;">
            <div style="height: 80px;width: 80px;margin:10px 20px;border: 1px solid red;float: left">
                <img src="__INDEX__/images/erweima1.png" width="80px" height="80px"/>
            </div>
            <div style="height: 80px;width: 80px;margin:10px 20px;border: 1px solid red;float: left">
                <img src="__INDEX__/images/erweima2.png" width="80px" height="80px"/>
            </div>
            <div style="height: 80px;width: 80px;margin:10px 20px;border: 1px solid red;float: left">
                <img src="__INDEX__/images/erweima3.png" width="80px" height="80px"/>
            </div>
            <div style="height: 80px;width: 80px;margin:10px 20px;border: 1px solid red;float: left">
                <img src="__INDEX__/images/erweima4.png" width="80px" height="80px"/>
            </div>
        </div>
    </div>


    <!--<img src="__INDEX__/images/foot.png" alt="" style="width: 100%;min-height: 30px;" class="img-rounded">-->
</div>

<!--底部导航栏-->
</body>
</html>
