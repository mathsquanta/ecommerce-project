<?php 
session_start();
if(!isset($_SESSION['uid'])){
	header ('location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Our Food shopping store</title>
	<link rel = "stylesheet" href = "css/styles.css">
	<link rel = "stylesheet" href = "css/bootstrap.min.css">	
	<script type = "text/javascript" src = "js/jquery.js"></script>
	<script type = "text/javascript" src = "js/bootstrap.min.js"></script>
	<script type = "text/javascript" src = "main.js"></script>
	<style>
	
	table tr td {padding:10px;}
	
	</style>
</head>

<body>

<div class = "navbar navbar-inverse navbar-fixed-top">
	
	<div class = "container-fluid">
		
		<div class = "navbar navbar-header">
		
		<a href = "#" class = "navbar-brand">Our Food shop</a>
		
		</div>
			<ul class =" nav navbar-nav">
			
				<li><a href = "#"><span class ="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href = "#"><span class ="glyphicon glyphicon-modal-window"></span>Products</a></li>
			</ul>
		</div>
		</div>

	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	
	<div class = "container-fluid">
		
		<div class = "row">
			<div class = "col-md-2"></div>
			<div class = "col-md-8">
				<div class = "panel panel-default">
					<div class ="panel-heading"></div>
					<div class ="panel-body">
						<h1>Thank you For shopping with us.</h1>
						</hr>
						<p> Hello <?= $_SESSION['name']; ?>, Your payment is successful and your 
						transaction ID is XXXXX-XXX-XXX<br/>You can continue shopping.<br/> </p>
						<a href = "index.php" class = "btn btn-success btn-lg">Continue shopping</a>
					
					</div>
					<div class ="panel-footer"></div>
				</div>
				
			
			</div>
			<div class = "col-md-2"></div>
		</div>
		
	
	</div>
	
	
</body>
</html>





