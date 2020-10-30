<?php 
// session_start();
// error_reporting(0);
// include("connection.php");

// $sql = "SELECT * FROM student";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["id"]. "Full Name: " . $row["fullName"]. "Username" . $row["username"]."Email: " . $row["email"]. " Password: " . $row["password"]. "Contact" . $row["contact"]. "Address" . $row["address"]."<br>";
//   }
// } else {
//   echo "0 results";
// }

?>

<?php 
session_start();
error_reporting(0);
include("connection.php");

// $sql = "SELECT * FROM trainer";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["id"]. "Full Name: " . $row["fullName"]. "Username" . $row["username"]."Email: " . $row["email"]. " Password: " . $row["password"]. "Contact" . $row["contact"]. "Address" . $row["address"]."Experience" . $row["experience"]."<br>";
//   }
// } else {
//   echo "0 results";
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
			height: 100vh;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			position: relative;
			margin-top: none;
		}
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
			color: white;
			margin-top: 10px;
		}
		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}
		td a{
			color: red;
		}
		/* tr:nth-child(even){
			background-color: #dddddd;
		} */

	</style>
</head>
	
<body style="background-color: cadetblue;">
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
						<a class="nav-link text-light font-wieght-bold" href="update.php"><?php echo $email;?></a>
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
				<div class="col-md-6 col-md-offset-3">
					<table border="1" width="auto" height="auto">
						<thead>
							<tr>
								<th>ID</th>
								<th>Full Name</th>
								<th>Username</th>
								<th>Email</th>
								<th>Password</th>
								<th>Contact</th>
								<th>Address</th>
					
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$select = $conn->query("SELECT * FROM student");
								while($val = $select->fetch()){
							?>
							<tr>
								<td><?php echo  $val["id"]; ?></td>
								<td><?php echo  $val["fullName"]; ?></td>
								<td><?php echo  $val["username"]; ?></td>
								<td><?php echo  $val["email"]; ?></td>
								<td><?php echo  $val["password"]; ?></td>
								<td><?php echo  $val["contact"]; ?></td>
								<td><?php echo  $val["address"]; ?></td>
								
								<td><a href="studentupdate.php?id=<?php echo  $val["id"]; ?>">Edit</a></td>
								<td><a href="studentdelete.php?id=<?php echo  $val["id"]; ?>">delete</a></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
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
     