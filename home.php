<?php
require_once('include/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Madawa Pharmacy & Monitoring System</title>

    <!--Bootstrap Core CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet"  type="text/css" href="assets/css/bootstrap-theme.min.css">
    <!--Custom CSS-->
    <link rel="stylesheet" href="">
    <!--Morris Charts CSS-->
    <link rel="stylesheet" href="">
    <!--Custom Fonts-->
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="">
</head>

<body>
    <div id="wrapper">
        <!-- Navigation-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="nav-brand"href="index.html">Regis Inventory and Monitoring System</a>
            </div>
            <!--Top Menu Items-->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Administrator <b class="caret"></b> </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"> <i class="fa fa-fw fa-power-off"></i>Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items  -- These Collapse to the responsive navigation menu on Small Screens-->
            <div class="collapse navbar-collapse navbar-exl-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="home.php"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
                    </li>
                    <li>
                        <a href="item.php"> <span class="glyphicon glyphicon-list" aria-hidden="true"></span>Item List</a>
                    </li>
                    <li>
                        <a href="product.php"> <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Product Profile</a>
                    </li>
                    <li>
                        <a href="stock.php"> <span class="glyphicon glyphicon-book" aria-hidden="true"></span>Stocks</a>
                    </li>
                    <li>
                        <a href="expired.php"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Expired</a>
                    </li>
                    <li>
                        <a href="sales.php"> <span class="glyphicon glyphicon-record" aria-hidden="true"></span>Sales</a>
                    </li>
                </ul>
            </div>
            <!--. Navbar - Collapse-->
        </nav>
        <div id="page-wrapper">
            <div class="conatiner-fluid">
                <!-- Page Heading-->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome <small>Administrator</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i> Home
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row-->
                <div id="order"></div>
            </div>
            <!-- /.container-fluid-->
        </div>
        <!--  /#Page-wrapper-->
    </div>
    <!--  /#wrapper-->
    <?php include_once('modal/to_cart.php');?>
    <?php include_once('modal/confirmation.php');?>
    <?php include_once('modal/add_new_item.php');?>
    <?php include_once('modal/message.php');?>

    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
</body>
</html>