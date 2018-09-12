<?php
require "vendor/autoload.php";

$connection = new mysqli('localhost', 'root', '', 'codeme.edu.vn');
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "<pre>";
print_r($connection);
echo "</pre>";

$sql = "SELECT * FROM article";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo "<pre>";
    print_r($data);
    echo "</pre>";
}



