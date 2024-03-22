<?php
session_start();
$user = $_SESSION['user'];
$role = $_SESSION['role'];

if ($role != "user") {
    header("Location: ../");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarik Uang</title>
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
                <img src="../public/download.jpeg" alt="Logo" class="navbar-logo">
            </a>
            <div class="navbar-text"> <!-- Ditambahkan div teks navbar -->
                APLIKASI KAS RK-BMR / Tarik Dana
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container">
        <div class="form-container">
            <h2 class="text-center mb-4">Form Tarik Dana</h2>
            <form action="../funtion/proses-tarik.php" method="POST">
                <div class="mb-3">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" required>
                </div>
                <div class="mb-3">
                    <label for="noHp" class="form-label">No.Hp</label>
                    <input type="text" class="form-control" id="noHp" name="noHp" value="0" required>
                </div>
                <div class="mb-3">
                    <label for="sumberDana" class="form-label">Tujuan Dana</label>
                    <input type="text" class="form-control" id="sumberDana" name="sumberDana" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                </div>
                <div class="mb-3">
                    <label for="penerima" class="form-label">No.Rekening yang akan dikirim dana</label>
                    <input type="text" class="form-control" id="penerima" name="penerima" value="0" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Bidang</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="scRadio" value="SC" required>
                        <label class="form-check-label" for="scRadio">SC</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="ksbRadio" value="KSB" required>
                        <label class="form-check-label" for="ksbRadio">KSB</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="sieAcaraRadio" value="Sie.Acara" required>
                        <label class="form-check-label" for="sieAcaraRadio">Sie.Acara</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="sieUsdanRadio" value="Sie.Usdan" required>
                        <label class="form-check-label" for="sieUsdanRadio">Sie.Usdan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="sieUsdanRadio" value="Sie.Musik" required>
                        <label class="form-check-label" for="sieMusikRadio">Sie.Musik</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="sieUsdanRadio" value="Sie.Pubdokmul" required>
                        <label class="form-check-label" for="siePubdokmulRadio">Sie.Pubdokmul</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="sieUsdanRadio" value="Sie.Perlengkapan" required>
                        <label class="form-check-label" for="siePerlengkapanRadio">Sie.Perlengkapan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="sieUsdanRadio" value="Sie.Akomodasi" required>
                        <label class="form-check-label" for="sieAkomodasiRadio">Sie.Akomodasi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="sieUsdanRadio" value="Sie.Doa" required>
                        <label class="form-check-label" for="sieDoaRadio">Sie.Doa</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="sieUsdanRadio" value="Sie.Trasportasi" required>
                        <label class="form-check-label" for="sieTrasportasiRadio">Sie.Trasportasi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="sieUsdanRadio" value="Sie.Kesehatan" required>
                        <label class="form-check-label" for="sieKesehatanRadio">Sie.Kesehatan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="sieUsdanRadio" value="Sie.Konsumsi" required>
                        <label class="form-check-label" for="sieKonsumsiRadio">Sie.Konsumsi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bidang" id="sieUsdanRadio" value="Sie.Keamanan" required>
                        <label class="form-check-label" for="sieKeamananRadio">Sie.Keamanan</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Ajukan Dana</button>
            </form>



        </div>
    </div>


    <!-- Sertakan Bootstrap JS (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>