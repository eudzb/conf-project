<?php

include'connexionbdd.php';

$idConf = $_GET['idConference'];
$conferenceInfos = $bdd->query("
  SELECT conference.id, conference.title, conference.description, date_format(dateStart, '%d-%m-%Y') as la_date_a_afficher ,
  conference.dateStart, conference.dateEnd, conference.adress, conference.cp, conference.city, conference.logo,
  user.id as idOrganisateur, user.firstName, user.img,
  category.category_name as category
  FROM user, conference, category
  WHERE conference.user_id = user.id
  AND conference.category_id = category.id
  AND conference.id =$idConf");
$row = $conferenceInfos->fetchAll();
//echo $row[0]['category'];
$imgConf = 'data: image.jpeg;base64,'. $row[0]['logo'];
$imgPseudo = 'data: image.jpeg;base64,'. $row[0]['img'];
//print_r($row);

$participantInfos = $bdd->query("
  SELECT COUNT(id_conference) as attendees
  FROM attendees
  WHERE id_conference =$idConf");
$nbParticipant = $participantInfos->fetchAll();



$conferenceInfos = $bdd->query("SELECT user.firstName, user.id, user.img, user.pseudo
  FROM attendees, user
  WHERE attendees.id_user = user.id
  AND id_conference =$idConf");
$participant = $conferenceInfos->fetchAll();


//DATE
$dateFirst = date('G:i', strtotime($row[0]['dateStart']));
$dateStart = str_replace(":", "h", $dateFirst);

$dateSecond = date('G:i', strtotime($row[0]['dateEnd']));
$dateEnd = str_replace(":", "h", $dateSecond);

function maDate($la_date_a_afficher = NULL){
//DATE

$date = new DateTime($la_date_a_afficher);
$nom_jour_fr = array("dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam.");
$mois_fr = Array("", "jan", "fév", "mar", "avr", "mai", "jun", "jui", "août",
        "sept", "oct", "nov", "déc");
list($nom_jour, $jour, $mois, $annee) = explode('-', $date->format('w-d-n-Y'));
echo  $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee;}
