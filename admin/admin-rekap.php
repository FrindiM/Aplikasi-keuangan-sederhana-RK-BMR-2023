<?php
include('../funtion/koneksi.php');

// Pagination
$limit = 10; // Jumlah data per halaman
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Halaman saat ini, default 1
$start = ($page - 1) * $limit; // Index data awal untuk query

if (isset($_POST['validasi'])) {
    $id = $_POST['id'];
    $updateQuery = "UPDATE rekap SET ket = 'sudah' WHERE id = $id";
    mysqli_query($conn, $updateQuery);
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $deleteQuery = "DELETE FROM rekap WHERE id = $id";
    mysqli_query($conn, $deleteQuery);
} elseif (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $jenis = $_POST['jenis'];

    $updateQuery = "UPDATE rekap SET nama='$nama', keterangan='$keterangan', masuk='$masuk', keluar='$keluar', jenis='$jenis' WHERE id = $id";
    mysqli_query($conn, $updateQuery);
}

// Menghitung total data
$queryTotal = "SELECT count(*) as total FROM rekap";
$resultTotal = mysqli_query($conn, $queryTotal);
$rowTotal = mysqli_fetch_assoc($resultTotal);
$totalData = $rowTotal['total'];

// Menghitung total halaman
$totalPages = ceil($totalData / $limit);

// Mengambil data dengan limit
$query = "SELECT * FROM rekap ORDER BY id DESC LIMIT $start, $limit";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data rekap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Data rekap bos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Masuk</th>
                    <th>Keluar</th>
                    <th>Jenis</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<form action="" method="POST">';
                    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                    echo '<td><input type="text" name="nama" value="' . $row['nama'] . '"></td>';
                    echo '<td><input type="text" name="keterangan" value="' . $row['keterangan'] . '"></td>';
                    echo '<td><input type="text" name="masuk" value="' . $row['masuk'] . '"></td>';
                    echo '<td><input type="text" name="keluar" value="' . $row['keluar'] . '"></td>';
                    echo '<td><input type="text" name="jenis" value="' . $row['jenis'] . '"></td>';
                    echo '<td>' . $row['ket'] . '</td>';
                    echo '<td>';
                    echo '<button type="submit" name="update" class="btn btn-primary">Update</button>';
                    echo '<button type="submit" name="validasi" class="btn btn-success">Validasi</button>';
                    echo '<button type="submit" name="hapus" class="btn btn-danger">Hapus</button>';
                    echo '</td>';
                    echo '</form>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                for ($i = 1; $i <= $totalPages; $i++) {
                    echo '<li class="page-item"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>