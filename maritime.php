<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

      // CONNEXION A LA BD
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "import";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$sqli = "SELECT * FROM maritime";
 
  $sende = $conn->prepare($sqli);
  $result = $sende->execute();
  $plaintes = $sende->fetchAll();
?>

<?php
// Store the cipher method
$ciphering = "AES-128-CTR";
$options = 0;
$plainte='nom';
// Store the decryption key
$decryption_key = "GeeksforGeeks"; 

// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($plaintes, $ciphering, 
         $options, $decryption_iv);
?>
<?php
 
  // Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';
  
// Store the decryption key
$decryption_key = "GeeksforGeeks";
  
// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($plaintes, $ciphering, 
        $decryption_key, $options, $decryption_iv);
  
// Display the decrypted string
echo "Decrypted String: " . $decryption;
?>

<table>
  <thead>
    <tr>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>email</th>
    <th>region</th>
    <th>plainte</th>
    </tr>
  </thead>
<tbody>
<?php
  foreach($plaintes as $plainte){
    ?>
      
  <tr>
    <td><?= $plainte['id']; ?></td>
    <td><?= $plainte['nom']; ?></td>
    <td><?= $plainte['prenom']; ?></td>
    <td><?= $plainte['email']; ?></td>
    <td><?= $plainte['region']; ?></td>
    <td><?= $plainte['ma_plainte']; ?></td>
   
  </tr>
  
<?php



  }
  ?>
</tbody>
</table>
<?php
  // echo '<pre>';
  // var_dump($plaintes);
  // echo '</pre>';
  




?>


    
</body>
</html>
