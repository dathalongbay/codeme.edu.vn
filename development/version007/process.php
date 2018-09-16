<?php
require "vendor/autoload.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "northwind";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo '<br> Du lieu tu form';
echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST) && !empty($_POST)) {

    $company = $_POST['company'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $insert_sql = "INSERT INTO employees (company, first_name, last_name) VALUES 
('". $company ."', '".$last_name."', '".$first_name."')";


    if ($conn->query($insert_sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>