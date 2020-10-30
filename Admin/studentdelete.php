<?php
session_start();
error_reporting(0);
include("connection.php");

$val = $_GET['id'];

// $mail = $_GET['name'];

$mysql= "DELETE FROM student WHERE id = '$val'";
$success = $conn->exec($mysql);
if($success == True){
header("location:studentslist.php");
}

?>