x<?php include 'common/header.php'; ?>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Admin Profile</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
         </ol>
	   </div>
     <div class="col-sm-3">
       
     </div>
     </div>
    <!-- End Breadcrumb-->

      <div class="row">
        <div class="col-lg-4">
           <div class="card profile-card-2">
            <div class="card-img-block">
                <img class="img-fluid" src="assets/images/gallery/ss.jpg" alt="Card image cap">
                <button type="submit" class="btn btn-primary"></button>
            </div>
            <div class="card-body pt-5">
                <img src="../images/V_profile/<?php echo $_SESSION['admin_profile']; ?>" alt="profile-image" class="profile" id="blah">
                <h5 class="card-title"><?php echo $_SESSION['admin_name']; ?></h5>
                <div class="icon-block">
                  
                </div>
            </div>

            <div class="card-body border-top">
                 <div class="media align-items-center">
                   <div>
                       <i class="fa fa-mobile"></i>
                   </div>
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p class="text-muted"><?php echo $_SESSION['admin_mobile'] ?> </p>
                        </div>                   
                    </div>
                  </div>
                  <hr>
                  
                  
                  <div class="media align-items-center">
                   <div><i class="fa fa-envelope"></i></div>
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p class="text-muted"><?php echo $_SESSION['admin_email'] ?> </p>
                        
                        </div>                   
                    </div>
                  </div>
                  
              </div>
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Change Password</span></a>
                </li>
                
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit Profile</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">Change Your Password</h5>
                    <form action="controller/profileController.php" method="post">
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Old Password</label>
                            <div class="col-lg-9">
                                <input required="" class="form-control"  name="oldPassword" type="password" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">New Password</label>
                            <div class="col-lg-9">
                                <input required="" class="form-control" name="password" type="password" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <input required="" class="form-control" name="cPassword" type="password" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" >
                                <input name="changePassword" type="submit"  value="Change Password" class="btn btn-primary">
                            </div>
                        </div>
                    </form> 
                    <!--/row-->
                </div>
                
                <div class="tab-pane" id="edit">
                    <form action="controller/profileController.php" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="admin_name" type="text" value="<?php echo $_SESSION['admin_name'] ?>">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Mobile</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="admin_mobile" value="<?php echo $_SESSION['admin_mobile'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                            <div class="col-lg-9">
                                <input name="admin_profile" id="imgInp" class="form-control" type="file">

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input name="updateProfile" type="submit" class="btn btn-primary" value="Uodate Profile">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>

    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
   <?php include 'common/footer.php'; ?>
  