<?php
session_start();
$user = $_SESSION['user'];
$role = $_SESSION['role'];

if ($role != "user") {
    header("Location: ../");
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Sertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Sertakan Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
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
            /* Jarak antar tombol */
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
                /* Sesuaikan jarak untuk layar yang lebih kecil */
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
            /* Sesuaikan lebar jika diperlukan */
            height: 50px;
            /* Sesuaikan tinggi jika diperlukan */
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

        .btn-back {
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
            <div class="navbar-text"> <!-- Div teks navbar ditambahkan -->
                APLIKASI KAS RK-BMR
            </div>
            <a href="index.php" class="btn-back">Home</a>
        </div>
    </nav>

    <div class="container">
        <?php
        include "../funtion/koneksi.php";
        // Pagination
        $limit = 10; // Jumlah rekaman per halaman
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $limit;

        // Mengambil rekaman dengan batasan
        $tampilKas = $conn->query("SELECT * FROM rekap LIMIT $start, $limit") or die(mysqli_error($conn));

        ?>

        <h2>Kas Panitia</h2>
        <hr>

        <div class="panel panel-danger">
            <div class="panel-heading">
                Data Kas Masuk
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Jenis</th>
                                <th>Masuk</th>
                                <th>Keluar</th>
                                <th>Status Validasi Bendahara</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = $start + 1;
                            while ($data = $tampilKas->fetch_assoc()) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['nama']; ?></td>
                                    <td><?= $data['tanggal']; ?></td>
                                    <td><?= $data['keterangan']; ?></td>
                                    <td><?= $data['jenis']; ?></td>
                                    <td>Rp.<?= number_format($data['masuk']); ?></td>
                                    <td>Rp.<?= number_format($data['keluar']); ?></td>
                                    <td><?= $data['ket']; ?></td>
                                </tr>

                            <?php endwhile; ?>
                        </tbody>
                        <tfoot>
                            <?php
                            $sql = "SELECT SUM(masuk) AS total_masuk, SUM(keluar) AS total_keluar FROM rekap WHERE ket = 'sudah'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $totalMasuk = $row['total_masuk'];
                                $totalKeluar = $row['total_keluar'];
                                $saldoAkhir = $totalMasuk - $totalKeluar;
                            }
                            ?>

                            <tr>
                                <th colspan="7">Total Kas Masuk</th>
                                <td>Rp.<?= number_format($totalMasuk); ?></td>
                            </tr>
                            <tr>
                                <th colspan="7">Total Kas Keluar</th>
                                <td>Rp.<?= number_format($totalKeluar); ?></td>
                            </tr>
                            <tr>
                                <th colspan="7">Saldo Akhir</th>
                                <td>Rp.<?= number_format($saldoAkhir); ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!-- Pagination -->
                <?php
                // Hitung total rekaman
                $total_records = mysqli_num_rows($conn->query("SELECT * FROM rekap"));
                $total_pages = ceil($total_records / $limit);

                echo "<ul class='pagination'>";
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<li class='page-item'><a class='page-link' href='?page=" . $i . "'>" . $i . "</a></li>";
                }
                echo "</ul>";
                ?>
            </div>
        </div>
    </div>
    <!-- Sertakan Bootstrap JS (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>