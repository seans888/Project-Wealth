<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html>
<head>

	<title>South Mansfield College</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">

  <!-- Bootstrap Core CSS -->
    <link href="assests/bootstrap2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="assests/bootstrap2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
    <link href="assests/bootstrap2/css/sb-admin.css" rel="stylesheet">

	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">

   <!-- Morris Charts CSS -->
    <link href="assests/bootstrap2/css/plugins/morris.css" rel="stylesheet">

  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container">
	 

  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <br><br><br><br>
                    <a href="dashboard.php"><center><img src="assests/images/logo.jpg" ></center><br></a>
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="brand.php"><i class="glyphicon glyphicon-btc"></i> Brand</a>
                    </li>
                    <li>
                        <a href="categories.php"><i class="fa fa-fw fa-table"></i> Category</a>
                    </li>
                    <li>
                        <a href="product.php"><i class="glyphicon glyphicon-ruble"></i> Product</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-shopping-cart"></i> Orders <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="orders.php?o=add"><i class="glyphicon glyphicon-plus"></i> Add orders</a>
                            </li>
                            <li>
                                <a href="orders.php?o=manord"><i class="glyphicon glyphicon-edit"></i>  Manage orders</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="report.php"><i class="glyphicon glyphicon-check"></i> Report </a></a>
                    </li>
                     <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"> </i> User <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavSetting"><a href="setting.php"> <i class="glyphicon glyphicon-wrench"></i> Setting</a></li>            
            <li id="topNavLogout"><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>            
          </ul>
        </li>       
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>