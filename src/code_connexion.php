<?php

include'connexionbdd.php';


//Initialisation de la variable $_SESSION
/*if(isset($_POST['send']))
{*/
    $email = $_POST['email'];
    $password = $_POST['password'];
   /* if (!empty($email) AND !empty($password)) 
    {
     
    }*/
   $newUser = $bdd->prepare("SELECT id, email, password FROM user WHERE email=:email AND password=:password");
    $newUser->execute(array(
                "email" => $email,
                "password" => $password
                ));
   if ($newUser = $newUser->fetch())
   {
    echo "Il existe";
    $a = $newUser['id'];
   header('Location:page-profil.php?id='.$a);
   }
   else
   {
    header('Location:page-connexion.php');   
   }

  