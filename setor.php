<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setor Uang</title>
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
                APLIKASI KAS RK-BMR / Setor Dana
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container">
        <div class="form-container">
            <h2 class="text-center mb-4">Form Setor Uang</h2>
            <form action="proses-setor.php" method="POST">
                <div class="mb-3">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" required>
                </div>
                <div class="mb-3">
                    <label for="noHp" class="form-label">No.Hp</label>
                    <input type="text" class="form-control" id="noHp" name="noHp" required>
                </div>
                <div class="mb-3">
                    <label for="sumberDana" class="form-label">Sumber Dana</label>
                    <input type="text" class="form-control" id="sumberDana" name="sumberDana" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Setor Uang</button>
            </form>

            <div class="mt-3">
                <p>Nomor Rekening: Bank Hana: 19975926680</p>
                <p>E-Wallet: Dana, Gopay, Ovo, ShopeePay: 085242436146</p>
            </div>
        </div>
    </div>


    <!-- Sertakan Bootstrap JS (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>