<?php
error_reporting(0);
include("connection.php");



$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$contactno = $_POST["contactno"];
$address = $_POST["address"];

if(isset($_POST['submit'])){
	$mysql = "INSERT INTO student (fullName, username, email, password, contact, address) VALUES ('$fullname', '$username', '$email', '$password', '$contactno', '$address')";
	$query=$conn->exec($mysql);
	header("location:studentslist.php");

}
?>
 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registeration</title>
	
<!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
<style>
	.container{
		width: 50%;
	}
	h1, p{
		text-align: center
	}
	#heading{
		border-radius: 10px 10px 0px 0px;
	}
	#login{
		border-radius: 0px 0px 10px 10px;
	}
	#signup signup, login_button{
		width: 50%;
		margin: auto;
		padding-right: auto;
		padding-left: auto;
	}
</style>
</head>

<body>
	<br>
	<div class="container bg-primary" id="heading">
		<h1>REGISTERATION FORM</h1>
		<h3>It's quick and easy....!</h3>
	</div>
	<div class="container bg-success" id="form">
		<form method="post" action=>
			<div class="form-group">
				<label for="fullname">Full Name:</label>
				<input type="text" name="fullname" class="form-control" required placeholder="Full Name">
			</div>
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" name="username" class="form-control" required placeholder="username">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control" required placeholder="email">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" class="form-control" required placeholder="password">
			</div>
			<div class="form-group">
				<label for="contact">Contact No:</label>
				<input type="number" name="contactno" class="form-control" required placeholder="contact">
			</div>
			<div class="form-group">
				<label for="address">Address:</label>
				<input type="text" name="address" class="form-control" required placeholder="address">
			</div>
			<div class="form-group" id="signup">
				<input type="submit" name="submit" value="Sing Up" class="btn btn-success form-control" >
			</div>
		</form>
	</div>
	
	<br>
</body>
</html> 
