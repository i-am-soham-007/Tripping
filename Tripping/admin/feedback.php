<?php include 'common/header.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Feedback</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Feedback</li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
      

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-comment"></i> Feedback</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
            $q=$d->select("tbl_feedback","","");
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
             ?>
                <tr>
                    <td><?php echo $feedback_name; ?></td>
                    <td><?php echo $feedback_email; ?></td>
                    <td>
                        <?php echo $feedback_msg; ?>
                    </td>
                    <td>
                        <form action="#" method="post">
                            <input type="hidden" name="userId" value="<?php echo $userId; ?>">
                            <button type="submit" class="btn btn-sm btn-danger" name="editUser" value="Delete"><i class="fa fa-trash-o"></i> </button>
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