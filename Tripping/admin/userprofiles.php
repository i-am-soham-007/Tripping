<?php include 'common/header.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Users Profile</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profiles</li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
          
    <div class="row">
       <?php 
            $q=$d->select("tbl_user","","");
            $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
                $i++;
             ?>

        <div class="col-12 col-lg-6 col-xl-4">
          <div class="card profile-card-1">
             <img src="assets/images/gallery/7.jpg" class="background" alt="profile-image"/>
              
             <img src="../images/U_profile/<?php echo $user_profile; ?>" alt="profile-image" class="profile"/>
             <div class="card-content">
                <h2 class="text-white"><?php echo $user_name;?><small>Designer</small></h2>
                  <div class="icon-block">
                      <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
              <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
              <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                  </div>
              </div>
          </div>
        </div>
<?php } ?>
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
	<?php include 'common/footer.php'; ?>