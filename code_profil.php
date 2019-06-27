<?php 
/*if ((include 'code.php') == TRUE) {
}
*/
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=bdd-conf;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$a = $_GET['id'];
$idUser = $a;
$user = $bdd->query("SELECT * FROM user WHERE id =$idUser");
$userInfos = $user->fetchAll();
$src = 'data: image.jpeg;base64,'. $userInfos[0]['img'];

$participation = $bdd->query("SELECT COUNT(id_user) as participation FROM attendees WHERE id_user = $idUser");
$userParticipation = $participation->fetchAll();

//mamaDate($homeConf[$i]['dateStart'], $homeConf[$i]['dateEnd'], $homeConf[$i]['la_date_a_afficher'];