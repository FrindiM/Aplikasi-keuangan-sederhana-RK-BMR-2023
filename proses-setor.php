<?php
// Kode untuk menyimpan data setoran ke database Anda
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $namaLengkap = $_POST["namaLengkap"];
    $noHp = $_POST["noHp"];
    $sumberDana = $_POST["sumberDana"];
    $jumlah = $_POST["jumlah"];
    $status = "belum";
    $jenis = "masuk";

    // Lakukan koneksi ke database dan simpan data
    // Ganti informasi koneksi database sesuai dengan kebutuhan Anda

    // Contoh koneksi menggunakan MySQLi
    include "koneksi.php";

    $sql = "INSERT INTO kas (nama, hp, sumber, jumlah, ket) VALUES ('$namaLengkap', '$noHp', '$sumberDana', '$jumlah', '$status')";

    if ($conn->query($sql) === TRUE) {
        $message = "Setor Dana berhasil diajukan. Menunggu persetujuan dari bendahara, silakan hubungi bendahara, no.hp 085242436146.";
    } else {
        $message = "Terjadi kesalahan. Silakan coba lagi.";
    }

    $sql2 = "INSERT INTO rekap (nama, keterangan, jenis, ket, masuk, keluar) VALUES ('$namaLengkap', '$sumberDana', '$jenis', '$status', '$jumlah', '0')";

    if ($conn->query($sql2) === TRUE) {
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Setor Uang</title>
    <!-- Sertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Sertakan Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Gaya CSS Anda yang sudah ada di sini */

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            margin-top: 50px;
        }

        .navbar {
            border: 2px solid #ccc;
            font-weight: bold;
        }

        .navbar-brand {
            font-size: 24px;
        }

        .navbar-text {
            text-align: center;
            flex: 1;
            font-size: 24px;
        }

        .navbar-logo {
            width: 50px;
            /* Sesuaikan lebar yang diperlukan */
            height: 50px;
            /* Sesuaikan tinggi yang diperlukan */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="download.jpeg" alt="Logo" class="navbar-logo">
            </a>
            <div class="navbar-text"> <!-- Ditambahkan div teks navbar -->
                APLIKASI KAS RK-BMR
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container">
        <div class="form-container">
            <h2 class="text-center mb-4">Konfirmasi Setor Uang</h2>
            <?php if (isset($message)) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $message; ?>
                </div>
            <?php } ?>

            <a href="index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>


    <!-- Sertakan Bootstrap JS (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>