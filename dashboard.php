<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}

$first_name = $_SESSION['user']['first_name'];
?>


<?php include 'dashboard.html'; ?> <!-- Separate HTML file -->
<?php require 'navbar.php'; ?>


