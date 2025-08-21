<?php
include 'db.php';
$message = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $phone = $_POST['phone'];

    // Check if email already exists
    $check = "SELECT id FROM patients WHERE email = '$email'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        $message = "Email already registered! <a href='login.php'>Login here</a>";
    } else {
        $sql = "INSERT INTO patients (name, email, password, phone) VALUES ('$name', '$email', '$password', '$phone')";
        if ($conn->query($sql) === TRUE) {
            $message = "Registration successful! <a href='login.php'>Login</a>";
        } else {
            $message = "Error: " . $conn->error;
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head><title>Register</title><link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="footer.css"></head>
<link rel="stylesheet" href="navbar.css">




<body>
    <?php include 'navbar.php'; ?>
<div class="container">
<h2>Register</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <button type="submit">Register</button>
</form>
<p><?php echo $message; ?></p>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
