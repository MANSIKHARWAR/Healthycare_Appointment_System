<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trusted Doctors - Healthcare Appointment System</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="feature-details.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<section class="feature-detail">
    <div class="feature-content">
        <img src="https://cdn-icons-png.flaticon.com/512/3063/3063132.png" alt="Doctors">
        <h1>Trusted Doctors</h1>
        <p>Get appointments with verified healthcare professionals who are trusted by thousands of patients.</p>
        <a href="view_doctors.php" class="feature-btn">Find a Doctor</a>
    </div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>
