<?php
//session_start();
include 'connexionbdd.php';

// Used to fetch all categories in the select
$categories = $bdd->query("
  SELECT category_name
  FROM category
  ORDER BY category_name ASC");
$result = $categories->fetchAll();

if(
  !empty($_POST['category']) &&
  !empty($_POST['title']) &&
  !empty($_POST['startDate']) &&
  !empty($_POST['endDate']) &&
  !empty($_POST['startTime']) &&
  !empty($_POST['endTime']) &&
  !empty($_POST['address']) &&
  !empty($_POST['cp']) &&
  !empty($_POST['city']) &&
  !empty($_POST['description'])
) {
  $category = $_POST['category'];
  $title = $_POST['title'];
  $startDate = $_POST['startDate'] . ' ' . $_POST['startTime'] . ':00';
  $endDate = $_POST['endDate'] . ' ' . $_POST['endTime'] . ':00';
  $address = $_POST['address'];
  $cp = $_POST['cp'];
  $city = $_POST['city'];
  $description = $_POST['description'];

  $filename = "../img/hiruma.jpeg";
  $handle = fopen($filename, "r");
  $img = fread($handle, filesize($filename));
  $logo = base64_encode($img);
  fclose($handle);

  $newConference = $bdd->prepare("INSERT INTO conference (
    title, user_id, description, dateStart, dateEnd, adress, cp, city, logo, category_id
  ) VALUES ( :title, :userId, :description, :startDate, :endDate, :address, :cp, :city, :logo, :category_id)");
  $newConference->execute(array(
    "title" => $title,
    "userId" => $_SESSION['idSession'],
    "description" => $description,
    "startDate" => $startDate,
    "endDate" => $endDate,
    "address" => $address,
    "cp" => $cp,
    "city" => $city,
    "logo" => $logo,
    "category_id" => 4,
  ));
  header ("Location: index.php");

} else {
  echo 'Complete them all';
}
