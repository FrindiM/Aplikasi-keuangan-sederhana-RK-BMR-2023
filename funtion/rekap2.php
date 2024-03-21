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
            /* Margin between buttons */
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
                /* Adjust margin for smaller screens */
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
            /* Adjust the width as needed */
            height: 50px;
            /* Adjust the height as needed */
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
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="download.jpeg" alt="Logo" class="navbar-logo">
            </a>
            <div class="navbar-text"> <!-- Added navbar text div -->
                APLIKASI KAS RK-BMR
            </div>
        </div>
    </nav>

    <div class="container">
        <?php
        include "koneksi.php";
        // menampilkan semua table kas
        $tampilKas = $conn->query("SELECT * FROM rekap") or die(mysqli_error($conn));

        ?>

        <h2>Kas Panitia</h2>
        <hr>
        <!--<a href="laporan/export_rekam_pdf.php" class="btn btn-primary" style="margin-bottom: 10px;" target="_blank">Export to PDF</a>
        
        href="laporan/export_rekam_excel.php" class="btn btn-warning" style="margin-bottom: 10px;" target="_blank">Export to Excel</a>-->
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
                            $no = 1;
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

            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>