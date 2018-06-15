<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"D:\WWW\demo\public/../application/admin\view\system\setting.html";i:1514946050;s:51:"D:\WWW\demo\application\admin\view\public\base.html";i:1514953432;s:53:"D:\WWW\demo\application\admin\view\public\header.html";i:1514946050;s:53:"D:\WWW\demo\application\admin\view\public\footer.html";i:1514946050;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LotusAdmin2.0极速开发框架</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- layui -->
  <link rel="stylesheet" type="text/css" href="/static/module/layui/css/layui.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/static/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/static/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/static/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/static/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/static/AdminLTE/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/static/AdminLTE/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/static/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/static/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/static/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/static/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/static/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="/static/AdminLTE/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="/static/AdminLTE/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <!--   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
</head>

  <style type="text/css">
    .box{
      border-top: none;
    }
  </style>


<body class="hold-transition skin-green-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo url('admin/index/index'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>AN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Lotus</b>Admin-2.0</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="/static/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/static/AdminLTE/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/static/AdminLTE/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/static/AdminLTE/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/static/AdminLTE/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>


          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>

        <li class="dropdown ">
            <a href="<?php echo url('index/index/index'); ?>">
              <i class="fa fa-home"></i>
            </a>
        </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/static/AdminLTE/dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo session('username') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                <img src="/static/AdminLTE/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo session('username'); ?>
                  <small>注册时间:2017年12月31日</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">粉丝</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">市场</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">朋友</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">资料</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo url('admin/index/lockscreen'); ?>" class="btn btn-default btn-flat">锁屏</a>
                  <a href="<?php echo url('admin/login/logout'); ?>" class="btn btn-default btn-flat">注销</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/static/AdminLTE/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo session('username'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="搜索...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <!-- <li class="header">主菜单</li> -->
           <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): if( count($menu)==0 ) : echo "" ;else: foreach($menu as $key=>$vo): if(isset($vo['children'])): ?>
                           <li class="treeview">
                                    <a  href="#">
                                      <i class="<?php echo $vo['icon']; ?>"></i> <span><?php echo $vo['title']; ?></span>
                                      <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                      </span>
                                    </a>

                                     <ul class="treeview-menu">
                                        <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): if( count($vo['children'])==0 ) : echo "" ;else: foreach($vo['children'] as $key=>$v): ?>

                                              <li style="margin-left: 15px" ><a href="<?php echo url($v['name']); ?>"><i class="fa fa-circle-o"></i><?php echo $v['title']; ?></a></li>

                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                      </ul>
                            </li>
                    <?php else: ?>

                      <li class="one_level">
                        <a style="color:#red" href="<?php echo url($vo['name']); ?>">
                          <i class="<?php echo $vo['icon']; ?>"></i> <span><?php echo $vo['title']; ?></span>
                          <span class="pull-right-container">
                            <i class="fa  "></i>
                          </span>
                        </a>
                        </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        
<style type="text/css">
  .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
    background-color: green
  }
</style>
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        系统
        <small>配置</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 系统</a></li>
        <li class="active">系统日志</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row" >
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box" style="">
            <div class="box-header">
              <h3 class="box-title">列表</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body"  style="width: 800px;">

                <form    id="mainForm" class="layui-form layui-form-line layui-form-pane" method='post' action='updateSiteConfig'>

                    <div class="layui-form-item">
                        <label class="layui-form-label">网站标题</label>
                        <div class="layui-input-block">
                          <input type="text" value="<?php echo (isset($site_config['title']) && ($site_config['title'] !== '')?$site_config['title']:''); ?>" name="site_config[title]" required  lay-verify="required" placeholder="请输入网站标题" autocomplete="off" class="layui-input">
                        </div>
                      </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">公司名称</label>
                        <div class="layui-input-block">
                          <input type="text" value="<?php echo (isset($site_config['company']) && ($site_config['company'] !== '')?$site_config['company']:''); ?>" name="site_config[company]" required  lay-verify="required" placeholder="请输入公司名称" autocomplete="off" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item layui-input-inline">
                          <label class="layui-form-label">SEO标题</label>
                          <div class="layui-input-block">
                            <input  value="<?php echo (isset($site_config['seo']) && ($site_config['seo'] !== '')?$site_config['seo']:''); ?>" type="text" name="site_config[seo]"    placeholder="请输入SEO标题" autocomplete="off" class="layui-input">
                          </div>
                    </div>

                    <div class="layui-form-item layui-input-inline">
                          <label class="layui-form-label">SEO关键字</label>
                          <div class="layui-input-block">
                            <input value="<?php echo (isset($site_config['keywords']) && ($site_config['keywords'] !== '')?$site_config['keywords']:''); ?>" type="text" name="site_config[keywords]"    placeholder="请输入SEO关键字" autocomplete="off" class="layui-input">
                          </div>
                    </div>

                    <div class="layui-form-item layui-input-inline">
                          <label class="layui-form-label">SEO说明</label>
                          <div class="layui-input-block">
                            <input  value="<?php echo (isset($site_config['description']) && ($site_config['description'] !== '')?$site_config['description']:''); ?>"  type="text" name="site_config[description]"     placeholder="请输入SEO说明" autocomplete="off" class="layui-input">
                          </div>
                    </div>

                    <div class="layui-form-item">
                          <label class="layui-form-label">版权信息</label>
                          <div class="layui-input-block">
                            <input type="text" value="<?php echo (isset($site_config['version']) && ($site_config['version'] !== '')?$site_config['version']:''); ?>"  type="text" name="site_config[version]"       placeholder="请输入版权信息" autocomplete="off" class="layui-input">
                          </div>
                    </div>

                    <div class="layui-form-item">
                          <label class="layui-form-label">ICP备案号</label>
                          <div class="layui-input-block">
                            <input value="<?php echo (isset($site_config['ICP']) && ($site_config['ICP'] !== '')?$site_config['ICP']:''); ?>" type="text" name="site_config[ICP]"     placeholder="请输入ICP备案号" autocomplete="off" class="layui-input">
                          </div>
                    </div>

                    <div class="layui-form-item layui-form-text">
                    <label for="desc" class="layui-form-label">
                        统计代码
                    </label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入内容"  name="site_config[code]"  class="layui-textarea"> <?php echo (isset($site_config['code']) && ($site_config['code'] !== '')?$site_config['code']:''); ?></textarea>
                    </div>
                </div>

                <div class="" class="layui-form-item" >
                        <div class="layui-input-block submit_btn">
                          <button   class="layui-btn" lay-submit lay-filter="*">提交</button>
                          <button style="display: none;"  type="reset" class=" layui-btn layui-btn-primary">重置</button>
                        </div>
                </div>

                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2018 <a  target="_target" href="http://www.010xr.com">LotusAdmin</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="/static/AdminLTE/javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="/static/AdminLTE/javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="/static/AdminLTE/javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="/static/AdminLTE/javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="/static/AdminLTE/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="/static/AdminLTE/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="/static/AdminLTE/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="/static/AdminLTE/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="/static/AdminLTE/javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</body>
<!-- jQuery 3 -->
<script src="/static/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/static/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/static/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/static/AdminLTE/dist/js/adminlte.min.js"></script>
<script src="/static/admin/js/jquery.form.js"></script>
<!-- DataTables -->
<script src="/static/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/static/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/static/admin/js/admin.js"></script>
<script src="/static/module/layer/layer.js"></script>
<script type="text/javascript" src="/static/module/layui/layui.js"></script>
<!-- <script src="/static/AdminLTE/dist/js/demo.js"></script> -->
<script type="text/javascript">
    // 定义全局JS变量
    var GV = {
        current_controller: "admin/<?php echo (isset($controller) && ($controller !== '')?$controller:''); ?>/<?php echo $action; ?>",
        base_url: "/static"
    };
    /**
     * 后台侧边菜单选中状态
    */
    //移除激活
    $('.treeview').removeClass('active').children('.li').removeClass('active');
    // 一级菜单激活判断
    $('.one_level').find('a[href*="' + GV.current_controller + '"]').parent().addClass('active').css({'border-top':'solid 1px #ccc','border-bottom':'solid 1px #ccc'});
    // 一级菜单激活判断
    $('.treeview-menu').find('a[href*="' + GV.current_controller + '"]').parent().addClass('active').parents('.treeview').addClass('active').css({'border-top':'solid 1px #ccc','border-bottom':'solid 1px #ccc'});
    // 暂时没做三级菜单，有需要自行添加
</script>


  <script type="text/javascript">
      $(function(){
        var options = {
              type:'post',           //post提交
              //url:'http://ask.tongzhuo100.com/server/****.php?='+Math.random(),   //url
              dataType:"json",        //json格式
              data:{},    //如果需要提交附加参数，视情况添加
              clearForm: false,        //成功提交后，清除所有表单元素的值
              resetForm: false,        //成功提交后，重置所有表单元素的值
              cache:false,
              async:false,          //同步返回
              success:function(data){
                    if(data.code==0){
                      layer.msg(data.msg);
                    }else{
                      layer.msg(data.msg,{icon:1,time:500},function(){
                        $("#reset").click();
                        lotus_close();
                        parent.location.reload();
                      });
                    }
                  //服务器端返回处理逻辑
                },
                error:function(XmlHttpRequest,textStatus,errorThrown){
                  layer.msg('操作失败:服务器处理失败');
              }
            };
          layui.use('form', function(){
            var form = layui.form;
            $('#mainForm').ajaxForm(options).submit(function(data){});
          });

        })
      // });
  </script>


</html>

