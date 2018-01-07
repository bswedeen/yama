<?php
//Display error messages on page for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// including the database connection file
include_once("config.php");

$Forename = mysqli_real_escape_string($mysqli, $_REQUEST['Forename']);
$Surname = mysqli_real_escape_string($mysqli, $_REQUEST['Surname']);
$Department = mysqli_real_escape_string($mysqli, $_REQUEST['Department']);
$Catalouging = mysqli_real_escape_string($mysqli, $_REQUEST['Catalouging']);
$Assessments = mysqli_real_escape_string($mysqli, $_REQUEST['Assessments']);
$Loans = mysqli_real_escape_string($mysqli, $_REQUEST['Loans']);
$Admins = mysqli_real_escape_string($mysqli, $_REQUEST['Admins']);
$Password = mysqli_real_escape_string($mysqli, $_REQUEST['Password']);
		
//insert data to database	
mysqli_query($mysqli, "INSERT INTO User (ForeName,SurName,Department,Catalouging,Assessments,Loans,Admins,UserPassword) VALUES('$Forename','$Surname','$Department','$Catalouging','$Assessments','$Loans','$Admins','$Password')");

//redirectig to the primary display page.
header("Location: index.php");
?>