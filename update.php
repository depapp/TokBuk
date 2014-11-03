<?php
include('connection.php');
 
//Mengambil Data Dari Form Inputan
$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun =  $_POST['tahun'];

//Mengupdate Data Di Database Sesuai Dengan ID
$query = mysql_query("update daftarbuku set judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun='$tahun' where id='$id'") or die(mysql_error());
 
// Untuk Menampilkan Pesan Sukses Mengupdate Data
if ($query) {
    header('location:listadmin.php?message=success');
}
?>