<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: login.php");
}
$uid = $_SESSION['uid'];
$server = 'localhost';
$username = 'root';
$password = 'asdf';
$con = mysql_connect($server, $username, $password);
mysql_select_db("course",$con);
$q = mysql_query("select * from register where uid='$uid'");
while($result = mysql_fetch_array($q)){
    $nama = $result['nama'];
    $uid = $result['uid'];
    $user = $result['username'];
    $email = $result['email'];
    $alamat = $result['alamat'];
}
?>

<html>
    <head>
        <title>Edit Data Diri</title>
        <?include('../partial/header.php');?>        
    </head>    
    <body>
        
        <form action='../../auth/auth.php' method=POST>
            <table>
                <tr>
                    <td>Nama</td><td> : <input type="text" name="nama" value="<? echo $nama;?>" size="25"></td>	
                </tr>
                <tr>
                    <td>Username</td><td> : <input type="text" name="username" value="<? echo $user;?>" size="25"></td>
                </tr>
                <tr>
                    <td>User ID</td><td> : <input type="text" name="uid" value="<? echo $uid;?>" size="25" readonly="readonly"></td>
                </tr>
                <tr>
                    <td>Email</td><td> : <input type="text" name="email" value="<? echo $email;?>" size="25"></td>
                </tr>                
                <tr>
                    <td valign="top">Alamat </td><td valign="top"> : <textarea name="alamat" rows="5" cols="30"><? echo $alamat;?></textarea></td>
                </tr>                
                <tr>
                    <td colspan="2" align="right"><input type="submit" name="edit" value="Register!"><input type="reset" value="Reset"></td>
                </tr>
            </table>
        </form>                
    </body>
</html>