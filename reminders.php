<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminders - Healthcare Appointment System</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="feature-details.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<section class="feature-detail">
    <div class="feature-content">
        <img src="https://cdn-icons-png.flaticon.com/512/1041/1041872.png" alt="Reminders">
        <h1>Reminders</h1>
        <p>Stay on track with appointment reminders and notifications so you never miss a doctor visit.</p>
        <a href="notifications.php" class="feature-btn">View Reminders</a>
    </div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>
