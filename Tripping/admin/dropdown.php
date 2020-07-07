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
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script>
		// console.log('Aasdfwasd');
	function getState(val){
		// alert("Hi");
		$.ajax({
			type: "POST",
			url: "get_state.php",
			data: {'country_id' :val},
			success: function(data){
				$("#state-list").html(data);
			}
		});
	}
	function getCity(val){
		// alert("Hi");
		$.ajax({
			type: "POST",
			url: "get_city.php",
			data: {'state_id' :val},
			success: function(data){
				$("#city-list").html(data);
			}
		});
	}
</script>
<body>
	<h1>Hello</h1>
	<form action="ABC.PHP" method="POST">
		<label>Country: </label>
		<select name="country_id" id="country-list" onchange="getState(this.value);">
			<option value="">Select Country</option>
			<?php
			$q = $d->select("tbl_country");
			while($result = mysqli_fetch_array($q)){
				?>
				<option value="<?php echo $result["country_id"];?>"><?php echo $result["country_name"];?></option>
				<?php 
			} 
			?>
		</select>
		<label>State: </label>
		<select id="state-list">
			<option value="" selected="selected">Select State</option>
		</select>
		<button value="submit">Submit</button>
	</form>
</body>
</html>