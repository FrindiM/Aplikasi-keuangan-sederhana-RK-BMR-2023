<?php
ob_start();
require_once '../koneksi.php';
require_once '../assets/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

$sqlRekap = $conn->query("SELECT * FROM rekap") or die(mysqli_error($conn));
// $jk = ($pecahAnggota['jk'] == 'L') ? 'Laki-Laki' : 'Perempuan';


$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Export to PDF Rekapitulasi Kas</title>
</head>
<body>
<h2>Laporan Rekapitulasi Kas</h2>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
      <th>No</th>
      <th>Kode</th>
      <th>Tanggal</th>
      <th>Keterangan</th>
      <th>Masuk</th>
      <th>Jenis</th>
      <th>Keluar</th>
  	</tr>';
$no = 1;
while ($data = $sqlRekap->fetch_assoc()) {
	$html .= '
							<tr>
								<td>' . $no++ . '</td>
								<td>' . $data["nama"] . '</td>
								<td>' . $data["tanggal"] . '</td>
								<td>' . $data["keterangan"] . '</td>
								<td>' . $data["jenis"] . '</td>
								<td>' . number_format($data["masuk"]) . '</td>
								<td>' . number_format($data["keluar"]) . '</td>
							</tr>

  					';
	$sql = "SELECT SUM(masuk) AS total_masuk, SUM(keluar) AS total_keluar FROM rekap WHERE ket = 'sudah'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$totalMasuk = $row['total_masuk'];
		$totalKeluar = $row['total_keluar'];
		$saldoAkhir = $totalMasuk - $totalKeluar;
	}
}

$html .= '<tr>
                		<th colspan="4">Total Kas Masuk</th>
                		<td>Rp.' . number_format($totalMasuk) . '</td>
                	</tr>
                	<tr>
                		<th colspan="4">Total Kas Keluar</th>
                		<td>Rp.' . number_format($totalKeluar) . '</td>
                	</tr>
                	<tr>
                		<th colspan="4">Saldo Akhir</th>
                		<td>Rp.' . number_format($saldoAkhir) . '</td>
                	</tr>';

$html .= '
</table>
</body>
</html>';

$html2pdf->writeHTML($html);
ob_end_clean();
$html2pdf->output();
