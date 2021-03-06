<?php
session_start();
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}?>

<!-- Mengecek Koneksi Ke Database -->
<?php
include('connection.php');
?>

<!-- Mendapatkan ID Data Buku -->
<?php
$id = $_GET['id'];
$query = mysql_query("select * from daftarbuku where id='$id'") or die(mysql_error());
$data = mysql_fetch_array($query);
?>

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
      <li role="presentation" class="active"><a href="#">Input Data Buku</a></li>
      <li role="presentation"><a href="listadmin.php">Ubah Data Buku</a></li>
  </ul>
 <br>
  <h3>Selamat Datang, <b><? echo $_SESSION['username']; ?></b></h3>
  <br>
  <a href="logout.php"><button type="button" class="btn btn-default">Logout</button></a><br>
  <br>

  <!-- Menampilkan Form Update Data -->
  <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <form name="update_data" method="post" action="update.php">
          <input type="hidden" name="id" value="<?php echo $id; ?>" />
          <td>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
              <br>
              <tr>
                <td width="500">Judul</span></td>
                <td width="25">:</td>
                <td width="300"><input type="text" name="judul" required="required" value="<?php echo $data['judul']; ?>"></td>
              </tr>
              <tr>
                <td><br></td>
              </tr>
              <tr>
                <td>Penulis</td>
                <td>:</td>
                <td><input type="text" name="penulis" required="required" value="<?php echo $data['penulis']; ?>"/></td>
              </tr>
              <tr>
                <td><br></td>
              </tr>
              <tr>
                <td>Penerbit</td>
                <td>:</td>
                <td><input type="text" name="penerbit" required="required" value="<?php echo $data['penerbit']; ?>"/></td>
              </tr>
              <tr>
                <td><br></td>
              </tr>
              <tr>
                <td>Tahun Terbit</td>
                <td>:</td>
                <td><input type="number" name="tahun" maxlength="4" required="required" value="<?php echo $data['tahun']; ?>"/></td>
              </tr>
              <tr>
                <td><br></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input class="btn btn-default" type="submit" name="Submit" value="Simpan Data Buku"></td>
                </tr>
            </table>
          </td>
        </form>
      </tr>
  </table>

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