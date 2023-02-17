<?php
// Define database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "silicon";

// Create a connection to the MySQL database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>