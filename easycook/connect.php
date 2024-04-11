<?php
$servername = "localhost";
$username = "datg1717_TWS5";
$password = "S3dotan22_";
$dbname = "datg1717_easycook";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Title FROM ayam";

?>