<?php
session_start();
include('connection.php');
$username=mysql_real_escape_string($_POST['myusername']); 
$password=mysql_real_escape_string($_POST['mypassword']); 

$admin = mysql_query("SELECT * FROM admin WHERE (username = '$username') and (password = '$password')");
$user = mysql_query("SELECT * FROM users WHERE (username = '$username') and (password = '$password')");

if (mysql_num_rows($admin) == 1) {
	
$_SESSION['username'] = $_POST['myusername'];
header('Location: main_index.php');
}
else {
header('Location: index.php');
}

if (mysql_num_rows($admin) == 0) {
	if (mysql_num_rows($user) == 1) {
		$_SESSION['username'] = $_POST['myusername'];
		header('Location: main_index2.php');
		}
		else {
		header('Location: index.php');
		}
	}

?>