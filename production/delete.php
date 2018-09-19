<?php
/**
 * Created by PhpStorm.
 * User: datdo
 * Date: 9/19/2018
 * Time: 7:45 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codeme.edu.vn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = (int) $_GET['id'];

if ($id < 1) {
    echo 'id khong ton tai';
    die;
}

$sql = "DELETE FROM article WHERE id=".$id;
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: http://codeme.vn/");
    die();
} else {
    echo "Error deleting record: " . $conn->error;
}

