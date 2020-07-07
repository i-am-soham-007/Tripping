<?php
session_start();
if(!isset($_SESSION['user_id'])) {
  header("location:login2.php?msg=Login again.");
}
include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Tripping</title>
  <link rel="canonical" href="index.php" />
  <link rel="icon" href="images/logo/logo_wrapper.png" type="image/x-icon">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">

<!-- notifications css -->
  <link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css"/>
  
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/select2.css" rel="stylesheet">
<link href="css/smoothness/jquery-ui-1.10.0.custom.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/superfish.js"></script>

<script src="js/select2.js"></script>

<script src="js/jquery.parallax-1.1.3.resize.js"></script>

<script src="js/SmoothScroll.js"></script>

<script src="js/jquery.appear.js"></script>

<script src="js/jquery.caroufredsel.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>

<script src="js/jquery.ui.totop.js"></script>

<script src="js/script.js"></script>

</head>
<body class="front video-version">

<div id="main">

<div class="top1_wrapper">
  <div class="container">
    <div class="top1 clearfix">
     <div class="phone1">+91 9265243821</div>
      <div class="social_wrapper">
        <ul class="social clearfix">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
        </ul>
      </div>
      <div class="lang1">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">English<span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a class="ge" href="#">German</a></li>
            <li><a class="ru" href="#">Russian</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="top2_wrapper">
  <div class="container">
    <div class="top2 clearfix">
      <header>
        <div class="logo_wrapper">
          <a href="index.php" class="logo">
            <img src="images/logo/logo.png" height="100" width="150" alt="" class="img-responsive">
          </a>
        </div>
      </header>
      <div class="navbar navbar_ navbar-default">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-collapse navbar-collapse_ collapse">
          <ul class="nav navbar-nav sf-menu clearfix">
              <li class=" active"><a href="index.php">Home</a>
              </li> <li><a href="agencies.php">Travels List</a>
              </li>
        <?php 
               if(isset($_SESSION['user_id']))
               {?>
               <!-- 	<li><a href="Logout.php">Logout</a></li> -->
        <?php  } else{ ?>
            <li class="sub-menu sub-menu-1"><a href="">Login<em></em></a>
              <ul>
               <li><a href="login2.php">User Login</a></li>
            <li><a href="../admin/login.php">Vendor Login</a></li>
            </ul>
            </li>
           <?php } ?>
           <li><a href="hotels.php">Hotels</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            
            <li><a href="contact.php">Contacts</a></li>
        <?php 
               if(isset($_SESSION['user_id']))
               {?>
                <li class="sub-menu sub-menu-1">       <!--   <p style=" margin: 55px;">Welcome User</p> -->
            <a href="#"><img src="../images/U_profile/<?php echo $_SESSION['user_profile']; ?>" class="img-circle" height="35" width="40" alt="user avatar"></a>
             <ul>   
                        <li><br>
                          <img src="../images/U_profile/<?php echo $_SESSION['user_profile']; ?>" class="img-circle" height="30" width="30" alt="user avatar"> &nbsp;&nbsp; <?php echo $_SESSION['user_name']; ?></li> <br>
                        <li><a href="profile.php">Manage Profile</a></li>
                        <li><a href="profile.php">Manage Order</a></li>
                        <li><a href="Logout.php">Logout</a></li>
             </ul>  
          </li>
        <?php  } else{ ?>
          <li>
            <p style=" margin: 55px;">Welcome User</p>
          <!-- <a href="#"><span>
          <img src="../images/U_profile/user.png" height="30" width="30" class="img-circle" alt="user avatar"></span></a> --></li>
           <?php } ?>
 
          </ul>
        </div>  
      </div>
    </div>
  </div>
</div>
