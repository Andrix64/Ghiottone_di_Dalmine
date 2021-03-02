<?php
//set connection variables
$host = "89.46.111.188";
$db_name = "Sql1426785_2";
$username = "Sql1426785";
$password = "t58jq186pk";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
