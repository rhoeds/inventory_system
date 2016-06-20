<?php 
	session_start();
	require_once 'classes/class_product.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<!DOCTYPE html>	
		<html lang = "en">
		<meta charset = "utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link style = "text/css" rel = "stylesheet" href = "../libs/bootstrap/css/bootstrap.min.css"/>
		<link style = "text/css" rel = "stylesheet" href = "../libs/bootstrap/css/style.css"/>
		<script src = "../libs/jquery-1.11.3.min.js"></script>
		<script src = "../libs/bootstrap/js/bootstrap.min.js"></script>
		<title>DRC Inventory System</title>
		<title>DRC Inventory System</title>
	</head>
		<nav class = "navbar navbar-default">
			<div class = "container">
				<div class = "navbar-header">
					<a class = "navbar-brand" href = "#">Dashboard</a>
				</div>
				<ul class = "nav navbar-nav">
					<!-- Modules Dropdown -->
					<li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Modules <span class = "caret"></span></a>
						<ul class = "dropdown-menu">								
							<li><a href = "manage_product.php"><span class = "glyphicon glyphicon-cog"></span> Inventory</a></li>
							<li><a href = "manage_category.php"><span class = "glyphicon glyphicon-cog"></span> Manage Category</a></li>
							<li><a href = "#"><span class = "glyphicon glyphicon-plus"></span> Add Brand</a></li>
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
						<li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "../index.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>				
					</ul>
			</div>
		</nav>
	<body>
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-4">
					<div class = "panel panel-primary">
						<div class = "panel-heading">
							<h3 class = "panel-title">Manage Category</h3>
						</div>
						<div class = "panel-body">
							<div class = "col-lg-12" style = "padding-left: 0; padding-right: 0;">
								<form action = "#" method = "POST" >
								<div class = "col-lg-4 pull left" style = "padding-left: 0 ;">
									<span class = "pull-left">
										<label class = "col-lg-12 control-label" style = "padding-right: 0;">
											<!-- Search input form -->
											<input type = "text" value = "" placeholder = " Search for Product Brand/Category/Location" id = "searchProd" style = "height: 41px; width: 240%; font-size: 15px;">
										</label>
									</span>
								</div>
								<button class = "btn btn-info">Search</button>
								<form>
								<div class = "col-lg-5 pull-right">
									<div class="pull-right" >
										<button class="btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Add Category</button> 
									</div>
							    </div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

		<?php include '../includes/components/footer.php' ?>
</html>