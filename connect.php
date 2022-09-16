<?php
      // CONNEXION A LA BD
      $servername = "mysql-lotyeawesso.alwaysdata.net";
      $username = "281293";
      $password = "9188888";
      $dbname = "lotyeawesso_halteviolencegenre";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
  echo $sqli . "<br>" . $e->getMessage();
}

