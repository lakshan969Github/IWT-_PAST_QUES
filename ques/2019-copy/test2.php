<?php require './connect.php' ?>

<?php 

	session_start();

	$sql = ($connection->query("select * from GradeTable where Name = '$_SESSION[name]'"));

	if($sql){
		if(mysqli_num_rows($sql) === 1){
			while($row = mysqli_fetch_assoc($sql)){
				echo $row['Name'];
				echo $row['Grade'];
				echo $row['Status'];
			}
		}else{
			echo "error";
		}
	}

?>


<?php $connection->close() ?>