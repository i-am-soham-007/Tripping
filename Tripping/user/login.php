<?php session_start();
if(isset($_SESSION['user_id'])) {
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
  <title>User Login</title>
  <!--favicon-->
  <link rel="icon" href="img/logo.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>
<div class="video-background-wrapper">
  <video preload="auto" autoplay loop="autoplay" class="video-background">
    <source type="video/mp4" src="video/mecovache.mp4"  />
    <!--<source type="video/ogv" src="video/video.ogv" />-->
    <!--<source type="video/webm" src="video/video.webm" />-->
  </video>
</div>
<body class="bg-dark">
 <!-- Start wrapper-->
 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-5">

		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="img/logo3.png" height="100" width="150" alt="logo icon">
		 	</div>
		    <form action="controller/loginController.php" method="post">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="">Mobile</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="number" id="exampleInputUsername" maxlength="10" minlength="10" class="form-control input-shadow" placeholder="Enter Username" name="user_mobile">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group" id="show_hide_password">
			  <label for="exampleInputPassword" class="">Password</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="password" id="user_password" class="form-control input-shadow" placeholder="Enter Password" name="user_password" data-toggle="user_password">
				 <div class="form-control-position">
					  <a href=""><i class="fa fa-eye-slash" style="color:black;" aria-hidden="true"></i></a>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-primary">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="forgot.php">Reset Password</a>
			 </div>
			</div>
			 <button type="submit" name="loginuser" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Sign In</button>
			  
			 
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
  
  <script type="text/javascript">
	$("#user_password").user_password('toggle');
</script>

</body>
</html>
