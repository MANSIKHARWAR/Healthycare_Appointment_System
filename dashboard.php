<?php
session_start();
// Check if patient is logged in
if (!isset($_SESSION['patient_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<body class="dashboard-bg">

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Dashboard Card -->
    <div class="dashboard-card">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['patient_name']); ?>!</h2>
        <a href="book_appointment.php"><button>Book Appointment</button></a><br>
        <a href="view_appointment.php"><button>View My Appointments</button></a><br>
        <a href="logout.php"><button>Logout</button></a>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>
</html>
