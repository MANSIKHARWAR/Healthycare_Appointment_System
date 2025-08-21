<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical History Records - Healthcare Appointment System</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="feature-details.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<section class="feature-detail">
    <div class="feature-content">
        <img src="https://cdn-icons-png.flaticon.com/512/2920/2920237.png" alt="Medical History">
        <h1>Medical History Records</h1>
        <p>Securely store and access your past medical reports anytime, anywhere.</p>
        <a href="history.php" class="feature-btn">View Medical Records</a>
    </div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>
