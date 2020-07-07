<?php include 'common/header.php'; 
include_once 'lib/dao.php';
include_once 'lib/model.php';
$d=new dao();
$m= new model();
$user_name="";
$user_address="";
$user_email="";
$user_password="";
$user_mobile="";
$result="";
$user_profile="";

 extract($_POST);
                  if(isset($updateUser)){      
                    $q=$d->select("tbl_user","user_id='$user_id'");
                  $row=mysqli_fetch_array($q);
                  extract($row);
                  }   
                ?>
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
                   Add New User
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="user_name" value="<?php if(isset($addUser)){$user_name='';}else{echo $user_name;} ?>" required>
                  </div>
                </div>

               <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> Address</label>
                  <div class="col-sm-10">
                    <textarea name="user_address" class="form-control" id="input-3">
                      <?php if(isset($addUser)){$user_address='';}else{
                        echo $user_address; } ?>
                      </textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-3" class="col-sm-2 col-form-label">E-mail</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="input-3" name="user_email" value="<?php if(isset($addUser)){$user_email='';}else{echo $user_email;} ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="Password" class="form-control" id="input-4"  name="user_password" value="<?php if(isset($addUser)){$user_password='';}else{echo $user_password;} ?>" required>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">mobile</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="input-4"  maxlength="10" minlength="10" name="user_mobile" value="<?php if(isset($addUser)){$user_mobile='';}else{echo $user_mobile;} ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Profile</label>
                  <div class="col-sm-10">
                    <input type="file" id="imgInp" class="form-control" name="user_profile">
                  </div>
                </div>

<?php if(isset($updateUser))
{
  ?>
  <input type="Hidden" name="user_id" value="<?php echo $user_id;?>">
  <input type="submit" name="updateUser" value="update">
<?php }else{ ?>
                <div class="form-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <button name="addUser" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
    </div>
    <!-- End container-fluid-->
    <?php }?>
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->

<?php include 'common/footer.php'; ?>