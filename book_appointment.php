<?php
session_start();
include 'db.php';


if (!isset($_SESSION['patient_id'])) { header("Location: login.php"); exit; }

$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $doctor_id = $_POST['doctor_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $patient_id = $_SESSION['patient_id'];

    $sql = "INSERT INTO appointments (patient_id, doctor_id, appointment_date, appointment_time) VALUES ('$patient_id', '$doctor_id', '$date', '$time')";
    if ($conn->query($sql) === TRUE) {
        $message = "Appointment booked successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
$doctors = $conn->query("SELECT * FROM doctors");
?>
<!DOCTYPE html>
<html>
<head><title>Book Appointment</title><link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="navbar.css"></head>




<body>
        <?php include 'navbar.php'; ?>

<div class="container">
<h2>Book Appointment</h2>
<form method="POST">
    <select name="doctor_id" required>
        <option value="">Select Doctor</option>
        <?php while($row = $doctors->fetch_assoc()) { ?>
            <option value="<?php echo $row['id']; ?>">
                <?php echo $row['name']." (".$row['specialty'].")"; ?>
            </option>
        <?php } ?>
    </select>
    <input type="date" name="date" required>
    <input type="time" name="time" required>
    <button type="submit">Book</button>
</form>
<p><?php echo $message; ?></p>
<a href="dashboard.php">Back</a>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
