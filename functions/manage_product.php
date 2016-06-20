<?php 
	session_start();
	include_once '../classes/class_product.php';
	$product = new Product();
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

		<!-- Css for the forms -->
		<style>
			#addProduct {
				margin-left: 0px;
			}
		</style>

		<!-- Javascripts for functionlity -->
		<script>
			$(document).ready(function(){
				$('#addProduct').click(function(){
					var a = "meron nga";
					$.ajax({
						type: 'POST',
						url: '../processes/product_process.php',
						data: {operation:1, b:a},
						dataType: 'html',
						success: function(response){
							$('#modal_container').html(response);
						}
					});
				});
			});
		</script>
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
								<li><a href = "functions/add_product.php"><span class = "glyphicon glyphicon-cog"></span> Add Brand</a></li>
								<li><a href = "#"><span class = "glyphicon glyphicon-plus"></span> Add Brand</a></li>
						 	</ul>
				  		</li>

						<!-- Orders Dropdown -->
						<li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Orders <span class = "caret"></span></a>
							<ul class = "dropdown-menu">
								<li><a href = "#"><span class = "glyphicon glyphicon-cog"></span> Manage Orders</a></li>
								<li><a href = "#"><span class = "glyphicon glyphicon-plus"></span> Add Orders</a></li>
							</ul>
						</li>
					</ul>
					<!-- Logout Dropdown -->	
					<ul class = "nav navbar-nav pull-right">
						<li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>				
					</ul>
			</div>
		</nav>
	<body>
		<div class = "container">
			<span><h3>DashBoard</h3><hr>  
			<div class = "row">
				<div class = "col-sm-4">
					<div class = "panel panel-primary">
						<div class = "panel-heading">
							<h3 class = "panel-title">Inventory Management</h3>
						</div>
						<div class = "panel-body">
							<button id = "addProduct" class="btn btn-success"><span class = "glyphicon glyphicon-plus"></span> Add Product</button><hr>
							
						</div>	 
					</div>
				</div>
				<div class = "col-sm-8">
					<div class = "panel panel-success">
						<div class = "panel-heading">
							<h3 class = "panel-title">Inventory Stock</h3>
						</div>
						<div class = "panel-body">
							<?php 
								echo $product->$_SESSION['userID'];		
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class = "container">
			<div class = "page-header">
				<h2>Add Product</h2>
			</div>
			<div class = "row">
				<div class = "col-sm-6">
					<div class = "panel panel-default">
						<div class = "panel-heading">
							<h4><span class = " glyphicon glyphicon-edit"></span> Add Product</h4>
						</div>
						<div class = "panel-body">
							 for adding products 
							<form action = "../processes/pr_add_item.php" method = "POST">
								<div class = "form-group">
									<label>Item Name:</label>
									<input type = "text" class = "form-control" placeholder = "Item name" name = "item_name">
								</div>
								<div class = "form-group">
									<label>Category</label>
									<select  class = "form-control" id = "selActCode">
										<option> Coffee </option>
										<option> Shampoos</option>
									</select>
								</div>
								<div class = "form-group">
									<label>Unit:</label>
									<input type = "text" class = "form-control" placeholder = "Unit" name = "unit_item">
								</div>
								<div class = "form-group">
									<label>Location:</label>
									<input type = "text" class = "form-control" placeholder = "Location" name = "location">
								</div>
								<div>
									<button class = "btn btn-primary pull-right" id = "btnAdd">Add Product</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>		
		</div> -->
	</body>
	<footer>
		<div  class = "navbar navbar-inverse">
			<div class = "container-fluid">
				<center> Copyrights / All rights reserved </center>
			</div>
		</div>
	</footer>
</html>