<?php include 'common/header.php'; 
include_once 'lib/dao.php';
include_once 'lib/model.php';
$d=new dao();
$m= new model();
$package_type_name="";
$package_type_description="";

 extract($_POST);
                  if(isset($updatepackagetype)){      
                    $q=$d->select("tbl_package_type","package_type_id='$package_type_id'");
                  $row=mysqli_fetch_array($q);
                  extract($row);
                  }   
                ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Add/Edit Package Type</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add/Edit PackageType</li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="controller/packagetypeController.php" method="post" enctype="multipart/form-data">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-list-ul"></i>
                   Add/Edit Package Type
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Package Type Name</label>
                  <div class="col-sm-4">
                    <input required type="text" class="form-control" id="input-1"   name="package_type_name" value="<?php if(isset($addpackagetype)){$package_type_name='';$package_type_description='';}else{echo $package_type_name;} ?>" required>
                  </div>
                </div>

               <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Package Description</label>
                  <div class="col-sm-4">
                    <textarea name="package_type_description" class="form-control"><?php if(isset($addpackagetype)){$package_type_name='';$package_type_description='';}else{echo $package_type_description;} ?></textarea>
                  </div> 
                </div>

                <?php if(isset($updatepackagetype))
{
  ?>
   <div class="form-footer text-center">
  <input type="Hidden" name="package_type_id" value="<?php echo $package_type_id;?>">
  <input type="submit"  class="btn btn-danger" name="updatepackagetype" value="update">
</div>
</div>
          </div>
        </div>
      </div><!--End Row-->
<?php }else{ ?>
                                
                <div class="form-footer text-center">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <button name="addpackagetype" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
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