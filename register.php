<!DOCTYPE html>
<html>
<head>
	<?php require_once 'includes/components/head.php' ?>
	<title>Registration</title>
</head>
<body>
	<nav class="navbar navbar-default">
			<div class = "container">
				<div class="navbar-header">
					<a class = "navbar-brand" href = "#">Dacanay Rice Commercial</a>
				</div>
				<div>
					<ul class="nav navbar-nav pull-right">
						<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class = "container mainbody">
			<div class = "page-header">
				<h2>Welcome User</h2>
			</div>
			<div class = "row">	
				<img src = "img/back1.jpg" alt = "Inventory System">
					<div class = "col-sm-4" >
					<div class = "panel  panel-info">
						<div class = "panel-heading">
							<h4>Registration</h4>
						</div>
						<div class = "panel-body">
							<form action = "#" method = "post">
								<div class = "form-group">
									<label>Username:</label>
									<input type = "text" class = "form-control" placeholder = "Username" name = "uname">
								</div>
								<div class = "form-group">
									<label>Enter Password:</label>
									<input type = "password" class = "form-control" placeholder = "Password" name = "ePass">
								</div>
								<div class = "form-group">
									<label>Confirm Password:</label>
									<input type = "password" class = "form-control" placeholder = "Re-enter Password" name = "cPass">
								</div>
								<div class = "form-group">
									<label>Full Name:</label>
									<input type = "password" class = "form-control" placeholder = "Full name" name = "fname">
								</div>
								<div>
									<button type = "submit" class = "btn btn-primary btn-md pull-right" name = "btnLogin">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<?php include_once 'includes/components/footer.php' ?>
</body>
</html>