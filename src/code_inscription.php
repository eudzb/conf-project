<?php
/*$_POST*/
if ((include 'code.php') == TRUE) {

}
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=bdd-conf;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$pseudo = $_GET['pseudo'];
$prenom = $_GET['prenom'];
$nom = $_GET['nom'];
$email = $_GET['email'];
$mot_de_passe = $_GET['mot_de_passe'];

echo 'L\'utilisateur a été ajouté correctement'; //redirection vers home
$newUser = $bdd->prepare("INSERT INTO user (pseudo, firstName, lastName, email, password) VALUES (:pseudo, :firstName, :lastName, :email, :password)");
$newUser->execute(array(
            "pseudo" => $pseudo,
            "firstName" => $prenom,
            "lastName" => $nom,
            "email" => $email,
            "password" => $mot_de_passe
            ));
 header ("Location: index.php");
?>