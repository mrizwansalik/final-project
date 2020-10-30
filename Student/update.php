<?php
session_start();
error_reporting(0);
include("connection.php");

$email=$_SESSION['email'];
if($email==true){

	}
	else{
		header('location:login.php');
	} 

$val = $_GET['id'];
if($_POST["submit"]){
	$fullname = $_POST["fullname"];
	$password = $_POST["password"];
	$contactno = $_POST["contactno"];
	$address = $_POST["address"];

	
	$update= "UPDATE student SET fullName='$fullname', password='$password', contact='$contactno', address='$address' WHERE id = '$val'";
	$conn->exec($update);

	header("location:profile.php");
}

	
	
?>
<!doctype html>
<html>
<head>
<title>Update User Profile</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
		.fa {
		  padding: 20px;
		  font-size: 15px;
		  width: 50px;
		  text-align: center;
		  text-decoration: none;
		  margin: 5px 2px;
		}
		.fa-facebook {
		  background: #3B5998;
		  color: white;
		}

		.fa-twitter {
		  background: #55ACEE;
		  color: white;
		}

		.fa-google {
		  background: #dd4b39;
		  color: white;
		}
		.background{
			background-color: gray;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			position: relative;
			margin-top: none;
		}

	</style>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-sm navbar-light bg-dark">
            <a href="index.php">
				<h1 class="nav-link text-light text-uppercase font-wieght-bold">Driving School</h1>
			</a>
            <div class="navbar navbar-collapse justity-content-between">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="#">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="#">Help</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="#">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="#">About Us</a>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-light font-wieght-bold" href="profile.php"><?php echo $email;?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="logout.php" style="border-radius: 10px; border: 1px solid white;"><b>Logout</b></a>
					</li>
				</ul>
        </div>
        </nav>
	</header>
	<div class="background">
		<div class="container">
			<div class="row" style=" padding: 20px 0px 20px 0px;">
				<div class="col-md-6 offset-3 bg-light" style="border: 1px solid white; border-radius: 10px;">
					<h1 class="text-uppercase text-center">Update Form</h1>
					<?php
						$select = $conn->query("SELECT * FROM student where email='$email'");
						while($val = $select->fetch()){
					?>
					<form method="post"  >
						<div class="form-group">
							<label for="fullname">Full Name:</label>
							<input type="text" name="fullname" class="form-control" required placeholder="Full Name" value="<?php echo $val['fullName']; ?>">
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="text" name="password" class="form-control" required placeholder="password" value="<?php echo $val['password']; ?>">
						</div>
						<div class="form-group">
							<label for="contact">Contact No:</label>
							<input type="number" name="contactno" class="form-control" required placeholder="contact" value="<?php echo $val['contact']; ?>">
						</div>
						<div class="form-group">
							<label for="address">Address:</label>
							<input type="text" name="address" class="form-control" required placeholder="address" value="<?php echo $val['address']; ?>">
						</div>
						<div class="form-group" id="signup">
							<input type="submit" name="submit" value="Update" class="btn btn-success form-control" >
						</div>
						<?php } ?>	
						
					</form>
				</div>
			</div>
		</div>
	</div>
    <footer class="bg-secondary">
        <div class="container-fluid" style="background-color: #343A40;">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-white font-wieght-light text-capitalize p-3">Online Driving School</h1>
                    <h3 class="text-light font-wieght-light font-italic mb-3">Best Ever School in the town</h3>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a>
                    <p class="text-light py-4 m-0">&copy;Copyright 2020 - Design and Develope by <b>Muhammad Rizwan Salik (S200212A44)</b></p>
                </div>
            </div>
			<div class="row">
				<div class="col-md-4">

				</div>
			</div>
        </div>
    </footer>
</body>
</html>
     