<?php
include'connexionbdd.php';

if(isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $newUser = $bdd->prepare("SELECT id, email, password, status FROM user WHERE email=:email AND password=:password");
  $newUser->execute(array("email" => $email, "password" => $password));

  if ($newUser = $newUser->fetch()) {
    session_start();
    $_SESSION['idSession'] = $newUser['id'];
    $_SESSION['status'] = $newUser['status'];
    header('Location:page-profil.php?id='.$_SESSION['idSession'].'&status='.$_SESSION['status']);
  }
    else {
      header('Location:page-connexion.php');
    }
} else {
  $error = "Veuillez remplir les champs !";
}


