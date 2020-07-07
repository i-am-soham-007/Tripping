<?php 
session_start();
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);
// delete user
if(isset($deleteagency)) {
	$q=$d->delete("tbl_agency","agency_id='$agency_id'");
	if($q==TRUE) {
		header("Location: ../agencies.php");
	} else {
		header("Location: ../agencies.php");
	}
}

// add new user
if(isset($addagency)) {

	$count=0;
	$error= array();
	$extension=array("jpg","jpeg","png");
	$ext=pathinfo($_FILES["agency_logo"]["name"],PATHINFO_EXTENSION);
	/*$fileinfo = @getimagesize($_FILES["agency_logo"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
	 if ($width > "300" || $height > "200") {
        $response = array(
            "type" => "error",
            "message" => "Image dimension should be within 300X200"
        );
    */
    
	if(!in_array($ext, $extension)){
		$count++;
		echo $_SESSION['errorMsg']="FIle type is invalid , Please select jpg ,jpeg or png only.";
		header("Location: ../addagency.php");
	}
	if($count==0){

		$temp=$_FILES["agency_logo"]["name"];
		$agency_logo=round(microtime(true)).".".$temp;
		move_uploaded_file($_FILES["agency_logo"]["tmp_name"],"../../images/Agency/".$agency_logo);
	
		$m->set_data('admin_id',$admin_id);
		$m->set_data('agency_name',$agency_name);
		$m->set_data('agency_address',$agency_address);
        $m->set_data('agency_logo',$agency_logo);
        
         $a1= array (
         	  'admin_id'=> $m->get_data('admin_id'),
			  'agency_name'=> $m->get_data('agency_name'),
			  'agency_address'=>$m->get_data('agency_address'),
	          'agency_logo'=> $m->get_data('agency_logo'),
	      );

		$q=$d->insert("tbl_agency",$a1);
	if($q==TRUE) {
		header("Location: ../agencies.php");
	} else {
		header("Location: ../agencies.php");
	}
}//else part of count
}

// Update  user
if(isset($updateagency)) {

	move_uploaded_file($_FILES['agency_logo']['tmp_name'], '../../images/Agency/'.$_FILES['agency_logo']['name']);

		$agency_logo = $_FILES['agency_logo']['name'];

		$m->set_data('agency_name',$agency_name);
		$m->set_data('agency_address',$agency_address);
        $m->set_data('agency_logo',$agency_logo);
        $m->set_data('package_created_date',$package_created_date);

         $a1= array (
	         'agency_name'=> $m->get_data('agency_name'),
			  'agency_address'=>$m->get_data('agency_address'),
	          'agency_logo'=> $m->get_data('agency_logo'),
	          'package_created_date'=>$m->get_data('package_created_date'),
	      );

		$q=$d->update("tbl_agency",$a1,"agency_id='$agency_id'");
	if($q==TRUE) {
		header("Location: ../agencies.php");
	} else {
		header("Location: ../agencies.php");
	}
}


 ?>