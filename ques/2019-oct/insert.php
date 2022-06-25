<?php require_once './index.php' ?>


<?php 

	if(isset($_POST['submit'])){
		$name = $_POST['cusName'];
		$ph = $_POST['cusPhone'];
		$email = $_POST['cusEmail'];
		$address = $_POST['cusAddress'];
		$vt = $_POST['vType'];
		$ac = $_POST['ac'];
		$ts = $_POST['ts'];
		$sd = $_POST['sDate'];
		$ed = $_POST['eDate'];
	}


	$sql = ($connection->query("insert into vehicle_booking values ('$name','$ph','$email', '$address', '$vt', '$ac', '$ts', '$sd', '$ed')"));

	if($sql){
		echo "<script>
			alert('Successfull');
		</script>";
	}

?>

<?php $connection->close() ?>