<?php include 'common/header.php'; ?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h4 class="page-title">Hotels</h4>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Hotel</li>
        </ol>
      </div>
      <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a href="addhotel.php" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Add New</a>
        
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb-->
<!-- 
                        <form action="controller/hotelController.php" method="post">
                            <input type="hidden" name="hotel_id" value="<?php echo $hotel_id; ?>">
                            <input type="submit" class="btn btn-sm btn-danger" name="deletehotel" value="Delete">
                        </form>
                        <form action="addhotel.php" method="post">
                            <input type="hidden" name="hotel_id" value="<?php echo $hotel_id; ?>">
                            <input type="submit" class="btn btn-sm btn-primary" name="updatehotel" value="Edit">
                        </form>
                      -->

                      <div class="row">
                        <?php 
                        $q=$d->select("tbl_hotel","","");
                        $i=0;
                        while ($row=mysqli_fetch_array($q)) {
                          extract($row);
                          $i++;
                          ?>

                          <div class="col-lg-4">
                           <div class="card">
                            <img src="../images/Hotels/<?php echo $hotel_image;?>" class="card-img-top" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-dark"><?php echo $hotel_name; ?></h5>
                              <p class="card-text"><?php echo $hotel_description; ?></p>
                            </div>
                            <ul class="list-group list-group-flush list shadow-none">
                              <li class="list-group-item d-flex justify-content-between align-items-center">Cras justo odio <span class="badge badge-dark badge-pill">14</span></li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac facilisis in <span class="badge badge-success badge-pill">2</span></li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">Vestibulum at eros <span class="badge badge-danger badge-pill">1</span></li>
                            </ul>
                            <div class="card-body">
                              <a href="javascript:void();" class="card-link">Card link</a>
                              <a href="javascript:void();" class="card-link">Another link</a>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    </div><!--END Row -->
                  </div>
                  <!-- End container-fluid-->

                </div><!--End content-wrapper-->
                <!--Start Back To Top Button-->
                <?php include 'common/footer.php'; ?>