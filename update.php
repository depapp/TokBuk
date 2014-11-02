<?php
include('connection.php');
 
//tangkap data dari form
$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun =  $_POST['tahun'];

//update data di database sesuai user_id
$query = mysql_query("update daftarbuku set judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun='$tahun' where id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:listadmin.php?message=success');
}
?>