<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php require_once 'includes/components/head.php' ?>
		<title>DRC Inventory System</title>
	</head>
		<nav class = "navbar navbar-default">
			<div class = "container">
				<div class = "navbar-header">
					<a class = "navbar-brand" href = "#">Inventory Management</a>
				</div>
				<ul class = "nav navbar-nav">
					<!-- Modules Dropdown -->
					<li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Modules <span class = "caret"></span></a>
						<ul class = "dropdown-menu">								
							<li><a href = "manage_category.php"><span class = "glyphicon glyphicon-cog"></span> Modules</a></li>
							<li><a href = "#"><span class = "glyphicon glyphicon-plus"></span> Add Category</a></li>
							<li><a href = "#"><span class = "glyphicon glyphicon-cog"></span> Edit Category</a></li>
					 	</ul>
			  		</li>

					<!-- Orders Dropdown -->
					<li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Orders <span class = "caret"></span></a>
						<ul class = "dropdown-menu">
							<li><a href = "#"><span class = "glyphicon glyphicon-cog"></span> Manage Orders</a></li>
							<li><a href = "#"><span class = "glyphicon glyphicon-cog"></span> Edit Orders</a></li>
						</ul>
					</li>
				</ul>
					<!-- Logout Dropdown -->	
					<ul class = "nav navbar-nav pull-right">
						<li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>				
					</ul>
			</div>
		</nav>
		
<div class = "container">
	<div class = "page-header">
		<h2>Admin Dashboard</h2>
	</div>		
</div>
	<body>
		
	</body>

		<?php include 'includes/components/footer.php' ?>
</html>