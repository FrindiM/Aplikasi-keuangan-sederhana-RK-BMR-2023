<?php
// Sertakan file koneksi.php untuk menghubungkan ke database
include('koneksi.php');

if (isset($_POST['validasi'])) {
    $id = $_POST['id'];
    // Lakukan query untuk mengubah status menjadi "sudah"
    $updateQuery = "UPDATE kaskel SET ket = 'sudah' WHERE id = $id";
    mysqli_query($conn, $updateQuery);
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    // Lakukan query untuk menghapus data berdasarkan id
    $deleteQuery = "DELETE FROM kaskel WHERE id = $id";
    mysqli_query($conn, $deleteQuery);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kas</title>
    <!-- Sertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Data Kas</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>No. HP</th>
                    <th>Tujuan</th>
                    <th>penerima</th>
                    <th>Jumlah</th>
                    <th>Bidang</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php


                // Query untuk mengambil data dari tabel "kas"
                $query = "SELECT * FROM kaskel";
                $result = mysqli_query($conn, $query);

                // Loop melalui setiap baris data
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['nama'] . '</td>';
                    echo '<td>' . $row['hp'] . '</td>';
                    echo '<td>' . $row['tujuan'] . '</td>';
                    echo '<td>' . $row['penerima'] . '</td>';
                    echo '<td>' . $row['jumlah'] . '</td>';
                    echo '<td>' . $row['bidang'] . '</td>';
                    echo '<td>' . $row['ket'] . '</td>';
                    echo '<td>';
                    echo '<form action="" method="POST">';
                    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                    echo '<button type="submit" name="validasi" class="btn btn-success">Validasi</button>';
                    echo '<button type="submit" name="hapus" class="btn btn-danger">Hapus</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }

                // Tutup koneksi database
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>

    <!-- Sertakan Bootstrap JS (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>