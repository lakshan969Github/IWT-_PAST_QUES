<?php require_once './index.php'?>

<?php

	$sql = ($connection->query("select * from vehicle_booking where Cname = 'Roshan'"));

	if($sql){
		while($row = mysqli_fetch_assoc($sql)){
			echo "<h2>Customer Details</h2>";
			echo "$row[Cname]. <br>";
			echo "$row[phoneNo]. <br>";
			echo "$row[Cemail]. <br>";
			echo "$row[Caddress]. <br>";
			echo "<h2>Vehicle Details</h2>";
			echo "$row[vehicleType]. <br>";
			echo "$row[airCondiotion]. <br>";
			echo "$row[tourStaff]. <br>";
			echo "$row[startDate]. <br>";
			echo "$row[endDate]. <br>";
		}
	}

?>

<?php $connection->close()?>