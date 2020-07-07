
<?php include 'common/header.php'; ?>
<?php $user_firstname="";?>
<?php extract($_POST);?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Users</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New User</li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="controller/userController.php" method="post" enctype="multipart/form-data">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Update User
                   <?php echo $user_id; ?>
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> firstName</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="user_firstname" value="<?php echo $user_firstname;?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> LastName</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="user_lastname" value="<?php echo $user_lastname; ?>" required>
                  </div>
                </div>
               <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> Address</label>
                  <div class="col-sm-10">
                    <textarea name="user_address" value="<?php echo $user_address; ?>"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-3" class="col-sm-2 col-form-label">E-mail</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="input-3" name="user_email" value="<?php echo $user_email; ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="Password" class="form-control" id="input-4"  name="user_password" value="<?php  echo $user_password; ?>" required>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">mobile</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="input-4"  name="user_mobile" value="<?php echo $user_mobile;  ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">gender</label>
                  <div class="col-sm-10">
                    <input type="radio" class="form-control" id="input-4"  name="user_gender" value="male" required>male
                    <input type="radio" class="form-control" id="input-4"  name="user_gender" value="female" required>female
                  </div>
                </div>

                
                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Profile</label>
                  <div class="col-sm-10">
                    <input type="file" id="imgInp" class="form-control" name="user_profile">
                  </div>
                </div>
                
                <div class="form-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <button name="updateUser" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

     
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->

<?php include 'common/footer.php'; ?>