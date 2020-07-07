<?php
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

if(isset($register))
{
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
if($q==TRUE)
{
	echo "successful insert";
	header("location:../login2.php?msg=registration Success..");
}else{
	echo "something wrong";
	header("location:../registration.php?msg=something wrong..");
	}
}
?>