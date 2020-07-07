    <?php 
    
if(isset($_SESSION['user_id'])) {
  header("location:index.php?msg=Login Success.");
}
 ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tripping</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="fonts/website-font/stylesheet.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/counterup.min.js" type="text/javascript"></script>
        <script src="js/waypoints.min.js" type="text/javascript"></script>
        <script src="js/custom.js"></script>
    </head>
    <body>
        <?php include 'common/header.php'; ?>
        

 <div class="tv-paddingT100 container-fluid">
     <div class="row">
        <div class="tv-contact-banner">
             <div class="container">
                 <div class="row">
                     <div class="col-xs-12">
                        <div class="tv-online-restu">
                            <div class="tv-block-heading">
                               <h2>User Login</h2>
                                </div>
<div class="tv-contact-form" style=" padding-left: 400px; padding-right: 0px; color: goldenrod;">
 <form name="sentMessage" id="contactForm" method="POST" action="controller/loginController.php">

<div class="form-group">
<label for="exampleInputMobile" class="">Mobile:</label>
<input type="text" style="width: 300px;" id="contact" maxlength="10" minlength="10" pattern="[0-9]{10}" 
class="form-control placeholder-fix" placeholder="Mobile Number" name="user_mobile" required="">
</div>

<div class="form-group">
<label for="exampleInputpassword" class="">password</label>
<input type="password" id="password" style="width: 300px;" class="form-control placeholder-fix" placeholder="user password"
 name="user_password" required="">
 </div>
<a href="forgot.php">Reset Password</a>
<div class="form-group text-center">
<button type="submit" style="width: 130px; margin-right: 270px;" name="loginuser" class="btn btn-danger">Login
</button>
<br>
<p style="width: 130px; margin-left: -16px;"><a href="registration.php">Create Account ? Click Here</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>    
 </section>
 <?php include 'common/footer2.php'; ?>

 <a id="back-to-top" class="scrollTop tv-back-to-top" href="javascript:void(0);" style="display: none;">
    <i class="fa fa-caret-up" aria-hidden="true"></i>
</a>
<script>
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="assets/js/bootstrap-show-password.min.js"></script>
  
  <script type="text/javascript">
    $("#user_password").user_password('toggle');
</script>

</body>
</html>
