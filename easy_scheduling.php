<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Scheduling - Healthcare Appointment System</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="feature-details.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<section class="feature-detail">
    <div class="feature-content">
        <img src="https://cdn-icons-png.flaticon.com/512/2921/2921822.png" alt="Scheduling">
        <h1>Easy Scheduling</h1>
        <p>Book and manage your appointments effortlessly with our user-friendly scheduling system.</p>
        <a href="book_appointment.php" class="feature-btn">Book Appointment</a>
    </div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>
