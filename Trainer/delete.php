<?php
session_start();
error_reporting(0);
include("connection.php");

$val = $_GET['id'];

// $mail = $_GET['name'];

$mysql= "DELETE FROM trainer WHERE id = '$val'";
$conn->exec($mysql);
header("location:login.php");


?>