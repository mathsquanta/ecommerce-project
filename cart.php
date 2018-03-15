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
		
		<a href = "index.php" class = "navbar-brand">Our Food shop</a>
		
		</div>
			<ul class =" nav navbar-nav">
			
				<li><a href = "index.php"><span class ="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href = "#"><span class ="glyphicon glyphicon-modal-window"></span>Products</a></li>
			</ul>
	</div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>	

<div class = "container-fluid">

	<div class ="row">
		
		<div class = "col-md-2"></div>
			<div class = "col-md-8" id = "cart_msg">
			<!-- Cart operations message box -->
			</div>
		<div class = "col-md-2"></div>
	</div>

	<div class ="row">
		
		<div class = "col-md-2"></div>
		
		<div class = "col-md-8">
			
			<div class = "panel panel-primary">
			
				<div class = "panel-heading">Cart Checkout</div>
				<div class = "panel-body">
				
					<div class = "row">
						
						<div class = "col-md-2"><b>Action</b></div>
						<div class = "col-md-2"><b>Product image</b></div>
						<div class = "col-md-2"><b>Product Name</b></div>
						<div class = "col-md-2"><b>Quantity</b></div>
						<div class = "col-md-2"><b>Product Price</b></div>
						<div class = "col-md-2"><b>Price in USD</b></div>
					
					</div>
					
					<div id = "cart_checkout"></div>
					
					<!--<div class = "row">
						
						<div class = "col-md-2">
							<div class = "btn-group">
								<a href ="#" class = "btn btn-danger"><span class = "glyphicon glyphicon-trash"></span></a>
								<a href = "#" class = "btn btn-primary"><span class = "glyphicon glyphicon-ok-sign"></a>
							
							</div>
						
						
						
						</div>
						<div class = "col-md-2"><img src = "images/AFRICA/amala.jpg" height = "60px" width = "60px" /></div>
						<div class = "col-md-2">Product Name</div>
						<div class = "col-md-2"><input type = "text" class = 'form-control' value = '5000' ></div>
						<div class = "col-md-2"><input type = "text" class = 'form-control' value = '1' disabled /></div>
						<div class = "col-md-2"><input type = "text" class = 'form-control' value = '5000' disabled /></div>
					
					</div> -->
					
			<!-- 	<div class = "row">
					
						<div class = "col-md-8"></div>
					
						<div class = "col-md-4">
							<b>Total $600</b>
						</div>
					
					</div>   -->
				
				
				</div>
				<div class = "panel-footer"></div>
			
			
			</div>
														
		</div>
		<div class = "col-md-2"></div>
		
		
	</div>
	
</div>



</body>

</html>

