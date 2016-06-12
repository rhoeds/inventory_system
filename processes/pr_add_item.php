<?php 
	session_start();
	require_once ('../classes/class_mysqli_connection.php');
	require_once ('../classes/class_users.php');

	if(isset($_POST['btnAdd'])){
		echo "mabalin ada ka jay process add";
	}else
		echo "wala namn";



?>