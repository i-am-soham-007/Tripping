<?php 
include 'common/header.php'; 
include_once 'lib/dao.php';
include_once 'lib/model.php';
$d=new dao();
$m= new model();

 extract($_POST);
                  if(isset($updateagency)){      
                    $q=$d->select("tbl_agency","agency_id='$agency_id'");
                  $row=mysqli_fetch_array($q);
                  extract($row);
                  }   
                ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Add Agency</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add/Edit Agency</li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="controller/agencyController.php" method="post" enctype="multipart/form-data">
                <h4 class="form-header text-uppercase">
                  <i class=" fa-stack-exchange-circle-o"></i>
                   Add New  Agency
                </h4>
                 <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Package Type</label>
                  <div class="col-sm-10">
                      <select class="form-control" id="input-1" name="admin_id">
                        <option>---SELECT---</option>
                      <?php 
                      $q=$d->select("tbl_admin","","");
                       while ($row=mysqli_fetch_array($q)) {
                        extract($row);
                        
                     ?>
                      <option value="<?php echo $admin_id;?>"><?php echo $admin_name;?></option>
                      <?php }?>
                       </select>

                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">aAgency Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="agency_name" value="<?php if(isset($addagency)){$agency_name='';}else{echo $agency_name;} ?>" required>
                  </div>
                </div>

               <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">agency address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="agency_address"><?php if(isset($addagency)){$agency_address='';}else{echo $agency_address;} ?></textarea>
                    
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
                  <label for="input-4" class="col-sm-2 col-form-label">agency Logo</label>
                  <div class="col-sm-10">
                    <input type="file"  id="input-4"  name="aegncy_logo" required>
                  </div>
                </div>

                <?php if(isset($updatepackage))
{
  ?>
  <input type="Hidden" name="agency_id" value="<?php echo $agency_id;?>">
  <input type="submit" name="updateagency" value="update">
<?php }else{ ?>
                                
                <div class="form-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <button name="addagency" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
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