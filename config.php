<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname = "prediction";

	$con=mysqli_connect($servername,$username,$password,$dbname);

	if(!$con)
	{
	   die('Could not Connect My Sql:' .mysql_error());
	}
?>
   
