<?php
include'connexionbdd.php';

ini_set('display_errors', 1);
$query = $_GET['query'];
// $min_length = 3;

$raw_results = $bdd->query("
  SELECT conference.id, conference.title, conference.description, date_format(dateStart, '%d-%m-%Y') as la_date_a_afficher ,
  conference.dateStart, conference.dateEnd, conference.adress, conference.cp, conference.city, conference.logo,
  user.firstName, user.img,
  category.category_name as category, category.id as categoryId
  FROM user, conference, category
  WHERE conference.user_id = user.id
  AND conference.category_id = category.id
  AND title LIKE '%". $query ."%'");

$result = $raw_results->fetchAll();
// var_dump($result);

// "SELECT conference.id, conference.title, conference.description,
//     date_format(dateStart, '%d-%m-%Y') as la_date_a_afficher,
//     conference.dateStart, conference.dateEnd, conference.adress, conference.cp, conference.city, conference.logo,
//     user.firstName, user.img, vote.id_conference, AVG(vote.Note),
//     category.id as categoryId, category.category_name as category
//     FROM user, conference, category, vote
//     WHERE conference.user_id = user.id
//     AND conference.category_id = category.id
//     AND conference.user_id = vote.id_conference
//     AND conference.title LIKE 'P%' GROUP BY vote.id_conference
//   "
