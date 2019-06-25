<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conferank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand border-bottom p-4 fixed-top bg-dark shadow">
	  	<h2 class="font-weight-light title-style">La Conférence</h2>
	  	<ul class="navbar-nav ml-auto">
	  		<li class="nav-item">
          <a class="nav-link text-light font-weight-light pointer">Créer une conférence<a/>
        </li>
	  		<li class="nav-item">
          <a class="nav-link text-light font-weight-light pointer">Se connecter<a/>
        </li>
	  		<li class="nav-item">
          <a class="nav-link text-light font-weight-light pointer">S'inscire<a/>
        </li>
	  	</ul>
	  </nav>
    <?php
    include 'page-conf.php';
    ?>
  </body>

  <!-- FOOTER -->
  <footer>
    <div class="bg-dark pt-4 pb-4">
      <p class="mt-3 mb-3 text-center font-weight-light text-light">
        La Conférence © 2018 - 2019 | Tous droits réservés.
      </p>
    </div>
  </footer>
</html>
