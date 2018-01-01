<?php

include "db.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$mobile = $_POST['mobile'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$name = "/^[A-z][a-zA-Z]+$/";
$emailValidation ="/^[a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if (empty($firstname) || empty($lastname)|| empty($email)|| empty($password)|| empty($repassword)||
	 empty($mobile)|| empty($address1)|| empty($address2)){
		
		echo "
			<div class = 'alert alert-warning'>
				<a href = '#' class = 'close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Fields cannot be left blanck</b>
			</div>
		";
		exit();
	 
	 }
	 /*else
	
	if (!preg_match($name,$firstname)){
		
		echo "$firstname is not valid";
		exit();
	}
		
	if (!preg_match($name,$lastname)){
		
		echo "$laststname is not valid";
		exit();
	}
	
	if (!preg_match($emailValidation,$email)){
		
		echo " $email address is not valid";
		exit();
	}
	
	if (strlen ($password) < 9){
	
	echo "Password is weak";
	exit();
	
	}
	
	if (strlen ($repassword) < 9){
	
	echo "Password is weak";
	exit();
	
	}
	
	if ($password != $repassword) {
		
		echo " Password do not match";
		
	}
	
	if (!preg_match($number,$mobile)){
		
		echo " Mobile number $mobile is not valid";
		exit();
	}
*/

	// users in database
	
	$users = "SELECT user_id FROM users WHERE email = '$email' LIMIT 1";
	$check_query= mysqli_query ($con,$users);
	$count_email = mysqli_num_rows($check_query);
	if ($count_email > 0){
		echo "
			<div class = 'alert alert-danger'>
				<a href = '#' class = 'close' data-dismiss ='alert' aria-label ='close'>&times;</a>
				<b>Email already exists</b>
			</div>
		";
		exit();
	}
	else {
		$password = md5($password);
		$sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, 
				`email`, `password`, `mobile`, `address1`, `address2`)
				VALUES(NULL, '$firstname', '$lastname', '$email', 
				'$password', '$mobile', '$address1', '$address2')";
		
		$run_query = mysqli_query ($con,$sql);
		if ($run_query){
		
		echo "
			<div class = 'alert alert-success'>
				<a href = '#' class = 'close' data-dismiss ='alert' aria-label ='close'>&times;</a>
				<b>Registration successful...!</b>
			</div>
		";
		
		}
	
	
	}



?>