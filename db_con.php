<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "auctech-in_db";

// Hostinger server :
// $servername = "localhost";
// $username = "u622085619_auctech_in";
// $password = "Auctech@321";
// $database = "u622085619_auctech_in";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    error_log("Connection failed: " . $con->connect_error); // log error
    die("Connection failed. Please try again later.");
}
?>
