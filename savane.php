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

include('connect.php');

$sqli = "SELECT * FROM savane";
 
  $sende = $conn->prepare($sqli);
  $result = $sende->execute();
  $plaintes = $sende->fetchAll();
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
     <?php
// Store the cipher method
$ciphering = "AES-128-CTR";
$options = 0;
// Store the decryption key
$decryption_key = "GeeksforGeeks"; 

$decryption_iv = '1234567891011121';
// Use openssl_decrypt() function to decrypt the data
// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($plainte['nom'], $ciphering, 
        $decryption_key, $options, $decryption_iv);
?>
<?php 
// Display the decrypted string
?> 
  <tr>
    <td><?= $plainte['id']; ?></td>
    <td><?= $decryption; ?></td>
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
