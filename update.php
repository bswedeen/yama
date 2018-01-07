<?php
//Display error messages on page for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// including the database connection file
include_once("config.php");

//Retrieve updated values
$idUser = mysqli_real_escape_string($mysqli, $_REQUEST['idUser']);
$Forename = mysqli_real_escape_string($mysqli, $_REQUEST['Forename']);
$Surname = mysqli_real_escape_string($mysqli, $_REQUEST['Surname']);
$Department = mysqli_real_escape_string($mysqli, $_REQUEST['Department']);	
$Catalouging = mysqli_real_escape_string($mysqli, $_REQUEST['Catalouging']);	
$Assessments = mysqli_real_escape_string($mysqli, $_REQUEST['Assessments']);	
$Loans = mysqli_real_escape_string($mysqli, $_REQUEST['Loans']);	
$Admins = mysqli_real_escape_string($mysqli, $_REQUEST['Admins']);	
$Password = mysqli_real_escape_string($mysqli, $_REQUEST['UserPassword']);	
		
//updating the table
mysqli_query($mysqli, "UPDATE User SET ForeName = '$Forename',SurName = '$Surname',Department = '$Department', Catalouging = '$Catalouging', Assessments = '$Assessments', Loans = '$Loans', Admins = '$Admins', UserPassword = '$Password' WHERE idUser = $idUser") or die(mysqli_error($mysqli));	

//redirectig to the primary display page.
header("Location: index.php");
?>