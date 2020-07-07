<?php include 'common/header.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Users</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <!-- <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Add New</button> --><a class="btn btn-outline-primary waves-effect waves-light"href="addUser.php"><i class="fa fa-plus mr-1"></i>add</a>
        
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
            <div class="card-header"><i class="fa fa-table"></i> Users</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                      <th>NO</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Profile</th>
                    <th>Current Status</th>
                    <th>Change Status</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
            $q=$d->select("tbl_user","","");
            $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
                $i++;
             ?>
                <tr>
                    <td><?php echo $i; ?></td> 
                    <td><?php echo $user_name; ?></td>
                    <td><?php echo $user_email; ?></td>
                    <td><?php echo $user_mobile; ?></td>
                    <td><img height="50" width="50" src="../images/U_profile/<?php echo $user_profile; ?>"></td>
                  <!-- Status Active OR Deactive -->
                   <td>
                    <?php 
                      if($row['user_status']==1){
                        echo "<p id=str".$row['user_id'].">Active</p>";
                      }else{
                        echo "<p id=str".$row['user_id'].">Disactive</p>";
                      } ?></td>

                   <td>
                    <select onchange="active_diactive_user(this.value,<?php echo $row['user_id']; ?>)">
                        <option value="1">Active</option>
                        <option value="0">Disactive</option>
                    </select>
                </td>
           
                          <td>
                            <form action="controller/userController.php" method="post">
                            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                            <input type="submit" class="btn btn-danger btn-sm" 
                             name="deleteUser" value="Delete">
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
       <!-- <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</body> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        function active_diactive_user(val, user_id) {
            $.ajax({
                type:'post',
                url:'change.php',
                data:{val:val,user_id:user_id},
                success: function(result){
                    if(result==1){
                        $('#str'+user_id).html('Active');
                    }else{
                        $('#str'+user_id).html('Disactive')
                    }
                }
            });
        }
    </script>

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   
	<?php include 'common/footer.php'; ?>