<?php 
include 'contant/database/db.php';
$data_user = header_pg();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
	<div class="row">
    <div class="col-md-5">
    <img src="images/logo.png" class="logo img-responsive">
    </div>
    <div class="col-md-7 text-right">
        <div class="mybtn">
                <a class="btn btn-primary" href="login.php">Login</a>
     	</div>
         <div class="mybtn">
                <a class="btn btn-primary" href="admin_login.php">Admin</a>
     	</div>
        <div class="mybtn">
               <a class="btn btn-primary" href="registeration.php">Register Now</a>
         </div>
    </div>
    </div>
<div class="row">
<nav role="navigation" class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand"></a>
    </div>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a class="dropdown-toggle" href="index.php">Home</a>
           	</li>
            <li>
                <a class="dropdown-toggle" href="about_us.php">About us</a>
                </li>
                <li>
                <a class="dropdown-toggle" href="blood_bank.php">Blood Bank</a>
                </li>
            <li>
                <a class="dropdown-toggle" href="contact_us.php">Contact Us</a>
                </li>
            <li>
                <a class="dropdown-toggle" href="info.php">Info</a>
                
            </li>
        </ul>    
        <?php /* <form role="search" class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control">
            </div>
        </form> */ ?>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"></a></li>
        </ul>
    </div>
</nav>
</div>

<div class="row">