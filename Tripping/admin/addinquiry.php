<?php 
include 'common/header.php'; 
include_once 'lib/dao.php';
include_once 'lib/model.php';
$d=new dao();
$m= new model();

$inquiry_name="";
$inquiry_email="";
$inquiry_mobile="";
$inquiry_subject="";
$inquiry_message="";

extract($_POST);
if(isset($updateinquiry)){      
  $q=$d->select("tbl_inquiry","inquiry_id='$inquiry_id'");
  $row=mysqli_fetch_array($q);
  extract($row);
}   
?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h4 class="page-title">Add/Edit inquiry</h4>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add/Edit inquiry</li>
        </ol>
      </div>

    </div>
    <!-- End Breadcrumb-->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form id="personal-info" action="controller/inquiryController.php" method="post">
              <h4 class="form-header text-uppercase">
                <i class="fa fa-info-circle"></i>
                Add/Edit Inquiry
              </h4>
              <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Inquiry Name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="input-1"   name="inquiry_name" value="<?php if(isset($addinquiry)){$inquiry_name='';}else{echo $inquiry_name;} ?>" required>
                </div>
                <label for="input-1" class="col-sm-2 col-form-label">inquiry Email</label>
                <div class="col-sm-4">
                 <input type="email" class="form-control" id="input-1"   name="inquiry_email" value="<?php if(isset($addinquiry)){$inquiry_email='';}else{echo $inquiry_email;} ?>" required>
               </div> 
             </div>

             <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Moible</label>
              <div class="col-sm-4">
                <input required type="number" maxlength="10" minlength="10" class="form-control" id="input-1" name="inquiry_mobile" value="<?php if(isset($addinquiry)){$inquiry_mobile='';}else{echo $inquiry_mobile;} ?>">
              </div>
              <label for="input-1" class="col-sm-2 col-form-label">inquiry Subject</label>
              <div class="col-sm-4">
                 <input type="text" required class="form-control" id="input-1" name="inquiry_subject" value="<?php if(isset($addinquiry)){$inquiry_subject='';}else{echo $inquiry_subject;} ?>">
               
              </div> 
            </div> <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label">Inquiry Message</label>
              <div class="col-sm-4">
                 <textarea class="form-control" name="inquiry_message"><?php if(isset($addinquiry)){$inquiry_message='';}else{echo $inquiry_message;} ?></textarea>
              </div>
              </div>
            <div class="form-group row">
              <label for="input-1" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="input-1"   name="inquiry_created_date">
              </div>
            </div>
         
            <?php if(isset($updateinquiry))
            {
              ?>
                <div class="form-footer text-center">
              <input type="Hidden" name="inquiry_id" value="<?php echo $inquiry_id;?>">
              <input type="submit" class="btn btn-danger" name="updateinquiry" value="update">
           </div>
        </div>
      </div>
      
            <?php }else{ ?>

              <div class="form-footer text-center">
                <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                <button name="addinquiry" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
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