<?php
session_start();
include 'database_config.php'; // Ensure database connection is included

// ✅ Check if REQUEST_METHOD exists before using it
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $password = $_POST['password'] ?? '';

    // ✅ Validate input
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($password)) {
        die("All fields are required.");
    }

    // ✅ Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // ✅ Insert user into database
    $sql = "INSERT INTO users (first_name, last_name, email, phone, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone, $hashed_password);

    if ($stmt->execute()) {
        // ✅ Redirect to login page after successful signup
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Invalid request method. Please submit the form from the browser.";
}
?>
