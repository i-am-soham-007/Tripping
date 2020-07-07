<?php 
//include 'common/header.php'; 
include_once 'lib/dao.php';
include_once 'lib/model.php';
$d=new dao();
$m= new model();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Vendor Registration</title>
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
			   <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">roleType</label>
                  <div class="col-sm-10">
                      <select class="form-control" id="input-1" name="role_id" required>
                        <option>---SELECT---</option>
                      <?php 
                     
                      $q=$d->select("role_type","","");
                       while ($row=mysqli_fetch_array($q)) {
                        extract($row);
                        
                     ?>
                      <option value="<?php echo $role_id;?>"><?php echo $role_name;?></option>
                      <?php }?>
                       </select>

                  </div>
                </div>

			  <div class="form-group">
			  <label for="exampleInputEmail" class="">Email</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="email" id="exampleInputEmail" class="form-control input-shadow" placeholder="Enter Email" name="admin_email">
				  <div class="form-control-position">
					  <i class="icon-mail"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="">Password</label>
			   <div class="position-relative has-icon-right">
				  <input required="" type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password" name="admin_password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group ">
			  <label for="input-4" class="">Mobile</label>
			   <div class="position-relative has-icon-right">
				  <input type="number" id="input-4" class="form-control input-shadow" placeholder="Enter number" name="admin_mobile" maxlength="10" minlentgh="10" required>
				  <div class="form-control-position">
					  <i class="icon-phone"></i>
				  </div>
			   </div>
			  </div>
			  
			   <div class="form-group">
			  <label for="exampleInputProfile" class="">Profile</label>
			   <div class="position-relative has-icon-right">
			   	 <input required="" type="hidden" id="exampleInputdate" class="form-control input-shadow" placeholder="" name="vendor_created_date">
				  <input required="" type="file" id="exampleInputProfile" class="form-control input-shadow"  name="admin_profile" >
				  <div class="form-control-position">
					  <i class="fa fa-image"></i>
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
