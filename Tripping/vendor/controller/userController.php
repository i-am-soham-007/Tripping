<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

// delete user
if(isset($deleteUser)) {
	$q=$d->delete("users","userId='$userId'");
	if($q==TRUE) {
		header("Location: ../users.php");
	} else {
		header("Location: ../users.php");
	}
}

// add new user
if(isset($addUser)) {

		$m->set_data('user_firstname',$name);
        $m->set_data('user_mobile',$mobile);
        $m->set_data('user_email',$email);

         $a1= array (
	          'user_firstname'=> $m->get_data('user_firstname'),
	          'user_mobile'=> $m->get_data('user_mobile'),
	          'user_email'=> $m->get_data('user_email'),
	      );

		$q=$d->insert("users",$a1);
	if($q==TRUE) {
		header("Location: ../users.php");
	} else {
		header("Location: ../users.php");
	}
}

// Update  user
if(isset($updateUser)) {

		$m->set_data('name',$name);
        $m->set_data('mobile',$mobile);
        $m->set_data('email',$email);

         $a1= array (
	          'name'=> $m->get_data('name'),
	          'mobile'=> $m->get_data('mobile'),
	          'email'=> $m->get_data('email'),
	      );

		$q=$d->update("users",$a1,"userId='$userId'");
	if($q==TRUE) {
		header("Location: ../users.php");
	} else {
		header("Location: ../users.php");
	}
}


 ?>