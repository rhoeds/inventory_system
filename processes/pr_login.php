<?php 
	
	session_start();
	require_once('../classes/class_users.php');
	require_once('../classes/class_alert.php');
	require_once('../classes/class_mysqli_connection.php');

	if(isset($_POST['username']) && isset($_POST['password'])); {
		$user = new Users();

		$username = $user->sanitize($_POST['username']);
		$password = $user->sanitize($_POST['password']);
		
		if($user->searchUser($username)) {

		} else {
			$_SESSION['alert'] = Alert::loginFailed();
			header('Location: ../index.php');
		}
	}

	//echo "I am executed";
?>