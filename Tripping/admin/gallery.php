<?php include 'common/header.php'; ?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h4 class="page-title">Galleries</h4>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
      </div>
      <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a href="addGallery.php" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Add New</a>
        
      </div>
    </div>
  </div>
  <!-- End Breadcrumb-->
  
<!-- 
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Gallery</div>
            <div class="card-body">
              <div class="container">
              <div class="row text-center text-lg-left">


   <?php 
            $q=$d->select("tbl_gallery","","");
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
                ?> -->
                
             <!--  <div class="col-lg-3 col-md-4 col-xs-6">
                    <?php  echo $gallery_name; ?>

                    <img class="img-fluid img-thumbnail" height="400" width="150" src="../images/Gallery/<?php echo $gallery_photo; ?>" alt="">
                 
                      <form action="controller/uploadController.php" method="post">
                      <input type="hidden" name="gallery_id" value="<?php echo $gallery_id; ?>">
                      <button type="submit" class="btn btn-sm btn-danger" name="delete">
                       <i class="fa fa-trash-o"></i></button>
                        </form>
                        <form action="updategallery.php" method="post">
                            <input type="hidden" name="gallery_id" value="<?php echo $gallery_id; ?>">
                            <button type="submit" class="btn btn-sm btn-success" name="edit">
                              <i class="fa fa-pencil-square-o"></i></button>
                            </form>
                          </div>
                        <?php } ?>   
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --><!-- End Row-->
            

            <div class="row">

              <div class="col-12">
                <div class="card">
                  <div class="card-header text-uppercase">Light Box With Image Caption</div>
                  <div class="card-body">
                   
                    <div class="row">
                     <?php 
                     $q=$d->select("tbl_gallery","","");
                     while ($row=mysqli_fetch_array($q)) {
                      extract($row);
                      ?> 
                      <div class="col-md-6 col-lg-3 col-xl-3">
                        <a href="../images/Gallery/<?php echo $gallery_photo;?>" data-fancybox="images" data-caption="This image has a caption">
                          <img src="../images/Gallery/<?php echo $gallery_photo;?>" alt="lightbox" class="lightbox-thumb img-thumbnail">
                        </a>
                        </div><?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!--End Row-->
            </div><!--End content-wrapper-->
            <!--Start Back To Top Button-->
            <?php include 'common/footer.php'; ?>