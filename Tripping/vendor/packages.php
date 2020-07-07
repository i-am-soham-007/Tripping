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
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>Package</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                      <th>NO</th>
                      <th>Package TypeId</th>
                    <th>Package Name</th>
                    <th>Package Description</th>
                    <th>Package Gallery</th>
                    <th>Created Date</th>
                    <th>Action</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  
                     <?php
            $q=$d->select("tbl_package","","");
            $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
             $i++;
             ?>
                <td><?php echo $i;?></td>
                <td><?php echo $package_type_id;?></td>
                    <td><?php echo $package_name; ?></td>
                    <td><?php echo $package_description; ?></td>
                    <td><img height="60" width="100" src="../images/Packages/<?php echo $package_gallery; ?>">
                    </td>
                    <td><?php echo $package_created_date; ?></td>
                    <td>
                        <form action="controller/packageController.php" method="post">
                            <input type="hidden" name="package_id" value="<?php echo $package_id; ?>">
                            <input type="submit" class="btn btn-sm btn-danger" name="deletepackage" value="Delete">
                        </form>
                    </td>
                    <td>
                        <form action="addpackage.php" method="post">
                            <input type="hidden" name="package_id" value="<?php echo $package_id; ?>">
                            <input type="submit" class="btn btn-sm btn-primary" name="updatepackage" value="Edit">
                        </form></td>
                </tr>
            <?php } ?>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
	<?php include 'common/footer.php'; ?>