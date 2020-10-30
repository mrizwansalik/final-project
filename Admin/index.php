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

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<title>Online Driving School</title>
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
			background-image:url(drive.back.jpg);
			height: 100vh;
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
		<?php 
		include('../header.php')
	
		?>
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
			<div class="row">
				<div class="col-md-4">
					<a href="Trainerslist.php">
						<button class="text-light bg-warning" style="border: 1px solid white; border-radius: 10px; height: 100px; width: 250px; margin: 100px 0px 0px 0px;"><h5>Trainers</h5></button>
					</a>
					<a href="studentslist.php">
					<button class="text-light bg-success" style="border: 1px solid white; border-radius: 10px; height: 100px; width: 250px; margin: 30px 0px 0px 0px;"><h5>Students</h5></button>
					</a>
				</div>
			</div>
		</div>
	</div>
  <?php 
 include('../footer.php') 
  ?>
</body>
</html>
    

