<?php
session_start();
$_SESSION = array();
session_destroy();
/*unset($_SESSION['idSession']);*/
header('Location: index.php');
?>
