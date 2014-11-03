<!-- Mengecek Koneksi -->
<?php
include('connection.php');
?>

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
      <li role="presentation"><a href="main_index2.php">Pencarian Buku</a></li>
      <li role="presentation" class="active"><a href="#">Lihat Semua Buku</a></li>
  </ul>
  
  <br>
  <h3>Selamat Datang, <b><? echo $_SESSION['username']; ?></b></h3>
  <br>
  <a href="logout.php"><button type="button" class="btn btn-default">Logout</button></a><br>
  
  <!-- Menampilkan List Semua Buku -->
  <center><h2>Daftar Semua Buku</h2>
  <br>
  <table class="table table-striped" border="1">
    <thead>
        <tr>
            <td><center><b>NO</b></center></td>
            <td><center><b>Judul</b></center></td>
            <td><center><b>Penulis</b></center></td>
            <td><center><b>Penerbit</b></center></td>
            <td><center><b>Tahun</b></center></td>
           
        </tr>
    </thead>
    <tbody>
    <?php
    $query = mysql_query("select * from daftarbuku");
 
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            <td><center><?php echo $no; ?></center></td>
            <td><center><?php echo $data['judul']; ?></center></td>
            <td><center><?php echo $data['penulis']; ?></center></td>
            <td><center><?php echo $data['penerbit']; ?></center></td>
            <td><center><?php echo $data['tahun']; ?></center></td>
           
            
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
  </table></center>

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