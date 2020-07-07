<?php
include_once '../lib/dao.php';
include_once '../lib/model.php';

$d = new dao();
$m = new model();
extract($_POST);

if(isset($search))
{

		//echo $name_search;
		echo $search2;
		$count=0;
$q=$d->SELECT("tbl_package","package_from='$name_search' || package_to='$search2'");
            $i=0;
            while ($row=mysqli_fetch_array($q)) {
                extract($row);
                $i++;
                echo"-";	
				echo  $package_from;
               	echo "<br>";
				echo $package_name;
				echo "<br>";
				echo $package_to;
  $count++;
            }
            echo "<br>";
            echo $count;

}
?>