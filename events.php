<?php
include 'database_config.php'; // Database connection

// Get category from the URL
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Fetch events based on category
$sql = "SELECT * FROM events WHERE category = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $category);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - University Calendar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="dashboard.html">University Event Calendar</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center">Events in <?= ucfirst($category) ?> Category</h2>

        <div class="row">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-md-4">
                    <div class="event-card">
                        <h4><?= $row['title'] ?></h4>
                        <p><strong>Date:</strong> <?= $row['date'] ?></p>
                        <p><strong>Time:</strong> <?= $row['time'] ?></p>
                        <p><strong>Location:</strong> <?= $row['location'] ?></p>
                        <p><?= $row['description'] ?></p>
                        <button class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

</body>
</html>
