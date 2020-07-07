<?php include 'common/header.php';  ?>
<body class="bg-dark">
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="img/logo.jpg" height="100" width="372" alt="logo icon">
		 	</div>
		    <form method="post" action="controller/loginController.php">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="">Email</label>
			   <div class="position-relative has-icon-right">
				  <input type="email" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Email" name="user_email">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  
			<div class="form-row">
			 
			 <div class="form-group col-6 text-right">
			  <a href="login.php">Login ?</a>
			 </div>
			</div>
			 <button type="submit" name="forgotReq" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Reset Password</button>
			  
			 
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
