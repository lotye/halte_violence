<?php
session_start();


include('connect.php');



$sqli = "SELECT * FROM administrateur";
 
  $sende = $conn->prepare($sqli);
  $result = $sende->execute();
  $user = $sende->fetch();
  // var_dump($user);
 $db_mail = $user['email'];
  $db_mp = $user['motdepasse'];

  echo $db_mail;
  // echo($_POST['mp']);
  $input_mail = $_POST['mail'];
  $input_mp = $_POST['mp'];
 

 if ($input_mail !== $db_mail && $input_mp !== $db_mp) {
  echo'praaaaa!!!';
  header('Location: securite.php');
  
 }
 else{
    $_SESSION['state'] = 'autorisé';
    header('Location: interface.php');
  echo 'pop!!!';
  
}
?>