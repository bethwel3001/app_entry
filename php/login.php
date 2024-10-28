<?php
session_start();
$servername = "localhost";
$username = "root"; // default - username
$password = ""; // default - no password
$dbname = "app_entry"; // database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // querying the table app_entry
    $stmt = $conn->prepare("SELECT id, password FROM app_entry WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();
        
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id; // Store user ID in session
            echo "<script>alert('Login successful!'); window.location.href='../html/dashboard.html';</script>";
        } else 

        exit();

        {
            // Invalid password, redirect to login page with an error message
            header("Location: ../html/login.html?error=invalid_password");
            exit();
        }
    } else {
        // No user found, redirect to login page with an error message
        header("Location: ../html/login.html?error=no_user");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
