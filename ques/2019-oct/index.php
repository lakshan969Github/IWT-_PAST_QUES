<?php

	$connection = mysqli_connect('Localhost', 'root', '', 'vehicle_db');

	if ($connection->connect_error) {
		die('Database not connected'. $connection->connect_error);
	}

?>