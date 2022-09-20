<?php 
 $server = "mysql-lotyeawesso.alwaysdata.net";
 $username = "281293";
$password = "91888882";      
$database = "lotyeawesso_halteviolencegenre";


      // CONNEXION A LA BD
     // $servername = "localhost";
     // $username = "root";
     // $password = "";
     // $dbname = "import";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>