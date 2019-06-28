<?php
include ('connexionbdd.php');
include ('code.php');

$id=$_GET['id'];
echo $id;
$supp = $bdd->prepare("DELETE FROM conference WHERE id = " . $id);
$supp->execute();

header ("Location: admin.php");
