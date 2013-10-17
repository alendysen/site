<?php
session_start();
$server = 'localhost';
$username = 'root';
$password = 'asdf';
$con = mysql_connect($server, $username, $password);
mysql_select_db("course",$con);

function login () {	
	$user = $_POST['username'];
	$pass = md5($_POST['pass']);
	$q = mysql_query("select username from login where username='$user' and pass='$pass'");
	$hasil = mysql_num_rows($q);
	if($hasil==1){
		$qry = mysql_query("select uid, username from login where username='$user'");
		while($result = mysql_fetch_array($qry)){
			// set session value!
			$_SESSION['user'] = $result['username'];
			$_SESSION['uid'] = $result['uid'];	
		}
		
		header("location: view/success.php");
		}
	else {
		echo "HAHA! Salah! :P";
		echo "<a href='view/login.php'>Login</a>";
		}
}
	
function register () {
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$tanggal = $_POST['tanggal'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$alamat = $_POST['alamat'];
	$pass = $_POST['pass'];
	$repass = $_POST['repass'];
	$ttl = $tanggal." ".$bulan." ".$tahun;
	$mdpass = md5($pass);
	if($pass==$repass){
		mysql_query("insert into register (nama, username, email, ttl, alamat) values ('$nama','$username','$email','$ttl','$alamat')");
		mysql_query("insert into login (username, pass) values ('$username','$mdpass')");
		echo "Register Berhasil!<br>";
		echo "<a href='view/login.php'>Login</a>";
		}
	else {
		echo "Register Gagal!<br>";
		echo "<a href='view/register.php'>Register</a>";
		echo "<a href='view/login.php'>Login</a>";
	}
}

function logout(){
	session_start();
	session_destroy();
	header("location: view/login.php");
}

function edit(){
	$uid = $_SESSION['uid'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$alamat = $_POST['alamat'];
	mysql_query("update login set username='$username' where uid='$uid'");
	mysql_query("update register set nama='$nama', username='$username', email='$email', alamat='$alamat' where uid='$uid'");
	$_SESSION['id'] = $username;
	echo "Edit data berhasil!<br>";
	echo "<a href='view/success.php'>Home</a>";
}

if(isset($_POST['login'])) {
		login();	
	}
	elseif(isset($_POST['register'])) {	
		register();
	}
	elseif(isset($_GET['s'])){
		logout();
	}
	elseif(isset($_POST['edit'])){
		edit();
	}
?>