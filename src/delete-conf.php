<?php
include ('connexionbdd.php');
include ('code.php');

$idConf=$_GET['idConf'];
echo $idConf;
$supp = $bdd->prepare("DELETE FROM conference WHERE id = " . $idConf);
$supp->execute();

header ("Location: admin.php");


