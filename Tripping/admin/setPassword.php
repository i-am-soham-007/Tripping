<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Set New Password</title>
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
		 		<img src="img/logo.jpg" height="100" width="372" alt="logo icon">
		 	</div>
		 	<?php 
		 	include_once 'lib/dao.php';
			include_once 'lib/model.php';

			$d = new dao();
			$m = new model();
			extract($_GET);

			$q=$d->select("user_forgot_password","user_forgot_token='$token'");
			$data=mysqli_fetch_array($q);
			if($data==TRUE){

		 	 ?>
		    <form action="controller/loginController.php" method="post">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="exampleInputUsername" class="form-control input-shadow" name="password" placeholder="Enter password">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputUsername" class="">Confirm Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" name="cPassword" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter password">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  
			<div class="form-row">
				<input type="hidden" name="user_email" value="<?php echo $data['user_forgot_email'] ?>">
			 
			 <div class="form-group col-6 text-right">
			  <a href="login.php">Login ?</a>
			 </div>
			</div>
			 <button type="submit" name="setNamePassword" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Reset Password</button>
			  
			 
			 </form>
			<?php } else {
				echo "Invalid Url Or Token Is Expire";
			} ?>
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
  
</body>

</html>
