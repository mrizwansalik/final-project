<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "drivingschool";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// $dbserver="localhost";
// $dbname="drivingschool";
// $dbusername="root";
// $dbpassword="";

// 	$conn = new PDO("mysql:host=$dbserver; dbname=$dbname;", $dbusername, $dbpassword);


$dbserver="localhost";
$dbname="drivingschool";
$dbusername="root";
$dbpassword="";

	$conn = new PDO("mysql:host=$dbserver; dbname=$dbname;", $dbusername, $dbpassword);


try {
	$conn = new PDO("mysql:host=$dbserver; dbname=$dbname;", $dbusername, $dbpassword);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}




?>