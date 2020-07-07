<?php
include_once 'lib/dbconnect.php';
include_once 'lib/dao.php';
include_once 'lib/model.php';
$d=new dao();
$m= new model();
//extract($_POST);
$conn = mysqli_connect("localhost","root","","tripping");

$val = $_POST['val'];
$user_id = $_POST['user_id'];

/*$q=$d->update("tbl_user","user_status='$val'","user_id='$user_id'");
  $row=mysqli_fetch_array($q);
  extract($row);*/
$sql = "UPDATE tbl_user SET user_status='$val' WHERE user_id='$user_id'";
$q = mysqli_query($conn, $sql);
if($q)
{	
	//$q1=select("tbl_user","user_id='$user_id'");

	$sql1 = "SELECT * FROM tbl_user WHERE user_id='$user_id'";
	$q1 = mysqli_query($conn, $sql1);
	$data = mysqli_fetch_array($q1);
	echo $data['user_status'];
}
?>