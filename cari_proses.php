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
  <center>
  <!-- Proses Menampilkan Data -->
  <?php
  
  $con = mysql_connect("localhost","root","");
  // cek koneksi
  if (!$con) {
    echo "Gagal konek ke database: " . mysqli_connect_error();
  } else {
    mysql_select_db("tokbuk", $con);
  }
    
  $field = $_POST['field'];
  $find = $_POST['find'];
  $find = trim ($find);
  
  echo "<h2>Hasil Pencarian</h2>";
  echo "<h2>' <i>" . $find . "</i> ' berdasarkan <u>" . $field . "</u></h2>";
  echo "------------------------------------------------------------------------------------------------------------------------------------------";

  if ($find == "") {
    echo "<p>Masukkan Kata Pencarian. Tidak Boleh Kosong<br>";
    echo "<br><a href='main_index2.php'><button type='button' class='btn btn-default'>Cari Lagi</button></a><br><br><br><br>";
    echo "<div class='panel panel-default'>
          <div class='panel-footer'><center><span class='glyphicon glyphicon-copyright-mark'></span> by <b>Kelompok 35 Praktikum Basis Data</b>
            <br><small>Depa P P</small>
            <br><small>Zakaria A M</small>
            <br><small>Theodore D A S</small></center></div>
          </div>";
    exit;
  }
  
  //query pencarian
  $data = mysql_query("SELECT * FROM daftarbuku WHERE " . $field . " LIKE '%" . $find . "%'");
  
  //menampilkan hasil query
  while($result = mysql_fetch_array($data)) {
    echo "<p>Judul : " . $result['judul'];
    echo "<br />";
    echo "Penulis : ". $result['penulis'];
    echo "<br />";
    echo "Penerbit : ". $result['penerbit'];
    echo "<br />";
    echo "Tahun Terbit : " . $result['tahun'] . "</p>";
    echo "------------------------------------------------------------------------------------------------------------------------------------------<br>";
  }
  
  //menghitung jumlah hasil query
  $anymatches = mysql_num_rows($data);
  if ($anymatches == 0) {
    echo "<br>Tidak ada data yang cocok<br><br>";
  }
  
  //menampilkan kata pencarian
  //echo "<b>Kata pencarian :</b> " .$find;
  mysql_close($con);
?>

  <br><br><a href="main_index2.php"><button type="button" class="btn btn-default">Cari Lagi</button></a>

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