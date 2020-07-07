<?php session_start();
if(isset($_SESSION['role_id'])) {
	header("location:index.php?msg=Login Success.");
}

?>
<?php
include_once'lib/dao.php';
include_once'lib/model.php'; 
$d = new dao();
$m = new model();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>
	<title>Admin/Vendor Login</title>
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

<body class="bg-dark">
	<!-- Start wrapper-->
	<div id="wrapper">
		<div class="card card-authentication1 mx-auto my-5">
			<div class="card-body">
				<div class="card-content p-2">
					<div class="text-center">
						<img src="img/logo.png" height="100" width="230" alt="logo icon">
					</div>
					<form action="controller/loginController.php" method="post">

						<div class="form-group">
							<label for="exampleInputPassword" class="">ROLE</label>
							<div class="position-relative has-icon-right">
								<select required="" class="form-control input-shadow" name="role_id">
									<div class="form-control-position">
										<?php 
										$i=1;
										$q=$d->select("role_type","","");
										while($data=mysqli_fetch_array($q))
										{
											?><option value="<?php echo $data['role_id'];?>"><?php echo $data['role_name'];?>
										</option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="exampleInputMobile" class="">Mobile</label>
						<div class="position-relative has-icon-right">
							<input required="" pattern="[0-9]{10}" type="text" maxlength="10" minlength="10" id="exampleInputMobile" class="form-control input-shadow" placeholder="Enter Mobile" name="admin_mobile"  oninvalid="this.setCustomValidity('Enter Valid Input !! Only NumberInput Is Valid')">
							<div class="form-control-position">
								<i class="icon-phone"></i>
							</div>
						</div>
					</div>

					<div class="form-group" id="show_hide_password">
						<label for="exampleInputPassword" class="">Password</label>
						<div class="position-relative has-icon-right">
							<input required="" type="password" id="admin_password" class="form-control input-shadow" placeholder="Enter Password" name="admin_password" data-toggle="admin_password">
							<div class="form-control-position">
								<a href=""><i class="fa fa-eye-slash" style="color:#636363;" 
									aria-hidden="true"></i></a>
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
						<button type="submit" name="loginAdmin" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Sign In</button>
						<div class="form-group col-6 text-right">
							<br>
								<a href="register.php">Create Account ?</a>
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

	<script type="text/javascript">
		$("#admin_password").admin_password('toggle');
	</script>

</body>
</html>
