

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
			
			<div class ="col-md-2"></div>
							
			<div class = "col-md-8" id="signup_alert">
				<!-- Alert for successfull or unsuccessful registration-->
			</div>
			
			<div class ="col-md-2"></div>
						
		</div>
		
		<div class = "row">
		
			<div class = "col-md-2"></div>
			<div class = "col-md-8">
			
				<div class = "panel panel-primary">
				
					<div class = "panel-heading text-center">Customer Registration</div>
						<div class = "panel-body">
																		
						<form method = "post">
							<div class = "row">
								<div class = "col-md-6">
									<label for ="firstname">First Name</label>
									<input type = "text" class = "form-control" id ="firstname" name = "firstname"/>
								</div>
								<div class = "col-md-6">
									<label for ="lastname">Last Name</label>
									<input type = "text" class = "form-control" id ="lastname" name ="lastname"/>
								</div>
						</div>
						<div class = "row">
							<div class = "col-md-12">
									<label for ="email">Email</label>
									<input type = "text" class = "form-control" id ="email" name = "email" required/>
							</div>
						</div>
						
						<div class = "row">
							<div class = "col-md-12">
									<label for ="password">Password</label>
									<input type = "password" class = "form-control" id ="password" name = "password"/>
							</div>
						</div>
						
						<div class = "row">
							<div class = "col-md-12">
									<label for ="repassword">Re-type Password</label>
									<input type = "password" class = "form-control" id ="repassword" name = "repassword"/>
							</div>
						</div>
						
						<div class = "row">
							<div class = "col-md-12">
									<label for ="mobile">Mobile</label>
									<input type = "tel" class = "form-control" id ="mobile" name = "mobile"/>
							</div>
						</div>
						
						<div class = "row">
							<div class = "col-md-12">
									<label for ="password">Address Line 1</label>
									<input type = "text" class = "form-control" id ="address1" name = "address1"/>
							</div>
						</div>
						
						<div class = "row">
							<div class = "col-md-12">
									<label for ="password">Address Line 2</label>
									<input type = "text" class = "form-control" id ="address2" name = "address2"/>
							</div>
						</div>
						<p><br/></p>
						<div class = "row">
							<div class = "col-md-12">
							
									<input style = "float:right; margin-left:15px;" type = "reset" class = "btn btn-success btn-lg"  value = "Reset"/>
									<input style = "float:right" type = "button" id = "signup_button" name = "signup_button" class = "btn btn-success btn-lg"  value = "Sign Up"/>
									
							</div>
						</div>
						
					</div>
					</form>
					<div class ="col-md-12 text-center"><b> &copy2017 Fall Project Samuel, Kola, Priyanka, Manassa</b></div>
				</div>
			
			</div>
			<div class = "col-md-2"></div>

		</div>
	</div>	
	</body>
		</html>