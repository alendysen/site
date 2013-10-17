<?php
session_start();
if(!isset($_SESSION['user'])){
	header("location: login.php");	
	}
?>
<html>
<head>
	<title>Success</title>
</head>
<font size=5><b>Selamat! Anda sudah login!</b></font>
<br><?include("../partial/header.php");?>
<body>
<h2>Informasi Anda</h2>
<hr width=40% align=left>
<?
$server = 'localhost';
$username = 'root';
$password = 'asdf';
$con = mysql_connect($server, $username, $password);
mysql_select_db("course",$con);
$uid = $_SESSION['uid'];
$q = mysql_query("select * from register where uid='$uid'");
while($result = mysql_fetch_array($q)){
echo "<table><tr><td>Nama</td><td>     : <b>".$result['nama']."</b></td></tr>";
echo "<tr><td>User ID</td><td> : <b>".$result['uid']."</b></td></tr>";
echo "<tr><td>Username</td><td> : <b>".$result['username']."</b></td></tr>";
echo "<tr><td>Email</td><td>    : <b>".$result['email']."</b></td></tr>";
echo "<tr><td>TTL</td><td>      : <b>".$result['ttl']."</b></td></tr>";
echo "<tr><td>Alamat</td><td>   : <b>".$result['alamat']."</b></td></tr></table>";
echo "<hr width=40% align=left>";
}
?>
</body>
</html>