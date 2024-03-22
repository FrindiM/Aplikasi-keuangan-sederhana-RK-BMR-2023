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
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* Gaya CSS Anda yang sudah ada di sini */

        .custom-btn {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .custom-btn .material-icons {
            font-size: 48px;
        }

        .custom-btn p {
            font-size: 24px;
            font-weight: bold;
        }

        @media (max-width: 767px) {
            .custom-btn {
                margin-bottom: 10px;
            }
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
            height: 50px;
        }

        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #f8f9fa;
            border-top: 2px solid #ccc;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .info-box {
            text-align: center;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            margin-top: 20px;
        }

        .info-box img {
            width: 100px;
            height: 100px;
        }

        .info-box h6 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .info-box p {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .btn-logout {
            border: 1px solid black;
            border-radius: 5px;
            text-decoration: none;
            padding: 10px;
            color: black;

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
            <div class="navbar-text">
                APLIKASI KAS RK-BMR
            </div>
            <a href="../funtion/logout.php" class="btn-logout">LogOut</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-2">
                <a href="setor.php" class="btn btn-lg btn-block custom-btn mb-2">
                    <span class="material-icons">account_balance_wallet</span>
                    <p>Setor Dana</p>
                </a>
            </div>
            <div class="col-md-4 mt-2">
                <a href="tarik.php" class="btn btn-lg btn-block custom-btn mb-2">
                    <span class="material-icons">attach_money</span>
                    <p>Tarik Dana</p>
                </a>
            </div>
            <div class="col-md-4 mt-2">
                <a href="rekap.php" class="btn btn-lg btn-block custom-btn mb-2">
                    <span class="material-icons">monetization_on</span>
                    <p>Rekap Dana</p>
                </a>
            </div>
        </div>

        <!-- Informasi Nomor Rekening dan E-Wallet -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="info-box">
                    <img src="../assets/download.jpeg" alt="Logo" class="mb-3">
                    <h6 class="mb-3">Bagi yang telah melakukan pendaftaran penyetoran dana harap mentransfer dana tersebut ke rekening atau e-walet dibawah, atau hubungi bendahara untuk konfirmasi</h6>
                    <p>Nama Bank : Bank Hana</p>
                    <p>Atas Nama : Frindi Mangimbulude</p>
                    <p>Nomor Rekening: 19975926680</p>
                    <p>Dana, OVO, Gopay, ShopeePay</p>
                    <p>085242436146</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer
    <div class="footer">
        &copy; 2023 Bendahara RK
    </div> -->

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>