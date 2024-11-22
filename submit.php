<?php
// submit.php
$servername = "sql210.infinityfree.com";
$username = "if0_37572388"; // default XAMPP username
$password = "Homelight"; // default XAMPP password
$dbname = "if0_37572388_cybercrime_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO reports (name, email, description) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $description);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];
$stmt->execute();

echo "Report submitted successfully! <a href='reports.php'>View Reports</a>";

// Close connection
$stmt->close();
$conn->close();
?>
