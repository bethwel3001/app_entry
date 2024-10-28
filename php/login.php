<?php
session_start();
$servername = "localhost";
$username = "root"; // Change as needed
$password = ""; // Change as needed
$dbname = "your_database"; // Change as needed

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();
        
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id; // Store user ID in session
            echo "<script>alert('Login successful!'); window.location.href='../html/dashboard.html';</script>";
        } else {
            echo "<script>alert('Wrong username or password, try again.');</script>";
        }
    } else {
        echo "<script>alert('Wrong username or password, try again.');</script>";
    }
    $stmt->close();
}

$conn->close();
?>
