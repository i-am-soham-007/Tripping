<?php session_start();
if(isset($_SESSION['vendor_id'])) {
  header("location:index.php?msg=Login Success.");
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Vendor Login</title>
  <!--favicon-->
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-dark">
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="img/logo5.png" height="100" width="372" alt="logo icon">
		 	</div>
		    <form action="controller/loginController.php" method="post">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="">Mobile</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="text" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Username" name="vendor_mobile">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group" id="show_hide_password">
			  <label for="exampleInputPassword" class="">Password</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="password" id="vendor_password" class="form-control input-shadow" placeholder="Enter Password" name="vendor_password" data-toggle="vendor_password">
				 <div class="form-control-position">
					  <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-2">
			   <div class="icheck-material-primary">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-10 text-right">
			  <a href="forgot.php">Reset Password</a>
			</div>
			
			 <button type="submit" name="loginVendor" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Sign In</button>
			 <div class="form-group col-12 text-right">
				<a href="register.php">Create An Account </a>
				</div>
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-show-password.min.js"></script>
  
  

</body>
</html>
