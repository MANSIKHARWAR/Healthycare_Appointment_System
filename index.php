<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Healthcare Appointment System</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="navbar.css">
   
        <script>
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
</script>

        
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="hero">
    <div class="overlay"></div>
    <div class="hero-text">
        <h1>Book Appointments Anytime, Anywhere</h1>
        <p>Connect with trusted doctors and manage your healthcare with ease.</p>
        <a href="login.php">Get Started</a>
    </div>
</div>



<div class="features">
    <h2>Our Features</h2>
<div class="features-grid">

    <!-- Easy Scheduling -->
    <a href="book_appointment.php" class="feature-card">
        <img src="https://cdn-icons-png.flaticon.com/512/2921/2921822.png" alt="Scheduling" width="60">
        <h3>Easy Scheduling</h3>
        <p>Book and manage your appointments effortlessly.</p>
    </a>

    <!-- Trusted Doctors -->
    <a href="doctors.php" class="feature-card">
        <img src="https://cdn-icons-png.flaticon.com/512/3063/3063132.png" alt="Doctors" width="60">
        <h3>Trusted Doctors</h3>
        <p>Get appointments with verified healthcare professionals.</p>
    </a>

    <!-- Reminders -->
    <a href="reminders.php" class="feature-card">
        <img src="https://cdn-icons-png.flaticon.com/512/1041/1041872.png" alt="Reminders" width="60">
        <h3>Reminders</h3>
        <p>Stay on track with appointment reminders and notifications.</p>
    </a>

    <!-- Medical History Records -->
    <a href="history.php" class="feature-card">
        <img src="https://cdn-icons-png.flaticon.com/512/2716/2716054.png" alt="Medical History" width="60">
        <h3>Medical History Records</h3>
        <p>Securely store and access your past medical reports anytime.</p>
    </a>

    <!-- Video Consultations -->
    <a href="video_call.php" class="feature-card">
        <img src="https://cdn-icons-png.flaticon.com/512/3659/3659890.png" alt="Video Consultation" width="60">
        <h3>Video Consultations</h3>
        <p>Connect with doctors virtually through secure video calls.</p>
    </a>

</div>
</div>
<div class="testimonials">
    <h2>What Our Patients Say</h2>
    <div class="testimonial-grid">
        <div class="testimonial-card">
            <p>"This platform made booking appointments so easy and quick!"</p>
            <h4>- Priya Sharma</h4>
        </div>
        <div class="testimonial-card">
            <p>"The reminders saved me from missing my doctor visits. Highly recommended!"</p>
            <h4>- Rakesh Verma</h4>
        </div>
        <div class="testimonial-card">
            <p>"Great experience! Clean interface and trusted doctors."</p>
            <h4>- Anita Singh</h4>
        </div>
    </div>
</div>


<footer class="footer">
    <div class="footer-container">
        <div class="footer-about">
            <img src="https://cdn-icons-png.flaticon.com/512/2967/2967350.png" alt="Healthcare Logo">
            <h3>Healthcare Appointment</h3>
            <p>Your health, our priority. Book appointments easily & stay healthy.</p>
        </div>

        <div class="footer-links">
            <h4>Quick Links</h4>
            <a href="dashboard.php">Dashboard</a>
            <a href="book_appointment.php">Book Appointment</a>
            <a href="view_appointments.php">View Appointments</a>
            <a href="logout.php">Logout</a>
        </div>

        <div class="footer-social">
            <h4>Follow Us</h4>
            <div class="social-icons">
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111393.png" alt="Facebook"></a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733635.png" alt="Twitter"></a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn"></a>
            </div>
        </div>
    </div>

    <div class="footer-copy">
        &copy; <?php echo date('Y'); ?> Healthcare Appointment System. All Rights Reserved.
    </div>
</footer>


</body>
</html>
