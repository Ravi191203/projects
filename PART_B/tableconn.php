<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the database if it doesn't exist
$sql_create_db = "CREATE DATABASE IF NOT EXISTS college_admission";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database 'college_admission' created successfully or already exists<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db("college_admission");

// SQL query to create a table
$sql_create_table = "CREATE TABLE IF NOT EXISTS students (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    date_of_birth DATE NOT NULL,
    applied_course VARCHAR(100) NOT NULL
)";

// Execute query to create table
if ($conn->query($sql_create_table) === TRUE) {
    echo "Table 'students' created successfully or already exists";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
