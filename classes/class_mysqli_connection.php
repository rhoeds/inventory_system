<?php 
	class MYSQLI_connection {
		private $hostname;
		private $port;
		private $userID;
		private $pwd;
		private $db;
		private $err;
		public $con;

			public function connect($prHost = "localhost", $prPort = "3306", $prUser = "root", $prPass = "", $prDB = "db_ims"){
				$success = false;
				$this->hostname = $prHost;
				$this->userID = $prUser;
				$this->pwd = $prPass;
				$this->db = $prDB;
				$this->port = $prPort;

				$this->conn = new mysqli($this->hostname, $this->userID, $this->pwd, $this->db, $this->port);

				if($this->conn){
					$success = true;
				}else{
					$this->err = mysqli_error($this->conn);
					$this->showError(1,0);
				}
				$this->con = $this->conn;
			}

			public function showError($errNo, $showErr = 0){
				$errMsg = "";
				if($showErr == 1){
					die("Unable to connect to the server -".$errMsg);
				}else if ($errNo == 2){
					die("Unable to connect to the server. Database Connection Failed. ".$errMsg);
				}else if ($errNo == 3){
					die("Error in fetching a record ".$errMsg);
				}else if ($errNo == 4){
					die("Error in updating record ".$errMsg);
				}else if ($errNo == 5){
					die("Error in Inserting a record ".$errMsg);
				}else if ($errNo == 6){
					die("Error in deleting a record ".$errMsg);
				}else if ($errNo == 7){
					die("Error in Sql query");
				}else{
					die("Undefined Error -".$errMsg);
				}
			}
			public function sanitize($input){
				$input = @trim($input); //remove trailing spaces
				if (get_magic_quotes_gpc()) {
					$input(stripslashes($input)); //removes slashes
				}
				return $this->con->real_escape_string($input); //removes and escapes single qoutes
			}

			public function closeConnection(){
				mysqli_close($this->conn);
			}

			public function __construct(){
				$this->connect();
			}

			public function _desttruct(){
				$this->closeConnection();
			}
	}	
?>