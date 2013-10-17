<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: login.php");
}
?>
<html>
    <head>
        <title>
            Konfigurasi User
        </title>
        <font size=5><b>Konfigurasi User</b></font><br>
        <?include("../partial/header.php");?>
        <h3>Username : <?echo $_SESSION['id'];?></h3>
        <hr width=40% align=left>
    </head>
    <body>
        
        <ol type=1>
            <li><a href="edit.php">Edit Data Diri</a></li>
            <li><a href="">Edit Username</a></li>            
        </ol>
        <hr width=40% align=left>
        <a href="home.php">Back</a>
    </body>
</html>