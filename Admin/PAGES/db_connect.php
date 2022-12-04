<?php
//set connection variables
$host = "";
$db_name = "";
$username = "";
$password = "";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
