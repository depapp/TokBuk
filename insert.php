<?php
//panggil file config.php untuk menghubung ke server
include('connection.php');
 
//tangkap data dari form
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];

//simpan data ke database
$query = mysql_query("insert into daftarbuku values('', '$judul', '$penulis', '$penerbit', '$tahun')") or die(mysql_error());
 
if ($query) {
    header('location:main_index.php?message=success');
}
?>