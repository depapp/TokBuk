<?php
// Mengecek Koneksi
include('connection.php');

// Mengambil Data Dari Inputan
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

// Menyimpan Data Ke Database
$query = mysql_query("insert into daftarbuku values('', '$judul', '$penulis', '$penerbit', '$tahun')") or die(mysql_error());

// Perintah Menampilkan Pesan Sukses
if ($query) {
    header('location:main_index.php?message=success');
}
?>