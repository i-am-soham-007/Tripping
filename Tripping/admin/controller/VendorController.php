<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

// delete user
if(isset($deletevendor)) {
	$q=$d->delete("tbl_vendor","vendor_id='$vendor_id'");
	if($q==TRUE) {
		header("Location: ../vendors.php");
	} else {
		header("Location: ../vendors.php");
	}
}

// add new user
if(isset($addvendor)) {


		move_uploaded_file($_FILES['vendor_profile']['tmp_name'], '../img/profile/vendor_profile/'.$_FILES['vendor_profile']['name']);
		$vendor_profile = $_FILES['vendor_profile']['name'];

		$m->set_data('vendor_firstname',$vendor_firstname);
		$m->set_data('vendor_lastname',$vendor_lastname);
        $m->set_data('vendor_email',$vendor_email);
        $m->set_data('vendor_password',$vendor_password);
        $m->set_data('vendor_mobile',$vendor_mobile);
        $m->set_data('vendor_profile',$vendor_profile);
        $m->set_data('vendor_created_date',$vendor_created_date);

         $a1= array (
	          'vendor_firstname'=> $m->get_data('vendor_firstname'),
	          'vendor_lastname'=> $m->get_data('vendor_lastname'),
	          'vendor_email'=> $m->get_data('vendor_email'),
	          'vendor_password'=> $m->get_data('vendor_password'),
	          'vendor_mobile'=> $m->get_data('vendor_mobile'),
	          'vendor_profile'=> $m->get_data('vendor_profile'),
	          'vendor_created_date'=> $m->get_data('vendor_created_date'),
	      );

		$q=$d->insert("tbl_vendor",$a1);
	if($q==TRUE) {
		header("Location: ../vendors.php");
	} else {
		header("Location: ../vendors.php");
	}
}

// Update  user
if(isset($updatevendor)) {

		date_default_timezone_set("Asia/Kolkata");
		$today=date("Y/m/d h:i:sa");
		$vendor_created_date=$today;
		
		if(file_exists($_FILES['vendor_profile']['tmp_name'])) {

		move_uploaded_file($_FILES['vendor_profile']['tmp_name'], '../img/profile/vendor_profile/'.$_FILES['vendor_profile']['name']);
		$vendor_profile = $_FILES['vendor_profile']['name'];
	}else{
		$vendor_profile;
	}

		$m->set_data('vendor_firstname',$vendor_firstname);
		$m->set_data('vendor_lastname',$vendor_lastname);
        $m->set_data('vendor_email',$vendor_email);
        $m->set_data('vendor_password',$vendor_password);
        $m->set_data('vendor_mobile',$vendor_mobile);     
        $m->set_data('vendor_profile',$vendor_profile);
        $m->set_data('vendor_created_date',$vendor_created_date);
          $a1= array (
	          'vendor_firstname'=> $m->get_data('vendor_firstname'),
	          'vendor_lastname'=> $m->get_data('vendor_lastname'),
	          'vendor_email'=> $m->get_data('vendor_email'),
	          'vendor_password'=> $m->get_data('vendor_password'),
	          'vendor_mobile'=> $m->get_data('vendor_mobile'),
	          'vendor_profile'=> $m->get_data('vendor_profile'),
	      	  'vendor_created_date'=> $m->get_data('vendor_created_date'),
	      );

		$q=$d->update("tbl_vendor",$a1,"vendor_id='$vendor_id'");
		
		
	if($q==TRUE) {
		header("Location: ../vendors.php");
	} else {
		header("Location: ../vendors.php");
	}
}


 ?>