<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//including the database connection file
include("config.php");

//getting id of the data from url
$idUser = $_REQUEST['id'];

//deleting the row from table
mysqli_query($mysqli, "DELETE FROM User WHERE idUser=$idUser") or die(mysqli_error($mysqli));

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>