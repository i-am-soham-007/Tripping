<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

if(isset($deleteinquiry)) {
	$q=$d->delete("tbl_inquiry","inquiry_id='$inquiry_id'");
	if($q==TRUE) {
		header("Location: ../inquires.php");
	} else {
		header("Location: ../inquires.php");
	}
}

// add new user
if(isset($addinquiry)) {

		date_default_timezone_set("Asia/Kolkata");
		$today=date("Y/m/d h:i:sa");
		
		
		$m->set_data('inquiry_name',$inquiry_name);
		$m->set_data('inquiry_email',$inquiry_email);
        $m->set_data('inquiry_mobile',$inquiry_mobile);
        $m->set_data('inquiry_subject',$inquiry_subject);
        $m->set_data('inquiry_message',$inquiry_message);

         $a1= array (
         		
			  'inquiry_name'=> $m->get_data('inquiry_name'),
			  'inquiry_email'=>$m->get_data('inquiry_email'),
	          'inquiry_mobile'=> $m->get_data('inquiry_mobile'),
	          'inquiry_subject'=> $m->get_data('inquiry_subject'),
	          'inquiry_message'=> $m->get_data('inquiry_message'),
	          
	      );

		$q=$d->insert("tbl_inquiry",$a1);
		print_r($a1);
	if($q==TRUE) {
		header("Location: ../inquires.php");
	} else {
		header("Location: ../inquires.php");
	}
}

// Update  user
if(isset($updatepackage)) {

	date_default_timezone_set("Asia/Kolkata");
		$today=date("Y/m/d h:i:sa");
		

		$m->set_data('inquiry_name',$inquiry_name);
		$m->set_data('inquiry_email',$inquiry_email);
        $m->set_data('inquiry_mobile',$inquiry_mobile);
        $m->set_data('inquiry_subject',$inquiry_subject);
        $m->set_data('inquiry_message',$inquiry_message);

         $a1= array (	
			  'inquiry_name'=> $m->get_data('inquiry_name'),
			  'inquiry_email'=>$m->get_data('inquiry_email'),
	          'inquiry_mobile'=> $m->get_data('inquiry_mobile'),
	          'inquiry_subject'=> $m->get_data('inquiry_subject'),
	          'inquiry_message'=> $m->get_data('inquiry_message'),
	      );

		$q=$d->update("tbl_inquiry",$a1,"inquiry_id='$inquiry_id'");
	if($q==TRUE) {
		header("Location: ../inquires.php");
	} else {
		header("Location: ../inquires.php");
	}
}


 ?>