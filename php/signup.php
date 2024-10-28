<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app_entry"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$sql = "INSERT INTO app_entry (username, phone, email, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password
$stmt->bind_param("ssss", $_POST['username'], $_POST['phone'], $_POST['email'], $hashed_password);

// Execute the statement
if ($stmt->execute()) {
    // Redirect to dashboard.html after successful signup
    header("Location: ../html/dashboard.html");
    exit(); // Make sure to call exit after header to stop script execution
}

else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
