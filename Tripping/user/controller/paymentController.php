<?php 
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);


// add new user
if(isset($payment)) {

		$m->set_data('firstname',$firstname);
        $m->set_data('amount',$amount);
        $m->set_data('txnid',$txnid);
        $m->set_data('mkey',$key);
        $m->set_data('productinfo',$productinfo);
        $m->set_data('email',$email);


         $a1= array (
	          'firstname'=> $m->get_data('firstname'),
	          'amount'=> $m->get_data('amount'),
	          'txnid'=> $m->get_data('txnid'),
	          'mkey'=> $m->get_data('mkey'),
	          'productinfo'=> $m->get_data('productinfo'),
	          'email'=> $m->get_data('email'),
	      );

		$q=$d->insert("package_booking",$a1);
	if($q==TRUE) {
		header("Location: ../index.php");
	} else {
		header("Location: ../index.php");
	}
}


?>