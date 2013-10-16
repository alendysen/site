<?php
session_start();
if(isset($_SESSION['user'])){
	header("location: home.php");	
	}
?>
<html>
<head>
	<title>Aplikasi Login</title>
</head>
<body>
<h2>Aplikasi Login</h2><small>Time <?echo date('H:i:s')?></small><br><br>
<form action="../../auth/auth.php" method="post">
Username : <input type="text" name="username" size="25" placeholder="Username" /><br>
Password : <input type="password" name="pass" size="25" placeholder="Password" /><br>
<input type="submit" name="login" value="Login" />
</form>
<a href="register.php">Register</a>
<p>Aplikasi ini menggunakan session_start() jadi ga bisa ngakal2in linknya :P</p>
<p>terus pake md5 juga biar gabisa ngintip passnya :P wkwkwk</p>
</body>
</html>