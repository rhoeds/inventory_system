<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php require_once 'includes/components/head.php' ?>
		<title>Index</title>
	</head>
	<body>	
		<nav class="navbar navbar-default">
			<div class = "container">
				<div class="navbar-header">
					<a class = "navbar-brand" href = "#">Dacanay Rice Commercial</a>
				</div>
				<div>
					<ul class="nav navbar-nav pull-right">
						<li><a href="register.php"><span class="glyphicon glyphicon-pencil"></span> Register</a></li>
						<li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class = "container mainbody">
			<h2>Welcome User</h2>
			<hr>
			<div class = "row">	
				<img src = "img/back1.jpg" alt = "Inventory System">
					<div class = "col-sm-4" >
					<div class = "panel  panel-info">
						<div class = "panel-heading">
							<h4>Login</h4>
						</div>
						<div class = "panel-body">
							<!-- The session will contain bootstrap alert-->
							<?php 
								echo isset($_SESSION['alert']) ? $_SESSION['alert']:null;
								unset($_SESSION['alert'])
							?>
							<!-- Login Form -->
							<form action = "processes/pr_login.php" method = "post">
								<div class = "form-group">
									<label>Username:</label>
									<input type = "text" required = "username" class = "form-control" placeholder = "Username" name = "username">
								</div>
								<div class = "form-group">
									<label>Password:</label>
									<input type = "password" required = "password" class = "form-control" placeholder = "Password" name = "password">
								</div>
								<div>
									<button type = "submit" class = "btn btn-primary btn-md pull-right" name = "btnLogin">Sign-in</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><br /><br />	
		<?php include 'includes/components/footer.php' ?>
	</body>
</html>