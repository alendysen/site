<?php
if(isset($_SESSION['user'])){
	header("location: home.php");	
	}
	
$bulan = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
?>

<html>
<head>
	<title>Aplikasi Registrasi</title>
</head>
<body>
<h2>Register</h2><small><?echo date("H:i:s");?></small>
<form method="post" action="../../auth/auth.php">
<table>
	<tr>
		<td>Nama</td><td> : <input type="text" name="nama" size="25"></td>	
	</tr>
	<tr>
		<td>Username</td><td> : <input type="text" name="username" size="25"></td>	
	</tr>
	<tr>
		<td>Email</td><td> : <input type="text" name="email" size="25"></td>	
	</tr>
	<tr>
		<td>Tanggal Lahir</td><td> :  <select name="tanggal">
		<?
		for($i=1; $i<=31; $i++){
			echo "<option value=".$i.">".$i."</option>";
			}
		?>																	
		</select>
		<select name="bulan">
		<?
		for($i=0; $i<=11; $i++){
			echo "<option value=".$bulan[$i].">".$bulan[$i]."</option>";
			}
		?>
		</select>
		<select name="tahun">
		<?
		for($i=1980; $i<=2010; $i++){
			echo "<option value=".$i.">".$i."</option>";
			}
		?></select></td>	
	</tr>
	<tr>
		<td valign="top">Alamat </td><td valign="top"> : <textarea name="alamat" rows="5" cols="30"></textarea></td>	
	</tr>
	<tr>
		<td>Password</td><td> : <input type="password" name="pass" size="25"></td>
	</tr>
	<tr>
		<td>Repeat Password</td><td> : <input type="password" name="repass" size="25"></td>
	</tr>
	<tr><td colspan="2" align="right"><input type="submit" name="register" value="Register!"><input type="reset" value="Reset"></td></tr>	
</table>
</form>
<a href="login.php">Back</a>
</body>
</html>