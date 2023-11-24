<?php

$db_host = "000webhost_database_hostname";
$db_name = "000webhost_database_name";
$db_user = "000webhost_database_username";
$db_password = "000webhost_database_password";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
