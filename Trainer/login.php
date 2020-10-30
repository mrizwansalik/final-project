<?php
session_start();
error_reporting(0);
include("connection.php");

if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query=$conn->query("SELECT * FROM trainer WHERE email='$email' && password='$password'");
	$data=$query->fetchColumn();
	if($data!=0){
		$_SESSION['email']=$email;
		header('location:index.php');
	}
	else{
		$error="Invalid Username or Password";
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style>
	.container{
		width:40%;
	}
	#login{
		border-radius: 10px 10px 0px 0px;
	}
	.form{
		border-radius: 0px 0px 10px 10px;
	}
</style>
</head>

<body style="margin-top: 100px; background-color: cadetblue;">
	<br>
	<div class="container text-center bg-success" id="login">
		<div class="text-success">
			<h1>LOGIN</h1>
		</div>
	</div>
	<div class="container bg-info form">
		<form action="" method="post">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="login" value="Login" class="btn btn-success form-control" >
			</div>
			<div class="form-group">
				<p style="color: red;"><?php echo $error ?></p>
			</div>
			<div class="form-group">
				<a href="#">Forgot Password</a>
			</div>
			<div class="form-group">
				<a href="registration.php">
					<input type="button" value="SignUp" class="btn btn-success form-control">
				</a>
			</div>
		</form>
	</div>
</body>
</html>
