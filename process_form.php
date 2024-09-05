<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='container mt-5'><div class='alert alert-danger'>Invalid email format</div></div>";
        exit;
    }

    // Sanitasi input
    $name = htmlspecialchars(strip_tags($name));
    $email = htmlspecialchars(strip_tags($email));
    $message = htmlspecialchars(strip_tags($message));

    // Masukkan data ke dalam database
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container mt-5'><div class='alert alert-success'>New record created successfully</div></div>";
    } else {
        echo "<div class='container mt-5'><div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div></div>";
    }

    // Tutup koneksi
    $conn->close();
}
?>