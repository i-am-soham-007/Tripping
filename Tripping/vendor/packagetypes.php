<?php include 'common/header.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Package Types</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Packages Types</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a class="btn btn-outline-primary waves-effect waves-light" href="addpackagetype.php">
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
            <div class="card-header"><i class="fa fa-list-ul"></i>Package Types</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                      <th>NO</th>
                    <th>Package Type Name</th>
                    <th>Package Type Description</th>
                    <th>Action</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
            $q=$d->select("tbl_package_type","","");
            $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
             $i++;
             ?>
                <tr><td><?php echo $i;?></td>
                    <td><?php echo $package_type_name; ?></td>
                    <td><?php echo $package_type_description; ?></td>
                   <td>
                        <form action="controller/packagetypeController.php" method="post">
                            <input type="hidden" name="package_type_id" value="<?php echo $package_type_id; ?>">
                            <input type="submit" class="btn btn-sm btn-danger" name="deletepackagetype" value="Delete">
                        </form>
                    </td>
                    <td>
                        <form action="addpackagetype.php" method="post">
                            <input type="hidden" name="package_type_id" value="<?php echo $package_type_id; ?>">
                            <input type="submit" class="btn btn-sm btn-primary" name="updatepackagetype" value="Edit">
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