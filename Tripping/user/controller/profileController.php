<?php 
session_start();
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);


// add new user
if(isset($updateProfile)) {

		if(file_exists($_FILES['user_profile']['tmp_name'])) {
		move_uploaded_file($_FILES['user_profile']['tmp_name'], '../../images/U_profile/'.$_FILES['user_profile']['name']);

		$user_profile = $_FILES['user_profile']['name'];
		} else {
		$user_profile = $_SESSION['user_profile'];
		}

		$m->set_data('user_name',$user_name);
        $m->set_data('user_mobile',$user_mobile);
        $m->set_data('user_profile',$user_profile);

         $a1= array (
	          'user_name'=> $m->get_data('user_name'),
	          'user_mobile'=> $m->get_data('user_mobile'),
	          'user_profile'=> $m->get_data('user_profile'),
	      );

		$q=$d->update("tbl_user",$a1,"user_id='$_SESSION[user_id]'");
		// exit();
	if($q==TRUE) {
		$_SESSION['user_name'] = $user_name;
		$_SESSION['user_name'] = $user_name;
		$_SESSION['user_profile'] = $user_profile;
		header("Location: ../profile.php?updated");
	} else {
		header("Location: ../profile.php?error");
	}
}

// Update  user
if(isset($changePassword)) {
	$q=$d->select("tbl_user","user_id='$_SESSION[user_id]'");
	$data=mysqli_fetch_array($q);
	$datOldPassword = $data['user_password'];

		if($datOldPassword==$oldPassword) {

		if($password==$cPassword) {

		$m->set_data('password',$password);
       
         $a1= array (
	          'user_password'=> $m->get_data('password'),
	      );

			$q=$d->update("tbl_user",$a1,"user_id='$_SESSION[user_id]'");
			if($q==TRUE) {
				header("Location: ../changepassword.php?passwordUpdate");
			} else {
				header("Location: ../changepassword.php");
			}
		 } else {
			header("Location: ../changepassword.php?Confirm Password not match");	
		 }
		} else {
			header("Location: ../changepassword.php?Old Password is Wrong");	
		}
}


 ?>