<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_admission";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the database if it doesn't exist
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
    echo "College_Admission database created successfully or already exists<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "College_Admission database connected successfully";
?>
