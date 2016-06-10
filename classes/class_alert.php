<?php 
	class Alert{
		public static function accountLocked(){
			$alert = '
				<div class = "alert alert-danger alert-dismissible" role = "alert">
					<button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
						<span area-hidden = "true">&times;</span>
					</button>
					<Strong>Account is Locked</Strong> Please contact your system administrator.
				</div>
			';
			return $alert;
		}

		public function 
	}
?>