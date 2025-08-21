<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Consultations - Healthcare Appointment System</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="feature-details.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<section class="feature-detail">
    <div class="feature-content">
        <img src="https://cdn-icons-png.flaticon.com/512/1041/1041872.png" alt="Video Consultation">
        <h1>Video Consultations</h1>
        <p>Connect with doctors virtually through secure video calls, from the comfort of your home.</p>
        <a href="video_call.php" class="feature-btn">Start Video Consultation</a>
    </div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>
