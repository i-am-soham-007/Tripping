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
if(isset($addcontact)) {

		$m->set_data('name',$name);
        $m->set_data('email',$email);
        $m->set_data('msg',$msg);

         $a1= array (
	          'name'=> $m->get_data('name'),
	          'email'=> $m->get_data('email'),
	          'msg'=> $m->get_data('msg'),
	      );

		$q=$d->insert("tbl_contact",$a1);
	if($q==TRUE) {
		header("Location: ../contact.php");
	} else {
		header("Location: ../contact.php");
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