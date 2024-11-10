<?php
session_start();
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; 

    $query = "SELECT password FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password_from_database);
    $stmt->fetch();
    $stmt->close();

    // Periksa password
    if ($hashed_password_from_database && password_verify($password, $hashed_password_from_database)) {
        // Password cocok, inisialisasi session
        $_SESSION["username"] = $username;

        
        header("Location: dashboard.php");
        exit();
    } else {
        
        echo "Username atau password salah. Coba lagi.";
    }
}

$conn->close();
?>
