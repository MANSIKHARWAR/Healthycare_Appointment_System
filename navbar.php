<?php
// session_start();
?>
<div class="navbar">
    <div class="nav-logo">
        <a href="index.php">
            <img src="https://cdn-icons-png.flaticon.com/512/2967/2967350.png" alt="Healthcare Logo">
            <span class="nav-title">Healthycare Appointment</span>
        </a>
    </div>

    <div class="nav-links">
        <?php if (isset($_SESSION['patient_id'])): ?>
            <a href="dashboard.php">Dashboard</a>
            <a href="book_appointment.php">Book Appointment</a>
            <a href="view_appointment.php">View Appointments</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.php" class="register-btn">Register</a>
        <?php endif; ?>
    </div>
</div>
