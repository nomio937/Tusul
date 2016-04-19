<!DOCTYPE html>
<html lang="en">

<head class="head">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Админ  нэвтэрсэн</title>
  <!-- Bootstrap core CSS -->

  <link href="admin/css/bootstrap.min.css" rel="stylesheet">

  <link href="admin/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="admin/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="admin/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="admin/css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="admin/css/icheck/flat/green.css" rel="stylesheet" />
  <link href="admin/css/floatexamples.css" rel="stylesheet" type="text/css" />

  <script src="admin/js/jquery.min.js"></script>
  <script src="admin/js/nprogress.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
@yield('head')
</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/mg.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Админстар</span>
              <h2>Номио</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Нүүр<span class="fa fa-chevron-down"></span></a>
                </li>
                <li><a><i class="fa fa-edit"></i> Сайтны засвар <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Inputimpormation">Мэдээ оруулах</a>
                    </li>
                    <li><a href="impview">Мэдээний жагсаалт</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Тэмцээн <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="t_nemeh">Мэдээ  нэмэх</a>
                    </li>
                    <li><a href="t_meduuleg">Тэмцээний мэдүүлэг</a>
                    </li>
                    <li><a href="ta_list">Тамирчдын жагсаалт</a>
                    </li>
                    <li><a href="clublist">Клубийн жагсаалт</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Чансаа <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="chansaa">Чансаа  харах</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Тайлан  гаргах<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="h_report">Холбооны  тайлан</a>
                    </li>
                    <li><a href="t_report">Тэмцээний тайлан</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
     
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/mg.png" alt="">Номио
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="javascript:;">  Profile</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li><a href="logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a href="inbox.html">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" >

        <!-- top tiles -->
        <div class="row tile_count">
        @yield('row tile_count')

        </div>
        <!-- /top tiles -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

              <div class="row x_title">
             
            @yield('row x_title')
                  </div>
                  @yield('dashboard_graph')
                 
                </div>

              </div>
              <!-- end of weather widget -->
            </div>

        
      </div>
      <!-- /page content -->

    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="admin/js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="admin/js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="admin/js/gauge/gauge_demo.js"></script>
  <!-- bootstrap progress js -->
  <script src="admin/js/progressbar/bootstrap-progressbar.min.js"></script>
  <!-- icheck -->
  <script src="admin/js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="admin/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="admin/js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="admin/js/chartjs/chart.min.js"></script>

  <script src="admin/js/custom.js"></script>
  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="admin/js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="admin/js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="admin/js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="admin/js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="admin/js/flot/date.js"></script>
  <script type="text/javascript" src="admin/js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="admin/js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="admin/js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="admin/js/flot/jquery.flot.resize.js"></script>

<script src="js/angular.min.js"></script>
<script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>
  <!-- /datepicker -->
  <!-- /footer content -->
@yield('nav-md')
</body>

</html>
