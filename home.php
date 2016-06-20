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
					<a class = "navbar-brand" href = "#">Dashboard</a>
				</div>
				<ul class = "nav navbar-nav">
					<!-- Modules Dropdown -->
					<li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Modules <span class = "caret"></span></a>
						<ul class = "dropdown-menu">								
							<li><a href = "functions/manage_product.php"><span class = "glyphicon glyphicon-cog"></span> Inventory</a></li>
							<li><a href = "functions/manage_category.php"><span class = "glyphicon glyphicon-cog"></span> Manage Category</a></li>
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
						<li class = "dropdown"><a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>				
					</ul>
			</div>
		</nav>
	<body>	
		<div class = "container">
			<div class="panel panel-primary">
			    <div class="panel-heading">
			      <h3 class="panel-title">Address Book</h3>
			    </div>
			    <div class="panel-body">

			      <div class="col-lg-12" style="padding-left: 0; padding-right: 0;" >
			        <form action="index.php" method="get" >
			        <div class="col-lg-6 pull-left"style="padding-left: 0;"  >
			          <span class="pull-left">  
			            <label class="col-lg-12 control-label" for="keyword" style="padding-right: 0;">
			              <input type="text" value="<?php echo $_GET["keyword"]; ?>" placeholder="search by first name" id="" class="form-control" name="keyword" style="height: 41px;">
			            </label>
			            </span>
			          <button class="btn btn-info">search</button>
			        </div>
			        </form>
			        <div class="pull-right" ><a href="contacts.php"><button class="btn btn-success"><span class="glyphicon glyphicon-user"></span> Add New Contact</button></a></div>
			      </div>

			      <div class="clearfix"></div>
			<?php if (count($results) > 0) { ?>
			        <div class="table-responsive">
			          <table class="table table-striped table-hover table-bordered ">
			            <tbody><tr>
			                <th>Avatar</th>
			                <th>First Name</th>
			                <th>Last Name</th>
			                <th>Contact No #1 </th>
			                <th>Email </th>
			                <th>Action </th>

			              </tr>
			  <?php foreach ($results as $res) { ?>
			                <tr>
			                  <td style="text-align: center;">
			                <?php $pic = ($res["profile_pic"] <> "" ) ? $res["profile_pic"] : "no_avatar.png" ?>
			                    <a href="profile_pics/<?php echo $pic ?>" target="_blank"><img src="profile_pics/<?php echo $pic ?>" alt="" width="50" height="50" ></a>
			                  </td>
			                  <td><?php echo $res["first_name"]; ?></td>
			                  <td><?php echo $res["last_name"]; ?></td>
			                  <td><?php echo $res["contact_no1"]; ?></td>
			                  <td><?php echo $res["email_address"]; ?></td>
			                  <td>
			                    <a href="view_contacts.php?cid=<?php echo $res["contact_id"]; ?>"><button class="btn btn-sm btn-info"><span class="glyphicon glyphicon-zoom-in"></span> View</button></a>&nbsp;
			                    <a href="contacts.php?m=update&cid=<?php echo $res["contact_id"]; ?>&pagenum=<?php echo $_GET["pagenum"]; ?>"><button class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>&nbsp;
			                    <a href="process_form.php?mode=delete&cid=<?php echo $res["contact_id"]; ?>&keyword=<?php echo $_GET["keyword"]; ?>&pagenum=<?php echo $_GET["pagenum"]; ?>" onclick="return confirm('Are you sure?')"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Delete</button></a>&nbsp;
			                  </td>
			                </tr>
			  <?php } ?>
			            </tbody></table>
			        </div>
			        <div class="col-lg-12 center">
			          <ul class="pagination pagination-sm">
			  <?php
			  //Show page links
			  for ($i = 1; $i <= $last; $i++) {
			    if ($i == $pagenum) {
			      ?>
			                <li class="active"><a href="javascript:void(0);" ><?php echo $i ?></a></li>
			                <?php
			              } else {
			                ?>
			                <li><a href="index.php?pagenum=<?php echo $i; ?>&keyword=<?php echo $_GET["keyword"]; ?>" class="links"  onclick="displayRecords('<?php echo $page_limit; ?>', '<?php echo $i; ?>');" ><?php echo $i ?></a></li>
			                <?php
			              }
			            }
			            ?>
			          </ul>
			        </div>

			          <?php } else { ?>
			        <div class="well well-lg">No contacts found.</div>
			<?php } ?>
			    </div>
			  </div>
			</div>	
		</div>
		
	</body>

		<?php include 'includes/components/footer.php' ?>
</html>