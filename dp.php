<?php
$server = "sql110.epizy.com";
$username = "epiz_31989050";
$password = "9pDCRxPsOwjAq8K";
$dbname = "epiz_31989050_test";

// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>