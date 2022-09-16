<?php
      // CONNEXION A LA BD
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "lotyeawesso_halteviolencegenre";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
  echo $sqli . "<br>" . $e->getMessage();
}

