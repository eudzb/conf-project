<?php

//function pageConference ($idConf){
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=conference;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$idConf = 5;
// Titre, description, date, heure de début/fin, adresse, code postale, ville, nom de l'intervenant

$conferenceInfos = $bdd->query("
  SELECT conference.id, conference.title, conference.description, date_format(dateStart, '%d-%m-%Y') as la_date_a_afficher ,
  conference.dateStart, conference.dateEnd, conference.adress, conference.cp, conference.city, conference.logo,
  user.firstName, user.img,
  category.category_name as category
  FROM user, conference, category
  WHERE conference.user_id = user.id
  AND conference.category_id = category.id");
$row = $conferenceInfos->fetchAll();

$titre = $row[0]['title'];
$organisateur = $row[0]['user.firstName'];
$date = $row[0]['date_format'];
$Heure = $row[0]['dateStart'];
$description = $row[0]['description'];
$adress = $row[0]['adress'];
$city = $row[0]['city'];

//echo $row[0]['category'];
$imgConf = 'data: image.jpeg;base64,'. $row[0]['logo'];
$imgPseudo = 'data: image.jpeg;base64,'. $row[0]['img'];
//print_r($row);
$participantInfos = $bdd->query("
  SELECT COUNT(id_conference) as attendees
  FROM attendees
  WHERE id_conference =$idConf");
$nbParticipant = $participantInfos->fetchAll();
$conferenceInfos = $bdd->query("
  SELECT *
  FROM user");
$participant = $conferenceInfos->fetchAll();

$prenom = $participant[0]['firstName'];
$id = $participant[0]['id'];
$pseudo = $participant[0]['pseudo'];
$nom = $participant[0]['lastName'];
$email = $participant[0]['email'];

//DATE
$dateFirst = date('G:i', strtotime($row[0]['dateStart']));
$dateStart = str_replace(":", "h", $dateFirst);
$dateSecond = date('G:i', strtotime($row[0]['dateEnd']));
$dateEnd = str_replace(":", "h", $dateSecond);


$date = new DateTime($row[0]['la_date_a_afficher']);
$nom_jour_fr = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août",
        "septembre", "octobre", "novembre", "décembre");
list($nom_jour, $jour, $mois, $annee) = explode('-', $date->format('w-d-n-Y'));

//Categories
$category = $bdd->query("SELECT * FROM `category` ORDER BY category_name");
$categoryConf = $category->fetchAll();

$nom_de_categorie = $categoryConf[0]['category_name'];

//Delete
