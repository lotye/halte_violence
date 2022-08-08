<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esayage";


try {
 $dbconnect = new PDO("mysql:host=$servername;dbname=$dbname","$username","$password");
 echo "connecté à la bdd";
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }


if(isset($_POST['insert'])){
 
  // récupérer les valeurs 

  if(isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    }
    
    
    if(isset($_POST['prenom'])){
    $prenon = $_POST['prenom'];
    }
    
    if(isset($_POST['nom_usuel'])){
    $usuel = $_POST['nom_usuel'];
    }
   
    if(isset($_POST['email'])){
    $email = $_POST['email'];
    }
    
    
    if(isset($_POST['votre_numero_de_telephone'])){
    $telephone = $_POST['votre_numero_de_telephone'];
    }
    
    if(isset($_POST['personne_a_prevenir'])){
    $prevenir = $_POST['personne_a_prevenir'];
    }
  
    if(isset($_POST['ville_village'])){
    $ville = $_POST['ville_village'];
    }
    
    if(isset($_POST['region'])){
    $region = $_POST['region'];
    }
     
    if(isset($_POST['ma_plainte'])){
      $region = $_POST['ma_plainte'];
      }

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `kara`(`nom`, `prenom`, `nom_usuel` ,`email`, `votre_numero_de_telephone`, `personne_a_prevenir`,`ville_village`, `region`, `ma_plainte` ) VALUES (:nom,:prenom,:nom_usuel,:email,:votre_numero_de_telephone,:personne_a_prevenir,:ville_village,:region,:ma_plainte )";
  $res = $dbconnect->prepare($sql);
  $res->execute(array(":nom"=>$nom,":prenom"=>$prenon,":nom_usuel"=>$nom_usuel,":email"=>$email,":votre_numero_de_telephone"=>$votre_numero_de_telephone,":personne_a_prevenir"=>$personne_a_prevenir,":ville_village"=>$ville_village,":region"=>$region ,":ma_plainte"=>$ma_plainte ));
  // vérifier si la requête d'insertion a réussi
  
}

  









?>
