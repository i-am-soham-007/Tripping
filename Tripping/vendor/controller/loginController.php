<?php 
session_start();
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

// delete user
if(isset($loginVendor)) {
	$q=$d->select("tbl_vendor","vendor_mobile='$vendor_mobile' AND vendor_password='$vendor_password'");
	$data=mysqli_fetch_array($q);
	if($data==TRUE) {
		$_SESSION['vendor_id'] = $data['vendor_id'];
		$_SESSION['vendor_name'] = $data['vendor_name'];
		$_SESSION['vendor_mobile'] = $data['vendor_mobile'];
		$_SESSION['vendor_email'] = $data['vendor_email'];
		$_SESSION['vendor_profile'] = $data['vendor_profile'];
		$_SESSION['successMsg'] = "Welcome ".$data['vendor_name'];
	//// for single notification
		//$n->noti("d77ywJPn1P4:APA91bHf4s4q3B-zjyVzPXE0kDLgOSkWqvSLWC022pxOK_apWo9TAGA_X8KKYxBjfUKxAbaMWUfOYRMrzURKW5GU9Hn-S4SGexatDGlrdjvENl5D5_4n7BKGbaQP9IDy3EOF8AGKixry","this is title","this descripion","","","");
		
	header("location:../index.php?msg=login Success..");
	} else {
		echo "erro";
	header("location:../login.php?msg=Wrong details..");
	}
	
}


 ?>