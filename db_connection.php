<?php
$hostname = "000webhost_database_hostname";
$username = "000webhost_database_username";
$password = "000webhost_database_password";
$database = "000webhost_database_name";

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
