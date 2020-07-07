<?php 
session_start();
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);


// add new user
if(isset($updateProfile)) {

		if(file_exists($_FILES['vendor_profile']['tmp_name'])) {
		move_uploaded_file($_FILES['vendor_profile']['tmp_name'], '../../images/V_profile/'.$_FILES['vendor_profile']['name']);

		$vendor_profile = $_FILES['vendor_profile']['name'];
		} else {
		$vendor_profile = $_SESSION['vendor_profile'];
		}

		$m->set_data('vendor_name',$vendor_name);
        $m->set_data('vendor_mobile',$vendor_mobile);
        $m->set_data('vendor_profile',$vendor_profile);

         $a1= array (
	          'vendor_name'=> $m->get_data('vendor_name'),
	          'vendor_mobile'=> $m->get_data('vendor_mobile'),
	          'vendor_profile'=> $m->get_data('vendor_profile'),
	      );
         print_r($a1);
        
		$q=$d->update("tbl_vendor",$a1,"vendor_id='$_SESSION[vendor_id]'");
		
	if($q==TRUE) {
		$_SESSION['vendor_name'] = $vendor_name;
		$_SESSION['vendor_name'] = $vendor_name;
		$_SESSION['vendor_profile'] = $vendor_profile;
		header("Location: ../profile.php?updated");
	} else {
		header("Location: ../profile.php?error");
	}
}

// Update  user
if(isset($changePassword)) {
	$q=$d->select("tbl_vendor","vendor_id='$_SESSION[vendor_id]'");
	$data=mysqli_fetch_array($q);
	$datOldPassword = $data['vendor_password'];

		if($datOldPassword==$oldPassword) {

		if($password==$cPassword) {

		$m->set_data('password',$password);
       
         $a1= array (
	          'vendor_password'=> $m->get_data('password'),
	      );

			$q=$d->update("tbl_vendor",$a1,"vendor_id='$_SESSION[vendor_id]'");
			if($q==TRUE) {
				header("Location: ../profile.php?passwordUpdate");
			} else {
				header("Location: ../profile.php");
			}
		 } else {
			header("Location: ../profile.php?Confirm Password not match");	
		 }
		} else {
			header("Location: ../profile.php?Old Password is Wrong");	
		}
}


 ?>