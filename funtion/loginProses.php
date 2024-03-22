<?php
session_start();
include "koneksi.php";

// Fungsi untuk melakukan login
function login($username, $password, $conn)
{
    // Escape input untuk menghindari SQL injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Query untuk memeriksa keberadaan pengguna dalam database
    $query = "SELECT * FROM user WHERE user='$username' AND pass='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Ambil informasi pengguna
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user['user'];
        $_SESSION['role'] = $user['role'];
        // Return informasi pengguna
        return $user;
    } else {
        // Pengguna tidak ditemukan atau kata sandi salah
        return false;
    }
}

// Contoh penggunaan fungsi login
$username = $_POST['username'];
$password = $_POST['password'];

$user = login($username, $password, $conn);

if ($user) {
    // Login berhasil
    if ($user['role'] == 'admin') {
        // Redirect atau tampilkan halaman admin
        echo "Selamat datang, Admin!";
        header("Location: ../admin");
        exit();
    } else {
        // Redirect atau tampilkan halaman pengguna biasa
        echo "Selamat datang, Pengguna!";
        header("Location: ../user");
        exit();
    }
} else {
    // Login gagal, tampilkan pesan error
    echo "Login gagal. Silakan coba lagi.";
}

// Tutup koneksi database
$conn->close();
