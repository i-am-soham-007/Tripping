<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

// delete user
if(isset($deletCat)) {
	$q=$d->delete("category_master","category_id='$category_id'");
	if($q==TRUE) {
		header("Location: ../categoris.php");
	} else {
		header("Location: ../categoris.php");
	}
}

// add new user
if(isset($addCat)) {


	move_uploaded_file($_FILES['category_photo']['tmp_name'], '../img/category/'.$_FILES['category_photo']['name']);

		$category_photo = $_FILES['category_photo']['name'];

		$m->set_data('category_name',$category_name);
        $m->set_data('category_photo',$category_photo);

         $a1= array (
	          'category_name'=> $m->get_data('category_name'),
	          'category_photo'=> $m->get_data('category_photo')
	      );

		$q=$d->insert("category_master",$a1);
	if($q==TRUE) {
		header("Location: ../categoris.php");
	} else {
		header("Location: ../categoris.php");
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