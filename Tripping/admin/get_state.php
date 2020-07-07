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

		$cd = $_POST["country_id"];
		if($_POST["country_id"] == null) {
	?>
		<option>Select State</option><?php

exit();
} 
		$q = $d->select("tbl_state","country_id=$cd");
		if(mysqli_num_rows($q) > 0)
		{
			while($result = mysqli_fetch_array($q)){
				?>
				<option value="<?php echo $result["state_id"];?>"><?php echo $result["state_name"];?></option>
				<?php 

			}
		}
?>
		
		
	

</body>
</html>