<?php
	
	$connection = mysqli_connect("Localhost", "root", "", "test");

	if($connection->connect_error){
		die("Connection failed". $connection->maxdb_connect_error);
	}

?>