<?php 
session_start();
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

// delete user
if(isset($loginuser)) {
	$q=$d->select("tbl_user","user_mobile='$user_mobile' AND user_password='$user_password' AND user_status='1'");
	$data=mysqli_fetch_array($q);
	if($data==TRUE) {
		$_SESSION['user_id'] = $data['user_id'];
		$_SESSION['user_name'] = $data['user_name'];
		$_SESSION['user_mobile'] = $data['user_mobile'];
		$_SESSION['user_email'] = $data['user_email'];
		$_SESSION['user_profile'] = $data['user_profile'];
		echo $_SESSION['successMsg'] = "Welcome ".$data['user_name'];
	header("location:../index.php?msg=login Success..");
	} else {
		header("location:../login2.php?msg=Wrong details..");
	}
	
}

if(isset($forgotReq)) {
	$q=$d->select("tbl_user","user_email='$user_email'");
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
		$m->set_data('user_forgot_email',$user_email);
		$m->set_data('user_forgot_token',$token);
		$m->set_data('user_forgot_expire_date',date("Y/m/d"));

         $a1= array (
	          'user_forgot_email'=> $m->get_data('user_forgot_email'),
	          'user_forgot_token'=> $m->get_data('user_forgot_token'),
	          'user_forgot_expire_date'=> $m->get_data('user_forgot_expire_date'),
	      );

		$q=$d->insert("user_forgot_password",$a1);
		// send mail here
		 $link = "http://localhost/Project/Tripping/Demo/user/setPassword.php?token=$token";

		$subject = "Forgot Password";
		 $txt = "Hello $data[user_name]! \n we have receive forgot password request for silverwing admin panel.\n Click bellow link to reset your password \n $link";
		$headers = "From: contact@silverwingtechnologies.com";

		mail($user_email,$subject,$txt,$headers);
		$user_mobile = $data['user_mobile'];
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
	          'user_password'=> $m->get_data('password')
	         
	      );
         $q=$d->update("tbl_user",$a3,"user_email='$user_email'");    

	if($q==TRUE) {

         $q=$d->delete("user_forgot_password","user_forgot_email='$user_email'");
        
		header("location:../login.php?msg=Password Changed");
	} else {
		header("location:../login.php?msg=Wrong details..");
	}
	
}



 ?>
