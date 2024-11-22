<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms"; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->select_db($dbname) === false) {
   
    $query = "CREATE DATABASE $dbname";
    if ($conn->query($query) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
} else {
    echo "Database already exists";
}

$conn->select_db($dbname);

$tableQuery = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('instructor', 'student') NOT NULL
)";

if ($conn->query($tableQuery) === TRUE) {
   
} else {
    echo "Error creating table: " . $conn->error;
}
?>
