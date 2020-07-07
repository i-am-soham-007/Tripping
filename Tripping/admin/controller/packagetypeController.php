<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

// delete user
if(isset($deletepackagetype)) {
	$q=$d->delete("tbl_package_type","package_type_id='$package_type_id'");
	if($q==TRUE) {
		header("Location: ../packagetypes.php");
	} else {
		header("Location: ../packagetype.php");
	}
}

// add new user
if(isset($addpackagetype)) {

		
		$m->set_data('package_type_name',$package_type_name);
		$m->set_data('package_type_description',$package_type_description);
       
         $a1= array (
			  'package_type_name'=> $m->get_data('package_type_name'),
			  'package_type_description'=>$m->get_data('package_type_description'),
	        
	      );

		$q=$d->insert("tbl_package_type",$a1);
	if($q==TRUE) {
		header("Location: ../packagetypes.php");
	} else {
		header("Location: ../packagetypes.php");
	}
}

// Update  user
if(isset($updatepackagetype)) {

		$m->set_data('package_type_name',$package_type_name);
		$m->set_data('package_type_description',$package_type_description);
        	
        	$a1= array (
	         'package_type_name'=> $m->get_data('package_type_name'),
			  'package_type_description'=>$m->get_data('package_type_description'),
	          );

		$q=$d->update("tbl_package_type",$a1,"package_type_id='$package_type_id'");
	if($q==TRUE) {
		header("Location: ../packagetypes.php");
	} else {
		header("Location: ../packagetypes.php");
	}
}


 ?>