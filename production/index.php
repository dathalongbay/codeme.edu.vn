<?php
require "vendor/autoload.php";

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connection = new mysqli($servername, $username, $password);

echo "<pre>";
print_r($connection);
echo "</pre>";
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";
