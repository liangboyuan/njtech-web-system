<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"/Applications/MAMP/htdocs/njtech/public/../application/admin/view/file/edit.html";i:1539841325;s:83:"/Applications/MAMP/htdocs/njtech/public/../application/admin/view/public/title.html";i:1539919235;s:81:"/Applications/MAMP/htdocs/njtech/public/../application/admin/view/public/top.html";i:1532587766;s:82:"/Applications/MAMP/htdocs/njtech/public/../application/admin/view/public/left.html";i:1545290838;}*/ ?>
<!DOCTYPE html>
<html><head>
        <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="__ADMIN__/images/njtech2.png">
<link rel="icon" type="image/png" sizes="96x96" href="__ADMIN__/images/njtech2.png">
<title>南京工业大学教务处</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <link href="__ADMIN__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/typicons.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">
    <script src="__ADMIN__/ueditor/ueditor.config.js"></script>
    <script src="__ADMIN__/ueditor/ueditor.all.min.js"></script>
    <script src="__ADMIN__/ueditor/lang/zh-cn/zh-cn.js"></script>
    
</head>
<body>
    <!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <h2 style="margin-top: 8px;margin-left: 20px">教学事务部</h2>
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__ADMIN__/images/njtech.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('name'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div> 
    <!-- /头部 -->
    
    <div class="main-container container-fluid">
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('auth_group/lst'); ?>">
                                    <span class="menu-text">
                                        用户组列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('auth_rule/lst'); ?>">
                                    <span class="menu-text">
                                        权限列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-folder"></i>
                            <span class="menu-text">栏目管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文章管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        菜单栏文章                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('article2/lst'); ?>">
                                    <span class="menu-text">
                                        教学公告                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('article3/lst'); ?>">
                                    <span class="menu-text">
                                        教学新闻                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('article4/lst'); ?>">
                                    <span class="menu-text">
                                        专题栏目                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('file/lst'); ?>">
                                    <span class="menu-text">
                                        教学文件                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-chain"></i>
                            <span class="menu-text">友情连接</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('hotlink/lst'); ?>">
                                    <span class="menu-text">
                                        推荐常用链接                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('uselink/lst'); ?>">
                                    <span class="menu-text">
                                        底部常用链接                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('link/lst'); ?>">
                                    <span class="menu-text">
                                        校内外链接                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Conf/lst'); ?>">
                                    <span class="menu-text">
                                        专题栏目                               </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>


                            <li>
                                <a href="<?php echo url('xiaoli/index'); ?>">
                                    <span class="menu-text">
                                        校历                              </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>                        
                    
                                           
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div> 
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('lst'); ?>">教学新闻</a>
                    </li>
                                        <li class="active">修改新闻</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改新闻</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data" >
                        <input type="hidden" name="id" value="<?php echo $arts['id']; ?>">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">标题</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder=""  value="<?php echo $arts['title']; ?>" name="title" required="" type="text">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">作者</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder=""  value="<?php echo $arts['author']; ?>" name="author" type="text">
                            </div>

                        </div>

                        <!--<div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">缩略图</label>
                            <div class="col-sm-6">
                                <input style="float:left;"  placeholder="" name="thumb" type="file">
                                <?php if($arts['thumb'] != ''): ?>
                                <img style="float:left;" src="<?php echo $arts['thumb']; ?>" width="30">
                                <?php else: ?>
                                暂无缩略图
                                <?php endif; ?>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">是否推荐</label>
                            <div class="col-sm-6">
                                <label style="margin-right:15px;">
                                    <input <?php if($arts['rec'] == 1): ?> checked="checked" <?php endif; ?> name="rec" value="1" type="radio">
                                    <span class="text">是</span>
                                </label>
                                <label style="margin-right:15px;">
                                    <input <?php if($arts['rec'] == 0): ?> checked="checked" <?php endif; ?> class="inverted" name="rec" value="0" type="radio">
                                    <span class="text">否</span>
                                </label>
                            </div>

                        </div>-->

                        <!--<div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                            <div class="col-sm-6">
                                <select name="cateid">
                                    <?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                    <option <?php if($cate['id'] == $arts['cateid']): ?>selected="selected"<?php endif; ?> value="<?php echo $cate['id']; ?>"><?php if($cate['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('-', $cate['level']*4)?><?php echo $cate['catename']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>-->
                        <!--<div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">所属科室</label>
                            <div class="col-sm-6">
                                <select name="k_id">
                                    <option <?php if($arts['k_id'] == 1): ?> selected="selected"<?php endif; ?> value="1">综合事务科</option>
                                    <option <?php if($arts['k_id'] == 2): ?> selected="selected"<?php endif; ?> value="2">专业建设科</option>
                                    <option <?php if($arts['k_id'] == 3): ?> selected="selected"<?php endif; ?> value="3">教学运行科</option>
                                    <option <?php if($arts['k_id'] == 4): ?> selected="selected"<?php endif; ?> value="4">实践教学科</option>
                                    <option <?php if($arts['k_id'] == 5): ?> selected="selected"<?php endif; ?> value="5">学业事务科</option>
                                    <option <?php if($arts['k_id'] == 6): ?> selected="selected"<?php endif; ?> value="6">学生交流科</option>
                                    <option <?php if($arts['k_id'] == 7): ?> selected="selected"<?php endif; ?> value="7">教学评价科</option>
                                </select>
                            </div>

                        </div>-->
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">内容</label>
                            <div class="col-sm-6">
                                <textarea id="content"  required="" name="content"><?php echo $arts['content']; ?></textarea>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>  
    </div>

        <!--Basic Scripts-->
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>
    <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400,});
    </script>


</body></html>