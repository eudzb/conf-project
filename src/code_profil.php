<?php

include  "connexionbdd.php";
$a = $_GET['id'];
$idUser = $a;
$user = $bdd->query("SELECT * FROM user WHERE id =$idUser");
$userInfos = $user->fetchAll();
$src = 'data: image.jpeg;base64,'. $userInfos[0]['img'];
$participation = $bdd->query("SELECT COUNT(id_user) as participation FROM attendees WHERE id_user = $idUser");
$userParticipation = $participation->fetchAll();