<?php 
include 'common/header.php'; 
include_once 'lib/dao.php';
include_once 'lib/model.php';
$d=new dao();
$m= new model();
$package_name="";
$package_description="";
$package_gallery="";

 extract($_POST);
                  if(isset($updatepackage)){      
                    $q=$d->select("tbl_package","package_id='$package_id'");
                  $row=mysqli_fetch_array($q);
                  extract($row);
                  }   
                ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Add Package</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Package</li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="controller/packageController.php" method="post" enctype="multipart/form-data">
                <h4 class="form-header text-uppercase">
                  <i class=" fa-stack-exchange-circle-o"></i>
                   Add New Package
                </h4>
                 <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Package Type</label>
                  <div class="col-sm-10">
                      <select class="form-control" id="input-1" name="package_type_id">
                        <option>---SELECT---</option>
                      <?php 
                      $q=$d->select("tbl_package_type","","");
                       while ($row=mysqli_fetch_array($q)) {
                        extract($row);
                        
                     ?>
                      <option value="<?php echo $package_type_id;?>"><?php echo $package_type_name;?></option>
                      <?php }?>
                       </select>

                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Package Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="package_name" value="<?php if(isset($addpackage)){$package_name='';$package_description='';}else{echo $package_name;} ?>" required>
                  </div>
                </div>

               <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Package Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="package_description"><?php if(isset($addpackage)){$package_name='';$package_description='';}else{echo $package_description;} ?></textarea>
                    
                  </div> 
                </div>

                 <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Select Country</label>
                  <div class="col-sm-4">
                      <select class="form-control" id="input-1" name="country_id">
                        <option>---SELECT---</option>
                      <?php 
                      $q=$d->select("tbl_country","","");
                       while ($row=mysqli_fetch_array($q)) {
                        extract($row); 
                     ?>
                      <option value="<?php echo $country_id;?>"><?php echo $country_name;?></option>
                      <?php }?>
                       </select>
                     </div> <label for="input-1" class="col-sm-2 col-form-label">Select State</label>
                 
                     <div class="col-sm-4">
                      <select class="form-control" id="input-1" name="country_id">
                        <option>---SELECT---</option>
                      <?php 
                      $q=$d->select("tbl_state","");
                      echo $country_id;
                       while ($row=mysqli_fetch_array($q)) {
                        extract($row); 
                     ?>
                      <option value="<?php echo $state_id;?>"><?php echo $state_name;?></option>
                      <?php }?>
                       </select>
                     </div>
                </div>
                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Package Images</label>
                  <div class="col-sm-10">
                    <input type="file"  id="input-4"  name="package_gallery" required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="input-1"   name="package_created_date">
                  </div>
                </div>
                <?php if(isset($updatepackage))
{
  ?>
  <input type="Hidden" name="package_id" value="<?php echo $package_id;?>">
  <input type="submit" name="updatepackage" value="update">
<?php }else{ ?>
                                
                <div class="form-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <button name="addpackage" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
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