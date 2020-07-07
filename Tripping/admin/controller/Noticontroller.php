<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

// delete user
if(isset($deleteNoti)) {
	$q=$d->delete("Notification","Notification_Id='$Notification_Id'");
	if($q==TRUE) {
		header("Location: ../Notifys.php");
	} else {
		header("Location: ../Notifys.php");
	}
}

// add new user
if(isset($addNoti)) {

		$m->set_data('Notification_Title',$Notification_Title);
        $m->set_data('Description',$Description);
         $a1= array (
	          'Notification_Title'=> $m->get_data('Notification_Title'),
	          'Description'=> $m->get_data('Description'),
	      );

		$q=$d->insert("Notification",$a1);
	if($q==TRUE) {
		header("Location: ../Notifys.php");
	} else {
		header("Location: ../Notifys.php");
	}
}
/*
// Update  user
if(isset($UpdateNoti)) {

		$m->set_data('Notification_Title',$Notification_Title);
        $m->set_data('Description',$Description);
        $m->set_data('email',$email);

         $a1= array (
	          'Notification_Title'=> $m->get_data('Notification_Title'),
	          'Description'=> $m->get_data('Description'),
	      );

		$q=$d->update("Notification",$a1,"Notification_Id='$Notification_Id'");
	if($q==TRUE) {
		header("Location: ../Notifys.php");
	} else {
		header("Location: ../Notifys.php");
	}
}*/


 ?>