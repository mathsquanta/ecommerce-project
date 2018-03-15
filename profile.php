<?php 
session_start();
if(!isset($_SESSION['uid'])){
	header ('location:index.php');
}

?>

<!DOCTYPE html>
<html>
	<meta charset = "UTF-8">
	<title>Our Food shopping store</title>
	<link rel = "stylesheet" href = "css/styles.css">
	<link rel = "stylesheet" href = "css/bootstrap.min.css">	
	<script type = "text/javascript" src = "js/jquery.js"></script>
	<script type = "text/javascript" src = "js/bootstrap.min.js"></script>
	<script type = "text/javascript" src = "main.js"></script>

</html>

<body>

<div class = "navbar navbar-inverse navbar-fixed-top">
	
	<div class = "container-fluid">
		
		<div class = "navbar navbar-header">
		
		<a href = "#" class = "navbar-brand">Our Food shop</a>
		
		</div>
			<ul class =" nav navbar-nav">
			
				<li><a href = "#"><span class ="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href = "#"><span class ="glyphicon glyphicon-modal-window"></span>Products</a></li>
				<li style ="width:300px;left:10px;top:10px"><input type = "text" class = "form-control" id = "search"></li>
				<li style ="left:20px;top:10px"><button class = "btn btn-primary" id = "searchBtn">Search</button></li>

			</ul>
			
			
			<ul class =" nav navbar-nav navbar-right">
			
				<li><a href = "#" id = "cart_box" class = "dropdown-toggle" data-toggle="dropdown"><span class ="glyphicon glyphicon-shopping-cart"></span>Cart<span class = "badge">0</span></a>
					
					<div class = "dropdown-menu" style ="width:400px;">
					
					 <div class = "panel panel success">
					
						 <div class = "panel-heading">
						
							<div class = "row">
							
								<div class = "col-md-3">Serial Number</div>
								<div class = "col-md-3">Product Image</div>
								<div class = "col-md-3">Product Name</div>
								<div class = "col-md-3">Price</div>
							
							
							</div>
						
						 </div>
						<div class = "panel-body">
						<div id = cartProducts>
							
					<!--	<div class = "row">
								<div class = "col-md-3">Serial Number</div>
								<div class = "col-md-3">Product Image</div>
								<div class = "col-md-3">Product Name</div>
							</div> -->
						</div>
						
						</div>
						
						<div class = "panel-footer"></div>
					
					
					 </div>
				
					</div>
				
			
				</li>
				<li><a href = "#" class ="dropdown-toggle" data-toggle ="dropdown"><span class ="glyphicon glyphicon-user"></span><?= "Welcome, " .$_SESSION['name']; ?></a>
					
					<ul class = "dropdown-menu">
					<li><a href ="cart.php" style = "text-decoration:none;color:blue;"><span class = "glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
					<li class = "divider"></li>
					<li><a href = "" style = "text-decoration:none;color:blue;">Change Password</a></li>
					<li class = "divider"></li>
					<li><a href = "logout.php" style = "text-decoration:none;color:blue;">Logout</a></li>
				
					</ul>
				</li>
	
			</ul>
	</div>

</div>

<p><br/></p>
<p><br/></p>
<p><br/></p>

<div class = "container-fluid">
	
	<div class ="row">
	
		<div class ="col-md-1 "></div>
		<div class ="col-md-2 ">
			
			<div id = "getCategory"></div>  <!-- Side bar get Categories function here -->
		
			<div id = "getMenu"></div> <!-- Get menu from database -->
			
			
		</div>	
			
		<div class ="col-md-8 ">
		
		<div class = "row">
		
			<div class = "col-md-12" id = addCart_msg> <!-- Sussessful product add to cart msg-->
			</div>
		
		</div>
		
			<div class = "text-center panel panel-info">
			
				<div class = "panel-heading">Products</div>
				<div class = "panel-body">
					
					<div id ="getProducts"></div> <!-- Getting products from database-->
											
				</div>		
		
			</div>
			<div class ="col-md-12 text-center"><b> &copy2017 Fall Project Samuel, Kola, Priyanka, Manassa</b></div>
		</div>
		
		<div class ="col-md-1 "></div>
	</div>

</body>









