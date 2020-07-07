<?php include 'common/header.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Vendor</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">vendors</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <!-- <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Add New</button> -->
        <a class="btn btn-outline-primary waves-effect waves-light"href="addvendor.php"><i class="fa fa-plus mr-1"></i>add</a>
        
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
            <div class="card-header"><i class="fa fa-table"></i> Vendor</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                      <th>NO</th>
                    <th>FirstName</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Profile</th>
                    <th>Action</th>
                     <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
            $q=$d->select("tbl_admin","role_id='2'");
            $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
                $i++;
             ?>
                <tr>
                    <td><?php echo $i; ?></td> 
                    <td><?php echo $admin_name; ?></td>
                    <td><?php echo $admin_email; ?></td>
                    <td><?php echo $admin_mobile; ?></td>

                    <td><img height="50" width="50" src="../images/V_profile/<?php echo $admin_profile; ?>"></td>
                     
                    <td>
                        <form action="addvendor.php" method="post">
                            <input type="hidden" name="vendor_id" value="<?php echo $vendor_id; ?>">
                            <input type="submit" class="btn btn-sm btn-success" name="updatevendor" value="Edit">
                          </form>
                          </td>
                          <td>
                            <form action="controller/VendorController.php" method="post">
                            <input type="hidden" name="vendor_id" value="<?php echo $vendor_id; ?>">
                            <input type="submit" class="btn btn-sm btn-danger" name="deletevendor" value="Delete">
                        </form>
                    </td>
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