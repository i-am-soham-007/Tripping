<?php include 'common/header.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Agencies</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agencies</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a class="btn btn-outline-primary waves-effect waves-light" href="addagency.php">
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
            <div class="card-header"><i class="fa fa-table"></i>Agency</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                      <th>NO</th>
                      <th>admin Id</th>
                    <th>agency Name</th>
                    <th>agency Address</th>
                    <th>agency Logo</th>
                    <th>Created Date</th>
                    <th>Action</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  
                     <?php
            $q=$d->select("tbl_agency","","");
            $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
             $i++;
             ?>
                <td><?php echo $i;?></td>
                <td><?php echo $admin_id;?></td>
                    <td><?php echo $agency_name; ?></td>
                    <td><?php echo $agency_address; ?></td>
                     <td><img height="60" width="100" src="../images/Agency/<?php echo $agency_logo; ?>">
                    </td>
                    <td><?php echo $agency_created_date; ?></td>
                    <td>
                        <form action="controller/agencyController.php" method="post">
                            <input type="hidden" name="agency_id" value="<?php echo $agency_id; ?>">
                            <input type="submit" class="btn btn-sm btn-danger" name="deleteagency" value="Delete">
                        </form>
                    </td>
                    <td>
                        <form action="addagency.php" method="post">
                            <input type="hidden" name="agency_id" value="<?php echo $agency_id; ?>">
                            <input type="submit" class="btn btn-sm btn-primary" name="updateagency" value="Edit">
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