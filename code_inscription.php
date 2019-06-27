<?php 

/*$_POST*/
if ((include 'code.php') == TRUE) {
   
}

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=bdd-conf;charset=utf8', 'root', '');
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

/*$reponse = $bdd->query('SELECT pseudo, password FROM user WHERE pseudo='.$pseudo);
     
    if ($donnees = $reponse->fetch())
    {
        echo 'Il y a déjà une personne qui utilise '.$pseudo .' comme pseudo !<br />'; //redirection vers formulaire de connexion 
    }
    else
    {*/
       echo 'le pseudo est libre'; //redirection vers home
	$newUser = $bdd->prepare("INSERT INTO user (pseudo, firstName, lastName, email, password) VALUES (:pseudo, :firstName, :lastName, :email, :password)");
	$newUser->execute(array(
	            "pseudo" => $pseudo, 
	            "firstName" => $prenom,
	            "lastName" => $nom,
	            "email" => $email,
	            "password" => $mot_de_passe
	            ));
   /* }
*/

   header ("Location: index.php");-
?>