<?php
$servername = "localhost"; // Check phpMyAdmin for the actual server name
$username = "root"; // Default is "root"
$password = ""; // Default is empty
$database = "university_events"; // Change to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!";
}
?>
