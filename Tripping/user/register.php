

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>User Registration</title>
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
		    <form action="controller/regcontroller.php" enctype="multipart/form-data" method="POST">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="">FirstName</label>
			   <div class="position-relative has-icon-right">
			   	<input required="" type="text" id="exampleInputfirstname"  class="form-control input-shadow" placeholder="Enter Firstname"  name="user_firstname">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputLastname" class="">Lastname</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="text" id="exampleInputLastname" class="form-control input-shadow" placeholder="Enter lastname" name="user_lastname">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
				<div class="form-group">
			  <label for="exampleInputaddress" class="">Address</label>
			   <div class="position-relative has-icon-right"><textarea name="user_address" required="" id="exampleInputaddress" class="form-control input-shadow" placeholder="Enter Address"></textarea>
				  <div class="form-control-position">
					  <i class=""></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputEmail" class="">Email</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="email" id="exampleInputEmail" class="form-control input-shadow" placeholder="Enter Email" name="user_email">
				  <div class="form-control-position">
					  <i class="ficon-envelope-o"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="">Password</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password" name="user_password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputMobile" class="">Mobile</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="tele" id="exampleInputMobile" class="form-control input-shadow" placeholder="Enter number" name="user_mobile">
				  <div class="form-control-position">
					  <i class="icon-phone"></i>
				  </div>
			   </div>
			  </div>
			   <div class="form-group">
			  <label for="exampleInputGender" class="">Gender</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="radio" id="exampleInputGender" class="form-control input-shadow"  name="user_gender" value="Male">male
				  <input required="" type="radio" id="exampleInputGender" class="form-control input-shadow"  name="user_gender" value="FeMale">female
				  <div class="form-control-position">
					  <i class=""></i>
				  </div>
			   </div>
			  </div>
			   <div class="form-group">
			  <label for="exampleInputProfile" class="">Profile</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="file" id="exampleInputProfile" class="form-control input-shadow"  name="user_profile" >
				  <div class="form-control-position">
					  <i class=""></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputdate" class=""></label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="hidden" id="exampleInputMobile" class="form-control input-shadow" placeholder="" name="user_created_date">
				  <div class="form-control-position">
					  <i class=""></i>
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
			 <button type="submit" name="register" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Sign In</button>
			  
			 
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
  
</body>

</html>
