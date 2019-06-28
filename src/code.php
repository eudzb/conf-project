<?php

//function pageConference ($idConf){
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=bdd-conf;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$home = $bdd->query("
  SELECT conference.id, conference.title, conference.description, date_format(dateStart, '%d-%m-%Y') as la_date_a_afficher ,
  conference.dateStart, conference.dateEnd, conference.adress, conference.cp, conference.city, conference.logo,
  user.firstName, user.img,
  category.category_name as category, category.id as categoryId
  FROM user, conference, category
  WHERE conference.user_id = user.id
  AND conference.category_id = category.id"
);
$homeConf = $home->fetchAll();
$dd =  $homeConf[0]['id'];

$test = $bdd->query("
  SELECT id_conference, AVG(Note) as note
  FROM vote
  GROUP BY id_conference
  ");

//DATE
$dateFirst = date('G:i', strtotime($homeConf[0]['dateStart']));
$dateStart = str_replace(":", "h", $dateFirst);
$dateSecond = date('G:i', strtotime($homeConf[0]['dateEnd']));
$dateEnd = str_replace(":", "h", $dateSecond);

$conferenceInfos = $bdd->query("
  SELECT *
  FROM user");
$participant = $conferenceInfos->fetchAll();

$prenom = $participant[0]['firstName'];
$id = $participant[0]['id'];
$pseudo = $participant[0]['pseudo'];
$nom = $participant[0]['lastName'];
$email = $participant[0]['email'];

$participantInfos2 = $bdd->query("
  SELECT COUNT(id_conference) as attendees
  FROM attendees
  WHERE id_conference =$dd");
$nbParticipant2 = $participantInfos2->fetchAll();

$category = $bdd->query("SELECT *
  FROM category
  ORDER BY category_name");
$categoryConf = $category->fetchAll();

$moyenne = $bdd->query("
  SELECT id_conference, Note
  FROM vote
  WHERE id_conference = 6
  ");
$moyenneConf = $moyenne->fetchAll();

$totalVote = array_sum(array_map(function($ar) {
  return $ar['Note'];
  ;
}, $moyenneConf));

$moyenneVote = round($totalVote / sizeof($moyenneConf), 1);

function maDate($la_date_a_afficher = NULL){
//DATE

$date = new DateTime($la_date_a_afficher);
$nom_jour_fr = array("dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam.");
$mois_fr = Array("", "jan", "fév", "mar", "avr", "mai", "jun", "jui", "août",
        "sept", "oct", "nov", "déc");
list($nom_jour, $jour, $mois, $annee) = explode('-', $date->format('w-d-n-Y'));
echo  $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee;}
