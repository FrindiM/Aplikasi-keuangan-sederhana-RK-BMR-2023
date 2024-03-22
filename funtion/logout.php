<?php
// Mulai sesi
session_start();

// Hapus semua variabel sesi
$_SESSION = array();

// Hapus sesi
session_destroy();

// Redirect ke halaman login atau halaman lainnya setelah logout
header("Location: ../index.php");
exit; // Pastikan tidak ada kode lain yang dijalankan setelah melakukan redirect
