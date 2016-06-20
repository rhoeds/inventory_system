<?php 
	session_start();
	require_once '../classes/class_users.php';
	require_once '../classes/class_mysqli_connection.php';

	if(isset($_POST['operation'])){

		$con = new MYSQLI_connection();

		$op = $_POST['operation'];

		if($op==1){
			echo "meron na dito";

		}
	}

?>