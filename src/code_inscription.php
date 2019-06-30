<?php
session_start();

include"connexionbdd.php";
include 'code.php';

if (!empty($_POST['pseudo']) && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['mot_de_passe']) && !empty($_POST['mot_de_passe2'])) {

	$pseudo = $_POST['pseudo'];
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$verifEmail = $_POST['email'];
	$email = $_POST['email'];
	$mot_de_passe = $_POST['mot_de_passe'];
	$mot_de_passe2 = $_POST['mot_de_passe2'];


		if ($mot_de_passe == $mot_de_passe2 ) {
			;
			$verif = $bdd->prepare("SELECT email FROM user WHERE email=:email");
		    $verif->execute(array(
		                "email" => $verifEmail
		                ));

				   if ($verif = $verif->fetch()){

                       $erreur='<div class="alert alert-warning">
                        <strong>Attention!</strong> Cette email existe déja !
                     </div>';
				       //header ("Location: page-inscription.php");
				    //email déja utilisé
				   }
				   else{
				   	$newUser = $bdd->prepare("INSERT INTO user (pseudo, firstName, lastName, email, password) VALUES (:pseudo, :firstName, :lastName, :email, :password)");
					$newUser->execute(array(
					            "pseudo" => $pseudo,
					            "firstName" => $prenom,
					            "lastName" => $nom,
					            "email" => $email,
					            "password" => $mot_de_passe
					            ));
				    header ("Location: index.php");   
					//inscription ok
			   		}
			
		}else{

			 $erreur='<div class="alert alert-warning">
                        <strong>Attention!</strong> Mot de passe incorret.
                     </div>';
            header ("Location: page-inscription.php");
			//mot de passe incorrect	
		}

} else {
	//Un champ est vide 
	$erreur='<div class="alert alert-warning">
                        Merci de remplir tous les champs.
                     </div>';
    header ("Location: page-inscription.php");
}










	
