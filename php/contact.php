<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$from = 'From: Cynergie Website';
$to = 'email';

$body = "From: $name\n E-mail: $email \n Phone: $phone \n Subject:
$subject \n Message: $message";

if($_POST['submit']){

  if($name != '' || $email != '' || $subject != '' || $message != ''){

    if(mail ( $to, $subject, $body, $from)){

      echo '<p> Votre message a été envoyé</p>';

    }else {

      echo '<p> Le message n\'a pas été envoyé, une erreur s\'est produite ! </p>';

    }
  }else{

    echo '<p> Des champs sont requis !</p>';

  }

}

?>
