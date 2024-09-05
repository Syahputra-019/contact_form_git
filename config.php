<?php
// Konfigurasi database
$servername = "localhost"; // Host server, biasanya "localhost"
$username = "root";        // Nama pengguna database, default di XAMPP adalah "root"
$password = "";            // Kata sandi pengguna database, default di XAMPP adalah kosong (""), tidak diisi
$dbname = "contact_db";  // Nama database yang akan Anda gunakan

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>