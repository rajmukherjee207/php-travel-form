<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "trip";

// Create a database connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



/*
CREATE DATABASE  trip;
USE trip;

CREATE TABLE trip (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(15) NOT NULL,
    other TEXT,
    dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
 */ 