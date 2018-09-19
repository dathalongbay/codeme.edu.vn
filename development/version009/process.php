<?php
/**
 * Created by PhpStorm.
 * User: datdo
 * Date: 9/19/2018
 * Time: 6:21 PM
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

if ( !empty($_POST) ) {
    $data = $_POST;

    $sql = "UPDATE article SET title='".$data['title']."',article_content = 
    '".$data['article_content']."',status=".$data['status']." WHERE id=".$data['id'];

    $result = $conn->query($sql);

    header("Location: http://codeme.vn/");
    die();


}


