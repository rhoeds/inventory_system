<?php 
	session_start();
	require_once ('../classes/class_mysqli_connection.php');
	require_once ('../classes/class_users.php');

	if(isset($_POST['btnAdd'])){
		$prod_name = $_POST['item_name'];
		echo $prod_name;
	}else
		echo "wala namn";



?>