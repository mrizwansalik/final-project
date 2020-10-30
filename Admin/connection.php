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



$dbserver="localhost";
$dbname="drivingschool";
$dbusername="root";
$dbpassword="";

	$conn = new PDO("mysql:host=$dbserver; dbname=$dbname;", $dbusername, $dbpassword);
	
?>