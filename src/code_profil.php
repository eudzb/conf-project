<?php

include  "connexionbdd.php";

$idUser =  $_GET['id'];
/*$ww = $_GET['status'];*/
$user = $bdd->query("SELECT * FROM user WHERE id =$idUser");
$userInfos = $user->fetchAll();
$src = 'data: image.jpeg;base64,'. $userInfos[0]['img'];

$participation = $bdd->query("SELECT COUNT(id_user) as participation FROM attendees WHERE id_user = $idUser");
$userParticipation = $participation->fetchAll();


$confOrga = $bdd->query("SELECT conference.id, conference.title, conference.description, conference.user_id, date_format(dateStart, '%d-%m-%Y') as la_date_a_afficher , conference.logo,
  category.category_name as category, category.id as categoryId
  FROM user, conference, category
  WHERE conference.user_id = user.id
  AND conference.category_id = category.id
  AND conference.user_id = $idUser");
$confOrgaInfos = $confOrga->fetchAll();

