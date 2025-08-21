<?php
session_start();
include 'db.php';



if (!isset($_SESSION['patient_id'])) {
    header("Location: login.php");
    exit;
}

$patient_id = $_SESSION['patient_id'];

// Fetch appointments
$sql = "SELECT a.id, d.name AS doctor, d.specialty, 
        a.appointment_date, a.appointment_time
        FROM appointments a
        INNER JOIN doctors d ON a.doctor_id = d.id
        WHERE a.patient_id = ?
        ORDER BY a.appointment_date DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $patient_id);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Appointments</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">



</head>
<body>
    <?php include 'navbar.php'; ?>
<div class="container">
    <h2>My Appointments</h2>

    <?php if ($result->num_rows > 0) { ?>
        <table border="1" width="100%" cellpadding="5">
            <tr>
                <th>Doctor</th>
                <th>Specialty</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['doctor']); ?></td>
                    <td><?php echo htmlspecialchars($row['specialty']); ?></td>
                    <td><?php echo htmlspecialchars($row['appointment_date']); ?></td>
                    <td><?php echo htmlspecialchars($row['appointment_time']); ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p>No appointments found.</p>
    <?php } ?>

    <br>
    <a href="dashboard.php"><button>Back</button></a>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
