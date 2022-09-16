
<?php

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['usuel']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['prevenir']) && isset($_POST['ville']) && isset($_POST['region']) && isset($_POST['plainte'])) {

  $nom = $_POST['nom'];
  
// Display the original string
echo "Original String: " . $nom;
    
    $prenom = $_POST['prenom'];

    $usuel = $_POST['usuel'];

    $email = $_POST['email'];

      $telephone = $_POST['telephone'];

      $prevenir = $_POST['prevenir'];
      

      $ville = $_POST['ville'];

      $region =  $_POST['region'];

      $plainte = $_POST['plainte'];


      // Store the cipher method
$ciphering = "AES-128-CTR";
  
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
  
// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
  
// Store the encryption key
$encryption_key = "GeeksforGeeks";
  
// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($nom, $ciphering,
            $encryption_key, $options, $encryption_iv);
  
// Display the encrypted string
echo "Encrypted String: " . $encryption . "\n";


  

    

      // CONNEXION A LA BD
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "lotyeawesso_halteviolencegenre";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
 
  $sqli = "INSERT INTO $region (`nom`, `prenom`, `nom_usuel`, `email`, `votre_numero_de_telephone`, `personne_a_prevenir`, `ville_village`, `region`, `ma_plainte`)VALUES (:nom, :prenom, :nom_usuel, :email, :votre_numero_de_telephone, :personne_a_prevenir, :ville_village, :region, :ma_plainte )";
 
  $send = $conn->prepare($sqli);
  $send->execute([
    'nom' => $encryption,
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
  echo $sqli . "<br>" . $e->getMessage();
}

// affichage



$conn = null;




}
else {
  echo 'connect error ';
}






?>