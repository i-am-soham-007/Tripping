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
                               <h2>User Registration</h2>
                                </div>
<div class="tv-contact-form" style=" padding-left: 400px; padding-right: 0px; color: goldenrod;">
 <form name="sentMessage" id="contactForm" method="POST" action="controller/regcontroller.php" enctype="multipart/form-data">
                                
 <div class="row">
 <div class="tv-contact-menu">
 <div class="col-md-6 col-sm-6 col-xs-12"> 
 <div class="form-group">
 <label for="exampleInputUsername" class="">Name:</label>
 <input type="text" id="name" class="form-control placeholder-fix" placeholder="Name" required="" 
 aria-invalid="false" name="user_name">
 </div>
                                                            
<div class="form-group">
<label for="exampleInputUsername" class="">Address:</label>
<textarea name="user_address" id="message" class="form-control placeholder-fix" rows="5" placeholder="Address"
 required="" aria-invalid="false"></textarea>
<p class="help-block text-danger"></p>
</div>

<div class="form-group">
<label for="exampleInputMobile" class="">Mobile:</label>
<input type="text" id="contact" maxlength="10" minlength="10" pattern="[0-9]{10}" 
class="form-control placeholder-fix" placeholder="Mobile Number" name="user_mobile" required="">
</div>

<div class="form-group">
<label for="exampleInputEmail" class="">Email:</label>
<input type="email" id="email" class="form-control placeholder-fix" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Email ID" name="user_email"
 required="">
</div>

<div class="form-group">
<label for="exampleInputpassword" class="">password</label>
<input type="password" id="password" class="form-control placeholder-fix" placeholder="user password"
 name="user_password" required="">
</div>

<div class="form-group">
<label for="exampleInputpassword" class="">profile</label>
<input type="file" id="profile" class="form-control placeholder-fix" placeholder="profile"
 name="user_profile" required="">
</div>

<div class="form-group text-center">
<button type="submit"  name="register" class="btn btn-danger">register</button>
Already Register? CLICK TO <a href="login2.php">Login</a>
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
 <?php include 'common/footer.php'; ?>

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
</body>
</html>
