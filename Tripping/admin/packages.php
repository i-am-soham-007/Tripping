<?php include 'common/header.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Packages</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Packages</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a class="btn btn-outline-primary waves-effect waves-light" href="addpackage.php">
        <i class="fa fa-plus mr-1"></i> Add New</a>
        
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

     <div class="row">
 <?php
            $q=$d->select("tbl_package","","");
            $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
             $i++;
             ?> 
    <div class="col-lg-4">
    <div class="pricing-table pricing-table-color">
     <div class="card gradient-meridian">
      <div class="card-body text-center">
     <div class="price-title text-white"><?php echo $package_name; ?></div>
       <h2 class="price text-white"><img src="../images/Packages/<?php echo $package_gallery;?>" height="60" width="80" /></h2>
       <ul class="list-group list-group-flush">
      <li class="list-group-item"><?php echo $package_description; ?></li>
      <li class="list-group-item"><b>START </b> <?php echo $package_start; ?></li>
      <li class="list-group-item"><b>END </b> <?php echo $package_end; ?></li>
      <li class="list-group-item">$<?php echo $package_amount; ?></li>
      <li class="list-group-item">24X7 Support</li>
      </ul>
      <form action="addpackage.php" method="post">
                            <input type="hidden" name="package_id" value="<?php echo $package_id; ?>">
                            <button type="submit" class="btn btn-success waves-effect waves-light btn-sm" name="updatepackage"><i class="fa fa-pencil-square-o"></i><span>  Edit  </span></button>
                          </form>
                          <form action="controller/packageController.php" method="post">
                            <input type="hidden" name="package_id" value="<?php echo $package_id; ?>">
                            <button type="submit" class="btn btn-danger waves-effect waves-light btn-sm" 
                            id="confirm-btn-alert" name="deletepackage" value="Delete"><i class="fa fa-trash"></i>
                            <span>Delete</span></button>
                        </form>
       </div>
     </div>
     </div>
    </div><?php } ?>
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
	<?php include 'common/footer.php'; ?>