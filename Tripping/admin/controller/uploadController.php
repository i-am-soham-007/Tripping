<?php 

include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

// delete user
if(isset($delete)) {
	$q=$d->delete("tbl_gallery","gallery_id='$gallery_id'");
	if($q==TRUE) {
		header("Location: ../gallery.php");
	} else {
		header("Location: ../gallery.php");
	}
}

if(isset($upload)) {
	move_uploaded_file($_FILES['gallery_photo']['tmp_name'], '../../images/Gallery/'.$_FILES['gallery_photo']['name']);

		$gallery_photo = $_FILES['gallery_photo']['name'];
		$m->set_data('gallery_name',$gallery_name);
        $m->set_data('gallery_photo',$gallery_photo);

         $a1= array (
	          'gallery_name'=> $m->get_data('gallery_name'),
	          'gallery_photo'=> $m->get_data('gallery_photo')
	      );

		$q=$d->insert("tbl_gallery",$a1);
	if($q==TRUE) {

		header("Location: ../gallery.php");
	} else {
	
		header("Location: ../gallery.php");
	}
}

if(isset($update)) {

	if(file_exists($_FILES['gallery_photo']['tmp_name'])) {
		move_uploaded_file($_FILES['gallery_photo']['tmp_name'], '../../images/Gallery/'.$_FILES['gallery_photo']['name']);

		$gallery_photo = $_FILES['gallery_photo']['name'];
		} else {
		$gallery_photo= $_SESSION['gallery_photo'];
		}


		$m->set_data('gallery_id',$gallery_id);
		$m->set_data('gallery_name',$gallery_name);
        $m->set_data('gallery_photo',$gallery_photo);
     

         $a1= array (
         	'gallery_id' => $m->get_data('gallery_id'),
	          'gallery_name'=> $m->get_data('gallery_name'),
	          'gallery_photo'=> $m->get_data('gallery_photo')
	      );

		$q=$d->update("tbl_gallery",$a1,"gallery_id='$gallery_id'");
	if($q==TRUE) {
		//print_r($q);
		
		header("Location: ../gallery.php");
	} else {
		
		header("Location: ../gallery.php");
	}
}


 ?>