
<?php

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['usuel']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['prevenir']) && isset($_POST['ville']) && isset($_POST['region']) && isset($_POST['plainte'])) {

  $nom = $_POST['nom'];
    
    $prenom = $_POST['prenom'];

    $usuel = $_POST['usuel'];

    $email = $_POST['email'];

      $telephone = $_POST['telephone'];

      $prevenir = $_POST['prevenir'];
      

      $ville = $_POST['ville'];

      $region =  $_POST['region'];

      $plainte = $_POST['plainte'];




    

      // CONNEXION A LA BD
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "esayage";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
 
  $sql = "INSERT INTO $region (`nom`, `prenom`, `nom_usuel`, `email`, `votre_numero_de_telephone`, `personne_a_prevenir`, `ville_village`, `region`, `ma_plainte`)VALUES (:nom, :prenom, :nom_usuel, :email, :votre_numero_de_telephone, :personne_a_prevenir, :ville_village, :region, :ma_plainte)";
 
  $send = $conn->prepare($sql);
  $send->execute([
    'nom' => $nom ,
    'prenom' => $prenom,
    'nom_usuel' => $usuel,
    'email' => $email,
    'votre_numero_de_telephone' => $telephone,
    'personne_a_prevenir' => $prevenir,
    'ville_village' => $ville,
    'region' => $region,
    'ma_plainte' => $plainte
  ]);

  // *******************le nombre d'utilisateurs de la base de données
  $sqli = "SELECT COUNT(*) FROM $region";
 
  $sende = $conn->prepare($sqli);
  $result = $sende->execute();
  $nbr = $sende->fetch();

  // var_dump($nbr);+
  echo "Nombre d'utilisateurs enregistrés ".$nbr[0];
  echo "</br>";
  // *******************le nombre d'utilisateurs de la base de données

  
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;




}
else {
  echo 'error ';
}


?>