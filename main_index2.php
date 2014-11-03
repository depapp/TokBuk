<?php
session_start();
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}?>

<!DOCTYPE html>
<html>
  <head>
    <title>Toko Buku Do'a Ibu</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <script src="js/bootstrap.min.js"></script>
  </head>

<body>
  <!-- Heading -->
  <div class="container">
  <div class="page-header">
    <h1>Toko Buku Do'a Ibu<br> <small><i>Melayani Dengan Sepenuh Hati</i></small></h1>
  </div>
  </div>

  <!-- Tab Menu -->
  <div class="container">
  <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#">Pencarian Buku</a></li>
      <li role="presentation"><a href="list.php">Lihat Semua Buku</a></li>
  </ul>

  <br>
  <h3>Selamat Datang, <b><? echo $_SESSION['username']; ?></b></h3>
  <br>
  <a href="logout.php"><button type="button" class="btn btn-default">Logout</button></a>

  <!-- Menampilkan Form Pencarian Buku -->
  <center><h2>Pencarian Buku</h2><br>
  <form name="search" action="cari_proses.php" method="post">
    Cari : &nbsp;<input type="text" name="find" /> &nbsp;berdasarkan&nbsp;
    <select NAME="field">
        <option vaue="judul">Judul</option>
        <option vaue="penulis">Penulis</option>
        <option vaue="penerbit">Penerbit</option>
        <option vaue="tahun">Tahun</option>
    </select>
    &nbsp; &nbsp;<input class="btn btn-default" type="submit" name="search" value="Search" />
  </form>
  </center>

  <!-- Footer -->
  <br><br><br>
  <div class="panel panel-default">
  <div class="panel-footer"><center><span class="glyphicon glyphicon-copyright-mark"></span> <?php echo date("Y"); ?> by <b>Kelompok 35 Praktikum Basis Data</b>
    <br><small>Depa P P</small>
    <br><small>Zakaria A M</small>
    <br><small>Theodore D A S</small>
    </center></div>
  </div>

  </div>
  </body>
</html>