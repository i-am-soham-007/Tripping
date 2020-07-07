<?php

class dbconnect
{
    function connect()
    {
        $connection=mysqli_connect("localhost","root","","tripping");
				return $connection;
    }
}
?>