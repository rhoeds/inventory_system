<?php

	class registerAlert {

		public static function requiredFields() {
			$alert = '
				<div class = "alert alert-danger alert-dismissible" role = "alert">
					<button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
						<span area-hidden = "true">&times;</span>
					</button>
					<strong>Fields are required.</strong> 
				</div>
			';
			return $alert;
		}

		public function userMin() {
			$alert = '
				<div class = "alert alert-danger alert-dismissible" role = "alert">
					<button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
						<span area-hidden = "true">&times;</span>
					</button>
					<strong>Username must have atleast 5 characters</strong> 
				</div>
			';
			return $alert;
		}

		public function userMax() {
			$alert = '
				<div class = "alert alert-danger alert-dismissible" role = "alert">
					<button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
						<span area-hidden = "true">&times;</span>
					</button>
					<strong>Username must not exceed 30 characters</strong> 
				</div>
			';
			return $alert;
		}

		public function passMin() {
			$alert = '
				<div class = "alert alert-danger alert-dismissible" role = "alert">
					<button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
						<span area-hidden = "true">&times;</span>
					</button>
					<strong>Password must have atleast 6 characters</strong> 
				</div>
			';
			return $alert;
		}

		public function missMatch() {
			$alert = '
				<div class = "alert alert-danger alert-dismissible" role = "alert">
					<button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
						<span area-hidden = "true">&times;</span>
					</button>
					<strong>Password must match repeat password</strong> 
				</div>
			';
			return $alert;
		}

		public function regSuccess() {
			$alert = '
				<div class = "alert alert-primary alert-dismissible" role = "alert">
					<button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
						<span area-hidden = "true">&times;</span>
					</button>
					<strong>Registration Successful</strong> 
				</div>
			';
			return $alert;
		}

	}



?>