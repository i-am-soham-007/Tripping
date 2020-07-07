<?php
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

if(isset($register))
{
 $admin_name="vendor";exit();

		move_uploaded_file($_FILES['admin_profile']['tmp_name'], '../../images/V_profile/'.$_FILES['admin_profile']['name']);
		$admin_profile = $_FILES['admin_profile']['name'];
		$m->set_data('role_id',$role_id);
		$m->set_data('admin_name',$admin_name);
        $m->set_data('admin_email',$admin_email);
        $m->set_data('admin_password',$admin_password);
        $m->set_data('admin_mobile',$admin_mobile);
        $m->set_data('admin_profile',$admin_profile);
         $a1= array (
         	  'role_id'=>$m->get_data('role_id'),
         	  'admin_name'=>$m->get_data('admin_name'),
	          'admin_email'=> $m->get_data('admin_email'),
	          'admin_password'=> $m->get_data('admin_password'),
	          'admin_mobile'=> $m->get_data('admin_mobile'),
	          'admin_profile'=> $m->get_data('admin_profile'),
	      );

		$q=$d->insert("tbl_admin",$a1);
	if($q==TRUE) {
		echo "successful insert";
		echo $admin_name;exit();
		echo $admin_created_date;
		header("Location: ../login.php?msg=successful");
	} else {
		echo "error";
		header("Location: ../login.php?msg=error");
	}
}
?>