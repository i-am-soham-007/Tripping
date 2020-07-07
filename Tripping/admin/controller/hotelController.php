<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

// delete user
if(isset($deletehotel)) {
	$q=$d->delete("tbl_hotel","hotel_id='$hotel_id'");
	if($q==TRUE) {
		header("Location: ../hotels.php");
	} else {
		header("Location: ../hotels.php");
	}
}

// add new user
if(isset($addhotel)) {

	$count=0;
	$error= array();
	$extension=array("jpg","jpeg","png");
	$ext=pathinfo($_FILES["hotel_image"]["name"],PATHINFO_EXTENSION);
    
	if(!in_array($ext, $extension)){
		$count++;
	echo $_SESSION['errorMsg']="FIle type is invalid , Please select jpg ,jpeg or png only.";
		header("Location: ../addhotel.php");
	}

	if($count==0){

	move_uploaded_file($_FILES['hotel_image']['tmp_name'], '../../images/Hotels/'.$_FILES['hotel_image']['name']);

		$hotel_image = $_FILES['hotel_image']['name'];
		$m->set_data('room_id',$room_id);
		$m->set_data('country_id',$country_id);
		$m->set_data('state_id',$state_id);
		$m->set_data('city_id',$city_id);
		$m->set_data('hotel_name',$hotel_name);
		$m->set_data('hotel_description',$hotel_description);
		$m->set_data('check_in',$check_in);
		$m->set_data('check_out',$check_out);
        $m->set_data('hotel_image',$hotel_image);
        $m->set_data('hotel_amount',$hotel_amount);

         $a1= array (
         	  'room_id'=> $m->get_data('room_id'),
			  'country_id'=> $m->get_data('country_id'),
			  'state_id'=> $m->get_data('state_id'),
			  'city_id'=> $m->get_data('city_id'),
			  'hotel_amount'=> $m->get_data('hotel_amount'),
			  'check_in'=> $m->get_data('check_in'),
			  'check_out'=> $m->get_data('check_out'),
			  'hotel_name'=> $m->get_data('hotel_name'),
			  'hotel_description'=>$m->get_data('hotel_description'),
	          'hotel_image'=>$m->get_data('hotel_image'),
	      );

		$q=$d->insert("tbl_hotel",$a1);
	if($q==TRUE) {
		header("Location: ../hotels.php");
	} else {
		header("Location: ../hotels.php");
	}
}//if condition over.
}

// Update  user
if(isset($updatehotel)) {

	move_uploaded_file($_FILES['hotel_image']['tmp_name'], '../../images/Hotels/'.$_FILES['hotel_image']['name']);

		$hotel_image = $_FILES['hotel_image']['name'];
		$m->set_data('room_id',$room_id);
		$m->set_data('country_id',$country_id);
		$m->set_data('state_id',$state_id);
		$m->set_data('city_id',$city_id);
		$m->set_data('hotel_name',$hotel_name);
		$m->set_data('hotel_description',$hotel_description);
		$m->set_data('hotel_image',$hotel_image);
        $m->set_data('hotel_amount',$hotel_amount);


         $a1= array ( 

         	  'room_id'=> $m->get_data('room_id'),
			  'country_id'=> $m->get_data('country_id'),
			  'state_id'=> $m->get_data('state_id'),
			  'city_id'=> $m->get_data('city_id'),
			  'hotel_amount'=> $m->get_data('hotel_amount'),
			  'hotel_name'=> $m->get_data('hotel_name'),
			  'hotel_description'=>$m->get_data('hotel_description'),
	          'hotel_image'=>$m->get_data('hotel_image'),
	      );

		$q=$d->update("tbl_hotel",$a1,"hotel_id='$hotel_id'");
	if($q==TRUE) {
		header("Location: ../hotels.php");
	} else {
		header("Location: ../hotels.php");
	}
}


 ?>