<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);
//print_r($_POST);
// delete user
if(isset($deletepackage)) {
	$q=$d->delete("tbl_package","package_id='$package_id'");
	if($q==TRUE) {
		header("Location: ../packages.php");
	} else {
		header("Location: ../packages.php");
	}
}

// add new user
if(isset($addpackage)) {

$todaydate=date('Y/m/d');

$expire=strtotime($package_end);
$td=strtotime($todaydate);
$start=strtotime($package_start);
	$diff=$td-$expire;
	$rm=$td-$start;
	$dateCount=abs(floor($diff / (60 * 60 * 24)));
//Date Condition start here
if($start < $td  || $expire < $td)
{
	echo "<script>alert('please select right date');</script>";	
header("location:../addpackage.php?msg=Choose right date");

}
else
{
	move_uploaded_file($_FILES['package_gallery']['tmp_name'], '../../images/Packages/'.$_FILES['package_gallery']['name']);
		$package_gallery = $_FILES['package_gallery']['name'];
	
		$m->set_data('admin_id',$admin_id);
		$m->set_data('agency_id',$agency_id);
		$m->set_data('package_type_id',$package_type_id);
		$m->set_data('package_name',$package_name);
		$m->set_data('package_days',$package_days);
		$m->set_data('hotel_id',$hotel_id);
		$m->set_data('room_id',$room_id);
		$m->set_data('package_place',$package_place);
		$m->set_data('package_hotel',$package_hotel);
		$m->set_data('package_description',$package_description);
		$m->set_data('package_amount',$package_amount);
		$m->set_data('package_gallery',$package_gallery);
        $m->set_data('package_start',$package_start);
        $m->set_data('package_end',$package_end);
		
         $a1= array (
         	  'admin_id'=> $m->get_data('admin_id'),
         	  'agency_id'=> $m->get_data('agency_id'),
         	  'hotel_id'=> $m->get_data('hotel_id'),
         	  'room_id'=> $m->get_data('room_id'),
         	  'package_type_id'=> $m->get_data('package_type_id'),
			  'package_name'=> $m->get_data('package_name'),
			  'package_days'=> $m->get_data('package_days'),
			  'package_place'=> $m->get_data('package_place'),
			  'package_hotel'=> $m->get_data('package_hotel'),
			  'package_description'=>$m->get_data('package_description'),
			  'package_amount'=> $m->get_data('package_amount'),
			  'package_gallery'=> $m->get_data('package_gallery'),
			  'package_start'=> $m->get_data('package_start'),
			  'package_end'=> $m->get_data('package_end'),
			  
	      );

		$q=$d->insert("tbl_package",$a1);
		
	if($q==TRUE) {
		header("Location: ../packages.php");
	} else {
		header("Location: ../packages.php");
	}
}//Date Condition over here	
}

// Update  user
if(isset($updatepackage)) {

	move_uploaded_file($_FILES['package_gallery']['tmp_name'], '../../images/Packages/'.$_FILES['package_gallery']['name']);

		$package_gallery = $_FILES['package_gallery']['name'];
		$m->set_data('hotel_id',$hotel_id);
		$m->set_data('room_id',$room_id);
		$m->set_data('agency_id',$agency_id);
		$m->set_data('package_name',$package_name);
		$m->set_data('package_place',$package_place);
		$m->set_data('package_description',$package_description);
		$m->set_data('package_amount',$package_amount);
        $m->set_data('package_gallery',$package_gallery);
        $m->set_data('package_start',$package_start);
        $m->set_data('package_end',$package_end);

         $a1= array (
	          'package_name'=> $m->get_data('package_name'),
	          'package_place'=> $m->get_data('package_place'),
	          'agency_id'=> $m->get_data('agency_id'),
	          'hotel_id'=> $m->get_data('hotel_id'),
         	  'room_id'=> $m->get_data('room_id'),
			  'package_description'=>$m->get_data('package_description'),
			  'package_amount'=> $m->get_data('package_amount'),
	          'package_gallery'=> $m->get_data('package_gallery'),
	          'package_start'=> $m->get_data('package_start'),
			  'package_end'=> $m->get_data('package_end'),
	      );

		$q=$d->update("tbl_package",$a1,"package_id='$package_id'");
	if($q==TRUE) {
		header("Location: ../packages.php");
	} else {
		header("Location: ../packages.php");
	}
}


 ?>