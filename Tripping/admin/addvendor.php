<?php 
include 'common/header.php'; 
include_once 'lib/dao.php';
include_once 'lib/model.php';

$d=new dao();
$m= new model();

$vendor_firstname="";
$vendor_lastname="";
$vendor_email="";
$vendor_password="";
$vendor_mobile="";
$vendor_profile="";

 extract($_POST);
                  if(isset($updatevendor)){      
                    $q=$d->select("tbl_vendor","vendor_id='$vendor_id'");
                  $row=mysqli_fetch_array($q);
                  extract($row);
                  }   
                ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Vendors</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New Vendor</li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="controller/VendorController.php" method="post" enctype="multipart/form-data">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Add New Vendor
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> firstName</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="vendor_firstname" value="<?php if(isset($addvendor)){$vendor_firstname='';$vendor_lastname='';$vendor_address='';$vendor_email='';$vendor_password='';}else{echo $vendor_firstname;} ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> LastName</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="vendor_lastname"
                     value="<?php if(isset($addvendor)){$vendor_firstname='';$vendor_lastname='';$vendor_address='';$vendor_email='';$vendor_password='';}else{echo $vendor_lastname;} ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-3" class="col-sm-2 col-form-label">E-mail</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="input-3" name="vendor_email" value="<?php if(isset($addvendor)){$vendor_firstname='';$vendor_lastname='';$vendor_address='';$vendor_email='';$vendor_password='';}else{echo $vendor_email;} ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="Password" class="form-control" id="input-4"  name="vendor_password" value="<?php if(isset($addvendor)){$vendor_firstname='';$vendor_lastname='';$vendor_address='';$vendor_email='';$vendor_password='';}else{echo $vendor_password;} ?>" required>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">mobile</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="input-4"  name="vendor_mobile" value="<?php if(isset($addvendor)){$vendor_firstname='';$vendor_lastname='';$vendor_address='';$vendor_email='';$vendor_password='';}else{echo $vendor_mobile;}?>" required>
                  </div>
                </div>

               <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="input-4"  name="vendor_created_date" value="<?php if(isset($addvendor)){$vendor_firstname='';$vendor_lastname='';$vendor_address='';$vendor_email='';$vendor_password='';}else{echo $vendor_created_date;}?>" required>
                  </div>
                </div>
               
                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Profile</label>
                  <div class="col-sm-10">
                    <input type="file" id="imgInp" class="form-control" name="vendor_profile">
                  </div>
                </div>
<?php if(isset($updatevendor))
{
  ?>
  <input type="Hidden" name="vendor_id" value="<?php echo $vendor_id;?>">
  <input type="submit" name="updatevendor" value="update">
<?php }else{ ?>
                <div class="form-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <button name="addvendor" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
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