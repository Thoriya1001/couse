<?php
$servername = "localhost";
$username = "root";
$password = "passwd@1";
$dbname = "upload_file";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>