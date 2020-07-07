<?php
include 'common/header.php'; 
include_once 'lib/dao.php';
include_once 'lib/model.php';
$d=new dao();
$m= new model();

extract($_POST);

?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title"> demo</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="welcome">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">demo</li>
            </ol>
        </div>
        <!-- <div class="col-sm-3">
         <div class="btn-group float-sm-right">
            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="fa fa-plus mr-1"></i> Add New</button>
        
            </div>
        </div> -->
    </div>
    <!-- End Breadcrumb-->


    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <!-- <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div> -->
            <div class="card-body">
                <?php 
                $i=1;
                $q=$d->select("tbl_package,tbl_package_type","tbl_package_type.package_type_id=tbl_package.package_type_id AND tbl_package.package_status='0'");

                while ($data=mysqli_fetch_array($q)) {
                            # code...
                   ?>
                   <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">Package Type Name</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                           <option>--select--</option>
                            <option><?php echo $data['package_type_name']; ?></option>
                        </select>
                    </div></div>
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



