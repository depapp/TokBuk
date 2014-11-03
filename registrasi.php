<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username & password Dikirim Dari Form Input
	$username=mysql_real_escape_string($_POST['username']); 
	$password=mysql_real_escape_string($_POST['password']); 
	
	$sql="Insert into users(username,password) values('$username','$password');";
	$result=mysql_query($sql);
}
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
      <li role="presentation"><a href="index.php">Login</a></li>
      <li role="presentation" class="active"><a href="#">Registrasi</a></li>
  </ul>

  <br>
  <center><h2>Registrasi Akun</h2></center>

  <!-- Form Regis -->
  	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
				<form name="form1" method="post" action="registrasi.php">
					<td>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
							<br>
							<tr>
								<td width="45"><span class="glyphicon glyphicon-user"></span></td>
								<td width="25">:</td>
								<td width="300"><input name="username" type="text" id="username" required="required" placeholder=" username"></td>
							</tr>
							<tr>
                				<td><br></td>
              				</tr>
							<tr>
								<td><span class="glyphicon glyphicon-lock"></span></td>
								<td>:</td>
								<td><input name="password" type="password" id="password" required="required" placeholder=" password"></td>
							</tr>
							<tr>
                				<td><br></td>
              				</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><input  class="btn btn-default" type="submit" name="Submit" value="Buat Akun"></td>
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