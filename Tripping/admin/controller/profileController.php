<?php 
session_start();
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);


// add new user
if(isset($updateProfile)) {

		if(file_exists($_FILES['admin_profile']['tmp_name'])) {
		move_uploaded_file($_FILES['admin_profile']['tmp_name'], '../../images/V_profile/'.$_FILES['admin_profile']['name']);

		$admin_profile = $_FILES['admin_profile']['name'];
		} else {
		$admin_profile = $_SESSION['admin_profile'];
		}

		$m->set_data('admin_name',$admin_name);
        $m->set_data('admin_mobile',$admin_mobile);
        $m->set_data('admin_profile',$admin_profile);

         $a1= array (
	          'admin_name'=> $m->get_data('admin_name'),
	          'admin_mobile'=> $m->get_data('admin_mobile'),
	          'admin_profile'=> $m->get_data('admin_profile'),
	      );

		$q=$d->update("tbl_admin",$a1,"admin_id='$_SESSION[admin_id]'");
		// exit();
	if($q==TRUE) {
		$_SESSION['admin_name'] = $admin_name;
		$_SESSION['admin_name'] = $admin_name;
		$_SESSION['admin_profile'] = $admin_profile;
		header("Location: ../profile.php?updated");
	} else {
		header("Location: ../profile.php?error");
	}
}

// Update  user
if(isset($changePassword)) {
	$q=$d->select("tbl_admin","role_id='$_SESSION[role_id]'");
	$data=mysqli_fetch_array($q);
	$datOldPassword = $data['admin_password'];

		if($datOldPassword==$oldPassword) {

		if($password==$cPassword) {

		$m->set_data('password',$password);
       
         $a1= array (
	          'admin_password'=> $m->get_data('password'),
	      );

			$q=$d->update("tbl_admin",$a1,"role_id='$_SESSION[role_id]'");
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