<?php include 'common/header.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Gallery</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New Gallery</li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="controller/uploadController.php" method="post" enctype="multipart/form-data">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-gallery-circle-o"></i>
                   Add New Gallery
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> Gallery name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1"   name="gallery_name" required>
                  </div>
                </div>
              
                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Choose file</label>
                  <div class="col-sm-10">
                     <input type="file" class="form-control" id="input-4"  name="gallery_photo" required></div>
                </div>
                
                <div class="form-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <button name="upload" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> UPLOAD</button>
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