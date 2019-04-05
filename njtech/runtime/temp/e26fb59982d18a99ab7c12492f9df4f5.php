<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"/Applications/MAMP/htdocs/njtech/public/../application/index/view/listmenu/lst.html";i:1535009188;s:81:"/Applications/MAMP/htdocs/njtech/public/../application/index/view/public/top.html";i:1535034208;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>南京工业大学教务处</title>
    <link href="__INDEX__/css/bootstrap.min.css" rel="stylesheet">
    <link href="__INDEX__/css/bootstrap-theme.css" rel="stylesheet">
    <link rel='stylesheet' href='__INDEX__/css/style.css'>
    <script src="__INDEX__/js/jquery.min.js"></script>
    <script src="__INDEX__/js/bootstrap.js"></script>
    <script src="__INDEX__/js/npm.js"></script>
    <style>
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
    <!--顶部轮播-->
    <img src="__INDEX__/images/njtech.png" class="img-responsive" alt="Responsive image">
    <!--顶部轮播-->

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
<nav class="navbar" role="navigation">
    <div class="container-fluid">
        <div style="margin:0 auto;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle bg-primary" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse" style="text-align: center;">
                <ul class="nav navbar-nav nav-pills" style="display: inline-block;float: none;">
                    <li class="dropdown" style="background-color: #0093dd;color: white;">
                        <a style="background-color: #0093dd;color: white;" id="dLabel" role="button"  class="btn" data-target="#"
                           href="<?php echo url('index/index'); ?>">
                            网站首页
                        </a>
                    </li>
                    <?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                    <li class="dropdown" style="background-color: #0093dd;color: white;">
                        <a style="background-color: #0093dd;color: white;" id="dLabel" role="button" data-toggle="dropdown" class="btn" data-target="<?php echo url('listmenu/lst'); ?>"
                           href="<?php echo url('listmenu/lst'); ?>">
                            <?php echo $cate['catename']; ?> <span class="caret"></span>
                        </a>
                        <?php if($cate['children'] != 0): ?>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <?php foreach ($cate['children'] as $k2 => $v2):?>
                            <li class="dropdown-submenu">
                            <li><a href="javascript:;"><?php echo $v2['catename'];?></a></li>
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
                    <li><a href="#">网站首页</a></li>
                    <li class="active">机构设置</li>
                </ol>
            </div>
            <div class="col-md-3">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="keywords" placeholder="请输入关键词" style="width: 215px;float: left;">
                        <button type="submit" class="btn btn-primary" style="color: #FFFFFF;float: right;">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>  
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <h4><span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="float: left;margin-right: 10px"></span>机构设置</h4>
                </div>
                <div class="container-fluid" style="height: 2px;background: #0093dd;margin-top: 5px;margin-bottom: 5px"></div>
            </div>
        </div>
        <!--面包屑导航和搜索框结束-->

        <!--左侧子导航和右侧列表开始-->
        <div class="row" style="margin-top: 10px">
            <!--左侧子导航开始-->
            <div class="col-md-3">
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
                <div class="row" style="margin-top: 10px">
                    <div class="col-md-11">
                        <img src="__INDEX__/images/view.jpg" class="img-responsive" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!--左侧子导航结束-->

            <!--右侧列表开始-->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">部领导</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="#">more>></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">各科室</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="#">more>></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">挂靠机构</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                    <tr>
                                        <td width="75%"><a href="#"><span>[发布中心]</span>wenzhangbiaotiqq</a></td>
                                        <td><a href="#">[04-19]</a></td>
                                    </tr>
                                </table>
                                <div style="text-align: right;margin-right: 10px;"><a href="#">more>></a></div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <!--右侧列表结束-->
        </div>

    </div>

    <!--底部导航栏-->
        <div class="myfooter hidden-print" style="background-color: #0093dd">
            <div class="row">
                <img src="__INDEX__/images/weizhang.png" alt="" style="width: 90px;float: right;" class="img-rounded">
            </div>
        </div>
    
    <!--底部导航栏-->
</div>

</body>
</html>
