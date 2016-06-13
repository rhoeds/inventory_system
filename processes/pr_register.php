<?php
	
	session_start();
	
	require_once('../classes/class_alert_register.php');
	require_once('../classes/class_mysqli_connection.php');
	require_once('../classes/class_users.php');

	if(isset($_POST['register'])) {	
		$user = new Users();

		$username  = $_POST['username'];
		$password = $_POST['password'];
		$rpassword = $_POST['rpassword'];
		$fname = $_POST['fname'];
	
		if(empty($username) || empty($password) || empty($rpassword) || empty($fname)) {			
			$_SESSION['alert'] = registerAlert::requiredFields();
			header('Location: ../register.php');
		} 
		else if(strlen($username) < 5) {
			$_SESSION['alert'] = registerAlert::userMin();
			header('Location: ../register.php');
		}
		else if(strlen($username) > 30) {
			$_SESSION['alert'] = registerAlert::userMax();
			header('Location: ../register.php');
		}
		else if(strlen($password) < 6) {
			$_SESSION['alert'] = registerAlert::passMin();	
			header('Location: ../register.php');
		}	
		else if($password != $rpassword) {
			$_SESSION['alert'] = registerAlert::missMatch();
			header('Location: ../register.php');
		}
		else {
			$query = mysqli_query($user, "INSERT INTO tbl_account ('', username, password, full_name) VALUES ('', '$username', '$password', '$password', '$fname')");
			if($query) {
				$_SESSION['alert'] = registerAlert::regSuccess();
				header('Location: ../index.php');
			}
		}
	}	

?>		