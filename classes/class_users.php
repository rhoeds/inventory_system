<?php 
	include_once 'class_MYSQLI_connection.php';
	class Users extends MYSQLI_connection{
		//local variables for checking login conditions
		public $id;
		public $username;
		public $pwd;
		public $retries;
		public $isLoggedIn;
		public $userType;
		public $memType;

		//Functions for checking username & password
		public function searchUser($prUsername){
			$success = false;
			$qry = "SELECT * FROM tbl_account WHERE username = '$prUsername';";
			$result = $this->con->query($qry);
			if ($result){
				//checking result
				if ($result->num_rows>0) {
					$success = true;
					$row = $result->fetch_assoc();
					$this->id = $row ['user'];
					$this->username = $row ['username'];
					$this->pwd = $row ['pwd'];
					$this->retries = $row ['retries'];
					$this->isLoggedIn = $row ['isloggedin'];
					$this->userType = $row ['user_type'];
				}
			}else{
				$this->showError(3,0);
			}
			return $success;
		}

		public function searchByID($userID){
			$success = false;
			$qry = "SELECT * FROM tbl_account WHERE user = $userID;";
			$result = $this->con->query($qry);
			if ($result){
				if ($result->num_rows>0){
					$success = true;
					$row = $result->fetch_assoc();
					$this->id = $row['user'];
					$this->username = $row['username'];
					$this->pwd = $row['pwd'];
					$this->retries = $row['retries'];
					$this->isLoggedIn = $row['is_loggedin'];
					$this->userType = $row['user_type'];
				}
			}else{
				$this->showEror(3,0);
			}
			return $success;
		}

		//check password
		public function updateRetries(){
			$success = false;
			$sql = "UPDATE tbl_account set retries = retries-1 WHERE user = $this->id";
			$result = $this->con->query($sql);
			if($result){
				$success = true;
			}else{
				$this->showError(4,0);
			}
			return $success;
		}

		public function resetRetries(){
			$success = false;
			$sql = "UPDATE tbl_account set retries = 5 WHERE user = $this->id";
			$result = $this->con->query($sql);
			if($result){
				$success = true;
			}else{
				$this->showError(4,0);
			}
			return $success;
		}

		
	}
?>