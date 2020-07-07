<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);


// delete user
if(isset($deleteUser)) {
	$q=$d->delete("tbl_user","user_id='$user_id'");
	if($q==TRUE) {
		echo $_SESSION['errorMsgd'];
		header("Location: ../users.php");
		
	} else {
		header("Location: ../users.php");
	}
}

// add new user
if(isset($addUser)) {
		
		date_default_timezone_set("Asia/Kolkata");
		$today=date("Y/m/d h:i:sa");
		$user_created_date=$today;

		move_uploaded_file($_FILES['user_profile']['tmp_name'], '../../images/U_profile/'.$_FILES['user_profile']['name']);
		$user_profile = $_FILES['user_profile']['name'];
		
		$m->set_data('user_name',$user_name);
		$m->set_data('user_address',$user_address);
        $m->set_data('user_email',$user_email);
        $m->set_data('user_password',$user_password);
        $m->set_data('user_mobile',$user_mobile);
        $m->set_data('user_profile',$user_profile);

         $a1= array (
	           'user_name'=> $m->get_data('user_name'),
	          'user_address'=> $m->get_data('user_address'),
	          'user_email'=> $m->get_data('user_email'),
	          'user_password'=> $m->get_data('user_password'),
	          'user_mobile'=> $m->get_data('user_mobile'),
	          'user_profile'=> $m->get_data('user_profile'),
	         );

		$q=$d->insert("tbl_user",$a1);
	if($q==TRUE) {
		header("Location: ../users.php");
	} else {
		header("Location: ../users.php");
	}
}

// Update  user
if(isset($updateUser)) {
	date_default_timezone_set("Asia/Kolkata");
		$today=date("Y/m/d h:i:sa");
		$user_created_date=$today;
if(file_exists($_FILES['user_profile']['tmp_name'])) {

		move_uploaded_file($_FILES['user_profile']['tmp_name'], '../../images/U_profile/'.$_FILES['user_profile']['name']);
		$user_profile = $_FILES['user_profile']['name'];
	}else{
		$user_profile = $_FILES['user_profile']['name'];
	}

		$m->set_data('user_name',$user_name);
		$m->set_data('user_address',$user_address);
        $m->set_data('user_email',$user_email);
        $m->set_data('user_password',$user_password);
        $m->set_data('user_mobile',$user_mobile);
        $m->set_data('user_profile',$user_profile);

          $a1= array (
	                 'user_name'=> $m->get_data('user_name'),
	          'user_address'=> $m->get_data('user_address'),
	          'user_email'=> $m->get_data('user_email'),
	          'user_password'=> $m->get_data('user_password'),
	          'user_mobile'=> $m->get_data('user_mobile'),
	          'user_profile'=> $m->get_data('user_profile'),
	    );

		$q=$d->update("tbl_user",$a1,"user_id='$user_id'");
	if($q==TRUE) {
		header("Location: ../users.php");
	} else {
		header("Location: ../users.php");
	}
}

?>