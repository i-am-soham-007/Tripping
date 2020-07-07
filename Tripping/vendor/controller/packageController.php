<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);
print_r($_POST);
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

		date_default_timezone_set("Asia/Kolkata");
		$today=date("Y/m/d h:i:sa");
		$package_created_date=$today;

	move_uploaded_file($_FILES['package_gallery']['tmp_name'], '../../images/Packages/'.$_FILES['package_gallery']['name']);

		$package_gallery = $_FILES['package_gallery']['name'];
		$m->set_data('package_type_id',$package_type_id);
		$m->set_data('package_name',$package_name);
		$m->set_data('package_description',$package_description);
        $m->set_data('package_gallery',$package_gallery);
        $m->set_data('package_created_date',$package_created_date);

         $a1= array (
         		'package_type_id'=> $m->get_data('package_type_id'),
			  'package_name'=> $m->get_data('package_name'),
			  'package_description'=>$m->get_data('package_description'),
	          'package_gallery'=> $m->get_data('package_gallery'),
	          'package_created_date'=>$m->get_data('package_created_date'),
	      );

		$q=$d->insert("tbl_package",$a1);
		print_r($a1);
	if($q==TRUE) {
		header("Location: ../packages.php");
	} else {
		header("Location: ../packages.php");
	}
}

// Update  user
if(isset($updatepackage)) {

	date_default_timezone_set("Asia/Kolkata");
		$today=date("Y/m/d h:i:sa");
		$package_created_date=$today;

	move_uploaded_file($_FILES['package_gallery']['tmp_name'], '../../images/Packages/'.$_FILES['package_gallery']['name']);

		$package_gallery = $_FILES['package_gallery']['name'];

		$m->set_data('package_name',$package_name);
		$m->set_data('package_description',$package_description);
        $m->set_data('package_gallery',$package_gallery);
        $m->set_data('package_created_date',$package_created_date);

         $a1= array (
	         'package_name'=> $m->get_data('package_name'),
			  'package_description'=>$m->get_data('package_description'),
	          'package_gallery'=> $m->get_data('package_gallery'),
	          'package_created_date'=>$m->get_data('package_created_date'),
	      );

		$q=$d->update("tbl_package",$a1,"package_id='$package_id'");
	if($q==TRUE) {
		header("Location: ../packages.php");
	} else {
		header("Location: ../packages.php");
	}
}


 ?>