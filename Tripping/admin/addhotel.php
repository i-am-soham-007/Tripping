<?php include 'common/header.php'; 
include_once 'lib/dao.php';
include_once 'lib/model.php';
$d=new dao();
$m= new model();
$hotel_name="";
$hotel_description="";
$hotel_image="";
$hotel_amount='';

 extract($_POST);
                  if(isset($updatehotel)){      
                    $q=$d->select("tbl_hotel","hotel_id='$hotel_id'");
                  $row=mysqli_fetch_array($q);
                  extract($row);
                  }   
                ?>
                <script>
    // console.log('Aasdfwasd');
  function getState(val){
    // alert("Hi");
    $.ajax({
      type: "POST",
      url: "get_state.php",
      data: {'country_id' :val},
      success: function(data){
        $("#state-list").html(data);
      }
    });
  }
  function getCity(val){
    // alert("Hi");
    $.ajax({
      type: "POST",
      url: "get_city.php",
      data: {'state_id' :val},
      success: function(data){
        $("#city-list").html(data);
      }
    });
  }
</script>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Hotels</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New Hotel</li>
         </ol>
	   </div>
	   
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="controller/hotelController.php" method="post" enctype="multipart/form-data">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Add New Hotel
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> HotelName</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="hotel_name" value="<?php if(isset($addhotel)){$hotel_name='';$hotel_description='';}else{echo $hotel_name;} ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-2" class="col-sm-2 col-form-label"> Hotel Description</label>
                  <div class="col-sm-10">
                    <textarea name="hotel_description" class="form-control"><?php if(isset($addhotel)){$hotel_name='';$hotel_description='';}else{echo $hotel_description;} ?></textarea>
                  </div>
                </div>

               <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Hotel Room</label>
                <div class="col-sm-10">
                  <select class="form-control" id="input-1" name="room_id">
                    <option>---SELECT---</option>
                    <?php 
                    $q=$d->select("hotel_room","","");
                    while ($row=mysqli_fetch_array($q)) {
                      extract($row);

                      ?>
                      <option value="<?php echo $room_id;?>"><?php echo $room_name;?></option>
                    <?php }?>
                  </select>
                </div>
              </div>

                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Hotel Image</label>
                  <div class="col-sm-10">
                    <input type="file" id="imgInp" class="form-control" name="hotel_image">
                  </div>
                </div>

                  <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Hotel amount</label>
                  <div class="col-sm-10">
                    <input type="text" id="imgInp" class="form-control" name="hotel_amount" value="<?php if(isset($addhotel)){$hotel_amount='';}else{echo $hotel_amount;} ?>">
                  </div>
                </div>

                <div class="form-group row">
                <label for="input-1" class="col-sm-2 col-form-label">Select Country</label>
                <div class="col-sm-4">
                  <select class="form-control" id="country-list" name="country_id"
                   onchange="getState(this.value);">
                    <option>---SELECT---</option>
                    <?php 
                    $q=$d->select("tbl_country","","");
                    while ($row=mysqli_fetch_array($q)) {
                      extract($row); 
                      ?>
                      <option value="<?php echo $country_id;?>"><?php echo $country_name;?></option>
                    <?php }?>
                  </select>
                </div> <label for="input-1" class="col-sm-2 col-form-label">Select State</label>

                <div class="col-sm-4">
                  <select class="form-control" id="state-list" name="state_id" onchange="getCity(this.value);">

                     <?php
                        $q=$d->select("tbl_state","");
                         echo $country_id;
                    while ($row=mysqli_fetch_array($q)) {
                      extract($row);
                      ?> 
                      <option value="" selected="selected"></option>
                   <?php } ?>
                  </select>
                </div>
              
              <label for="input-1" class="col-sm-2 col-form-label">Select City</label>

              <div class="col-sm-4">
                  <select class="form-control" id="city-list" name="city_id" >
                     <?php
                    $q=$d->select("tbl_city","");
                    echo $state_id;
                    while ($row=mysqli_fetch_array($q)) {
                      extract($row);
                      ?> 
                      <option value="" selected="selected"></option>
                   <?php } ?>
                  </select>
                </div>
              </div>


<?php if(isset($updatehotel))
{
  ?>
  <input type="Hidden" name="hotel_id" value="<?php echo $hotel_id;?>">
  <input type="submit" class="btn btn-success" name="updatehotel" value="update">
<?php }else{ ?>
                <div class="form-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <button name="addhotel" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> ADD </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
    </div>
    <!-- End container-fluid-->
    <?php }?>
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->

<?php include 'common/footer.php'; ?>