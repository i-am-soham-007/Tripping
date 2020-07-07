<?php
require 'lib/dao.php';
require 'lib/model.php';
$d= new dao();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$sd=$_POST["state_id"];
		if($_POST["state_id"]==null){
	?>
	<option>Select city</option><?php
exit();
}
	$q=$d->select("tbl_city","state_id=$sd");

if(mysqli_num_rows($q) > 0)
		{
			while($result = mysqli_fetch_array($q)){
				?>
				<option value="<?php echo $result["city_id"];?>"><?php echo $result["city_name"];?></option>
				<?php 
			

			}
		}
?>