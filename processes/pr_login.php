<?php 
	
	session_start();
	require_once('../classes/class_users.php');
	require_once('../classes/class_alert.php');
	require_once('../classes/class_mysqli_connection.php');

	if(isset($_POST['username']) && isset($_POST['password'])); {
		$user = new Users();

		$username = $user->sanitize($_POST['username']);
		$password = $user->sanitize($_POST['password']);
		//Check  if the username is available
		if($user->searchUser($username)){
			//Reset retries is authorization is successfull
			if(($user->retries)>0){
				//Check if the password is correct
				if($user->comparePassword($password)){

				header('Location: ../home.php');

				}else{
				$user->updateRetries();
				$_SESSION['alert'] = Alert::loginFailedShowRetries($user->retries-1);
				header('Location: ../index.php');
				}
			}else{
				$_SESSION['alert'] = Alert::accountLocked();
				header('Location: ../index.php');
			}
		}else{
			$_SESSION['alert'] = Alert::loginFailed();
			header('Location: ../index.php');
		}
	}

	//echo "I am executed";
?>