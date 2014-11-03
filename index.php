<?php
session_start();
if (isset($_SESSION['username'])) {
header('Location: main_index.php');
}
include('connection.php');
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
      <li role="presentation" class="active"><a href="#">Login</a></li>
      <li role="presentation"><a href="registrasi.php">Registrasi</a></li>
  </ul>

  <br>
  <center><h2>Silahkan Login Terlebih Dahulu</h2></center>
  
  <!-- Form Input -->
  <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <form name="form1" method="post" action="checklogin.php">
          <td>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
              <br>
              <tr>
                <td width="45"><span class="glyphicon glyphicon-user"></span></td>
                <td width="25">:</td>
                <td width="300"><input name="myusername" type="text" id="myusername" required="required" placeholder=" username"></td>
              </tr>
              <tr>
                <td><br></td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-lock"></td>
                <td>:</td>
                <td><input name="mypassword" type="password" id="mypassword" required="required" placeholder=" password"></td>
              </tr>
              <tr>
                <td><br></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input class="btn btn-default" type="submit" name="Submit" value="Login"></td>
              </tr>
            </table>
          </td>
        </form>
      </tr>
  </table>
  
  <!-- Footer -->
  <br><br><br><br><br><br><br>
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