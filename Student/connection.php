<?php

$dbserver="localhost";
$dbname="drivingschool";
$dbusername="root";
$dbpassword="";

	$conn = new PDO("mysql:host=$dbserver; dbname=$dbname;", $dbusername, $dbpassword);

?>