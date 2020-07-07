<?php 
session_start();
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);
$n="";
// delete user
if(isset($loginAdmin)) {
	$q=$d->select("tbl_admin","admin_mobile='$admin_mobile' AND admin_password='$admin_password' AND role_id='$role_id'");
		$data=mysqli_fetch_array($q);
		if($data > 0) {
			$_SESSION['role_id'] = $data['role_id'];
			$_SESSION['admin_id'] = $data['admin_id'];
			$_SESSION['admin_name'] = $data['admin_name'];
			$_SESSION['admin_mobile'] = $data['admin_mobile'];
			$_SESSION['admin_email'] = $data['admin_email'];
			$_SESSION['admin_profile'] = $data['admin_profile'];
			$_SESSION['successMsg'] = "Welcome ".$data['admin_name'];
			
			
				header("location:../index.php?msg=login Success..");
				} 
			
			else {
				header("location:../login.php?msg=Wrong details..");
		}
}


if(isset($forgotReq)) {
	$q=$d->select("tbl_admin","admin_email='$admin_email'");
	$data=mysqli_fetch_array($q);

	if($data==TRUE) {
		function generateRandomString($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}
		$token= generateRandomString();
		// store token  in db
		$m->set_data('vendor_forgot_email',$admin_email);
		$m->set_data('vendor_forgot_token',$token);
		$m->set_data('vendor_forgot_expire_date',date("Y/m/d"));

         $a1= array (
	          'vendor_forgot_email'=> $m->get_data('vendor_forgot_email'),
	          'vendor_forgot_token'=> $m->get_data('vendor_forgot_token'),
	          'vendor_forgot_expire_date'=> $m->get_data('vendor_forgot_expire_date'),
	      );

		$q=$d->insert("vendor_forgot_password",$a1);
		// send mail here
		 $link = "http://localhost/Project/Tripping/Demo/admin/setPassword.php?token=$token";

		$subject = "Forgot Password";
		 $txt = "Hello $data[admin_name]! \n we have receive forgot password request for silverwing admin panel.\n Click bellow link to reset your password \n $link";
		$headers = "From: contact@silverwingtechnologies.com";

		mail($admin_email,$subject,$txt,$headers);
		$admin_mobile = $data['admin_mobile'];
		// send sms
		// $msg=urlencode($txt);
	 //      $sms= file_get_contents("https://www.smsidea.co.in/smsstatuswithid.aspx?mobile=9737564498&pass=sadfsda&senderid=SMSBUZ&to=$admin_mobile&msg=$msg");

		header("location:../forgot.php?msg=Mail send  Successfully..");
	} else {
		header("location:../login.php?msg=Wrong email..");
	}

}

// set new password 
if(isset($setNamePassword)) {
	// print_r($_POST);
		$m->set_data('password',$password);
		
         $a3= array (
	          'admin_password'=> $m->get_data('password')
	         
	      );
         $q=$d->update("tbl_admin",$a3,"admin_email='$admin_email'");    

	if($q==TRUE) {

         $q=$d->delete("forgotpassword","email='$admin_email'");
        
		header("location:../login.php?msg=Password Changed");
	} else {
		header("location:../login.php?msg=Wrong details..");
	}
	
}



 ?>
 ?>
