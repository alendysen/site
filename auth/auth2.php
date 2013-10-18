<?php
include('constant.php');

class auth{
    
    var $connection;
    var $login;
    var $register;
    var $session;
    
    function __construct(){
        $this->connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die (mysql_error());
        mysql_db_select(DB_NAME,$this->connection) or die (mysql_error());
        if(!isset($_SESSION['uid'])){
            $this->login = true;
        }
    }
            
    function do_login($username,$pass){
        $mdpass = md5($pass);
        $q = mysql_query("select username from login where username='$username' and pass='$mdpass' ");
        $result = mysql_num_rows($q);
        if($result == 1){
            $this->start_session($username);
            $this->login = true;
        }
        else{
            header('location:'.$site_url);
        }
    }
    
    function catch_register(){
        $data = array();
        $data['nama'] = $_POST['nama'];
        $data['username'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['alamat'] = $_POST['alamat'];
        $data['join_date'] = $_POST['join_date'];
        $data['pass'] = $_POST['pass'];
        $data['repass'] = $_POST['repass'];
    }
    
    function do_register($data){        
        extract($data);
        if($pass == $repass){
            mysql_query("insert into register (nama, usernme, email, alamat, join_date) values ('$nama', '$usernme', '$email', '$alamat', '$join_date')");
            mysql_query("insert into login (uid, username, pass)");
            header('location:'.$site_url);
        }    
    }
    
    function start_session($username){
        session_start();
        $q = mysql_query("select uid, username from login where username='$username'");
        while($result = mysql_fetch_array($q)){
            $_SESSION['uid'] = $uid;
            $_SESSION['username'] = $username;
        }        
    }    
}
?>