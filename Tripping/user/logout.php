<?php 
session_start();
session_destroy();?>
<!-- notifications css -->
 <!--  <link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css"/>
 -->
 <!--Sweet Alerts -->
  <!-- <script src="assets/plugins/alerts-boxes/js/sweetalert.min.js"></script>
  <script src="assets/plugins/alerts-boxes/js/sweet-alert-script.js"></script>
   <script src="assets/plugins/notifications/js/lobibox.min.js"></script>
 -->
 <?php /*include 'alert.php'; 
echo $_SESSION['errorMsg'] = "Logout successfully";*/
header("location:login2.php?msg=Logout successfully..");

	
 ?>