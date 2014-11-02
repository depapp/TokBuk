<?php
include('connection.php');
 
$id = $_GET['id'];
 
$query = mysql_query("delete from daftarbuku where id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:listadmin.php?message=delete');
}
?>