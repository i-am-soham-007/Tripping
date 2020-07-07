<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);
print_r($_POST);
// delete user
if(isset($deleteagency)) {
	$q=$d->delete("tbl_agency","agency_id='$agency_id'");
	if($q==TRUE) {
		header("Location: ../agencies.php");
	} else {
		header("Location: ../agencies.php");
	}
}

// add new user
if(isset($addagency)) {

	move_uploaded_file($_FILES['agency_logo']['tmp_name'], '../../images/Agency/'.$_FILES['agency_logo']['name']);

		$agency_logo = $_FILES['agency_logo']['name'];
		$m->set_data('admin_id',$admin_id);
		$m->set_data('agency_name',$agency_name);
		$m->set_data('agency_address',$agency_address);
        $m->set_data('agency_logo',$agency_logo);
        
         $a1= array (
         		'package_type_id'=> $m->get_data('package_type_id'),
			  'agency_name'=> $m->get_data('agency_name'),
			  'agency_address'=>$m->get_data('agency_address'),
	          'agency_logo'=> $m->get_data('agency_logo'),
	      );

		$q=$d->insert("tbl_agency",$a1);
		print_r($a1);
	if($q==TRUE) {
		header("Location: ../agencies.php");
	} else {
		header("Location: ../agencies.php");
	}
}

// Update  user
if(isset($updatepackage)) {

	date_default_timezone_set("Asia/Kolkata");
		$today=date("Y/m/d h:i:sa");
		$package_created_date=$today;

	move_uploaded_file($_FILES['agency_logo']['tmp_name'], '../../images/Agency/'.$_FILES['agency_logo']['name']);

		$agency_logo = $_FILES['agency_logo']['name'];

		$m->set_data('agency_name',$agency_name);
		$m->set_data('agency_address',$agency_address);
        $m->set_data('agency_logo',$agency_logo);
        $m->set_data('package_created_date',$package_created_date);

         $a1= array (
	         'agency_name'=> $m->get_data('agency_name'),
			  'agency_address'=>$m->get_data('agency_address'),
	          'agency_logo'=> $m->get_data('agency_logo'),
	          'package_created_date'=>$m->get_data('package_created_date'),
	      );

		$q=$d->update("tbl_agency",$a1,"agency_id='$agency_id'");
	if($q==TRUE) {
		header("Location: ../agencies.php");
	} else {
		header("Location: ../agencies.php");
	}
}


 ?>