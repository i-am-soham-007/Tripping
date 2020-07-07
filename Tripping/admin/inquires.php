<?php include 'common/header.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">inquires</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add/Edit Inquires</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
       <a href="addinquiry.php" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Add New</button>
        
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
                    <th>inquiry Name</th>
                    <th>inquiry email</th>
                    <th>Mobile</th>
                    <th>inquiry subject</th>
                    <th>inquiry megssage</th>
                    <th>Action</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
            $q=$d->select("tbl_inquiry","","");
            $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
             $i++;
             ?>
                <tr><td><?php echo $i;?></td>
                    <td><?php echo $inquiry_name; ?></td>
                    <td><?php echo $inquiry_email; ?></td>
                    <td><?php echo $inquiry_mobile; ?></td>
                    <td><?php echo $inquiry_subject; ?></td>
                    <td><?php echo $inquiry_message; ?></td>
                    
                     <td>
                        <form action="controller/inquiryController.php" method="post">
                            <input type="hidden" name="inquiry_id" value="<?php echo $inquiry_id; ?>">
                            <input type="submit" class="btn btn-sm btn-danger" name="deleteinquiry" value="Delete">
                        </form>
                    </td>
                    <td>
                        <form action="addinquiry.php" method="post">
                            <input type="hidden" name="inquiry_id" value="<?php echo $inquiry_id; ?>">
                            <input type="submit" class="btn btn-sm btn-primary" name="updateinquiry" value="Edit">
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