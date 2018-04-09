<?php
//use app\widgets\Alert;
use app\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;


//AppAsset::register($this);
?>
<?php //$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Админка | </title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">

    <!-- color CSS -->
    <link href="css/colors/megna.css" id="theme" rel="stylesheet">

</head>

<body>
<!--    --><?php //$this->beginBody() ?>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                                      data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part"><a class="logo" href="index.php"><b><img
                            src="plugins/images/eliteadmin-logo.png" alt="home"/></b><span
                        class="hidden-xs"><strong>elite</strong>hospital</span></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                            class="icon-arrow-left-circle ti-menu"></i></a></li>
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Search..." class="form-control"> <a href=""><i
                                class="fa fa-search"></i></a></form>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown"><a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                                        href="#">
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>

                    </a>


                    <!-- /.dropdown -->

                    <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img
                            src="plugins/images/users/d1.jpg" alt="user-img" width="36" class="img-circle"><b
                            class="hidden-xs">Dr. Steave</b> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="login.php"><i class="fa fa-power-off"></i> Выход</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>

            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- input-group -->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search..."> <span
                            class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span></div>
                    <!-- /input-group -->
                </li>
                <li class="user-pro">
                    <a href="#" class="waves-effect"><img src="plugins/images/users/d1.jpg" alt="user-img"
                                                          class="img-circle"> <span class="hide-menu">Dr. Steve Gection<span
                                class="fa arrow"></span></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> Мой профил</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Настройка аккуанта</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Выход</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap m-t-10">--- Главный Меню</li>
                <li><a href="index.php" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span
                            class="hide-menu">Главная страница</span></a></li>

                </li>
                <li class="nav-small-cap m-t-10">--- Меню</li>
                <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span
                            class="hide-menu"> Назначение <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="gii/templates/crud/simple/views/index.php">Доктор</a></li>
                        <li><a href="#">Книга записи</a></li>
                    </ul>
                </li>
                <li><a href="#" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Карта пациента <span
                                class="fa arrow"></span></span></a>
                <li><a href="blanc.php" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span
                            class="hide-menu"> История болезни пациента <span
                                class="fa arrow"></span></span></a>
                <li><a href="#" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Палата <span
                                class="fa arrow"></span></span></a>
                <li><a href="#" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Лекарство <span
                                class="fa arrow"></span></span></a>

                <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span
                            class="hide-menu"> Доктор <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="doctors.html">All Doctors</a></li>
                        <li><a href="add-doctor.html">Add Doctor</a></li>
                        <li><a href="edit-doctor.html">Edit Doctor</a></li>
                        <li><a href="doctor-profile.html">Doctor Profile</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span
                            class="hide-menu"> Пациент <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="patients.html">All Patients</a></li>
                        <li><a href="add-patient.html">Add Patient</a></li>
                        <li><a href="edit-patient.html">Edit Patient</a></li>
                        <li><a href="patient-profile.html">Patient Profile</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span
                            class="hide-menu"> Статистика <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="payment-report.html">Payment Report</a></li>
                        <li><a href="income-report.html">Income Report</a></li>
                        <li><a href="sales-report.html">Sales Report</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span
                            class="hide-menu"> Платёж <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="payments.html">Payments</a></li>
                        <li><a href="add-payments.html">Add Payment</a></li>
                        <li><a href="patient-invoice.html">Patient Invoice</a></li>
                    </ul>
                </li>

                <li><a href="register.php" class="waves-effect"><i class="icon-login fa-fw"></i> <span
                            class="hide-menu">Регистратсия пользователей</span></a></li>
                <li><a href="#" class="waves-effect"><i class="icon-login fa-fw"></i> <span
                            class="hide-menu">Пости</span></a></li>

                <li class="nav-small-cap">--- Помощь</li>
                <li><a href="javascript:void(0)" class="waves-effect"><i data-icon="F"
                                                                         class="linea-icon linea-software fa-fw"></i>
                        <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="javascript:void(0)">Second Level Item</a></li>
                        <li><a href="javascript:void(0)">Second Level Item</a></li>
                        <li><a href="javascript:void(0)" class="waves-effect">Third Level <span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a href="javascript:void(0)">Third Level Item</a></li>
                                <li><a href="javascript:void(0)">Third Level Item</a></li>
                                <li><a href="javascript:void(0)">Third Level Item</a></li>
                                <li><a href="javascript:void(0)">Third Level Item</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="login.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span
                            class="hide-menu">Выход</span></a></li>

                </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Hospital Dashboard</h4></div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"><a href=""></a>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Кардиология</a></li>
                        <li class="active">Главная страница</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <!-- /.right-sidebar -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">

                        <div class="container">
                            <?= Breadcrumbs::widget([
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ]) ?>

                            <!--                                --><?//= $content ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2018 &copy; Все права защищены. Durdona group.</footer>

</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/tether.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Morris JavaScript -->
<script src="plugins/bower_components/raphael/raphael-min.js"></script>
<script src="plugins/bower_components/morrisjs/morris.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- jQuery peity -->
<script src="plugins/bower_components/peity/jquery.peity.min.js"></script>
<script src="plugins/bower_components/peity/jquery.peity.init.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<script src="js/dashboard1.js"></script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

</body>
<!--    --><?php //$this->endBody() ?>
<?php //$this->endPage() ?>
</html>
