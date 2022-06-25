<?php require './connect.php' ?>

<?php

	if(isset($_POST['send'])){
		$name = $_POST['name'];
		$grade = $_POST['grade'];

		// $sql1 = ($connection->query("create table GradeTable (
		// 	Name varchar(255),
		// 	Grade char(20),
		// 	Status varchar(255)
		// )"));

		$status = "";

		switch ($grade){
			case 'A':
				$status = "High Pass";
				break;
			case 'B':
				$status = "Medium Pass";
				break;
			case 'C':
				$status = "Low Pass";
				break;
			case 'F':
				$status = "Fail";
				break;
			default:
				$status = "Invalid";
		};

		$sql2 = ($connection->query("insert into GradeTable values ('$name', '$grade', '$status')"));

		setcookie("Student", "$name", time() + (86400 * 1), "/");

		echo $_COOKIE['Student'];
		
		session_start();

		$_SESSION['name'] = $name;

		if($sql2){
			header('Location: ./test2.php');
		}else{
			die("table update failed");
		}
	}

?>

<?php $connection->close() ?>