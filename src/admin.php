<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
    <meta charset="utf-8">
    <title>Conferank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
  
</head> 
<body>
<?php include 'menu.php';?>
    <div class="content container up-space">
    	<h1 class="mb-5 text-center">ADMINISTRATEUR</h1>
      <h3 class="mb-3">Utilisateurs</h3>
	  <table class="table table-striped mb-5">
	    <thead>
	      <tr>
	        <th>Nom</th>
	        <th>Prénom</th>
	        <th>Email</th>
	        <th>Admin</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td>John</td>
	        <td>Doe</td>
	        <td>john@example.com</td>
	        <td>0</td>
	        <td><button>Supprimer</button></td>
	      </tr>
	      <tr>
	        <td>Mary</td>
	        <td>Moe</td>
	        <td>mary@example.com</td>
	        <td>0</td>
	        <td><button>Supprimer</button></td>
	      </tr>
	      <tr>
	        <td>July</td>
	        <td>Dooley</td>
	        <td>july@example.com</td>
	        <td>1</td>
	        <td><button>Supprimer</button></td>
	      </tr>
	   </tbody>
	  </table>

	  <h3 class="mb-3">Categories</h3>
	  <table class="table table-striped mb-5">
	    <tbody>
	    <thead>
	      <tr>
	        <th>Nom</th>
	        <th>Actions</th>
	      </tr>
	    </thead>
	      <tr>
	        <td>Famille</td>
	        <td><button>Editer</button> <button>Supprimer</button></td>
	      </tr>
	      <tr>
	        <td>Formation</td>
	        <td><button>Editer</button> <button>Supprimer</button></td>
	      </tr>
	      <tr>
	        <td>Nature et Aventure</td>
	        <td><button>Editer</button> <button>Supprimer</button></td>
	      </tr>
	      <tr>
	        <td>Photographie</td>
	        <td><button>Editer</button> <button>Supprimer</button></td>
	      </tr>
	      <tr>
	        <td>Cuisine et Boissons</td>
	        <td><button>Editer</button> <button>Supprimer</button></td>
	      </tr>
	      <tr>
	        <td>Musique</td>
	        <td><button>Editer</button> <button>Supprimer</button></td>
	      </tr>
	      <tr>
	        <td>Danse</td>
	        <td><button>Editer</button> <button>Supprimer</button></td>
	      </tr>
	      <tr>
	        <td>Sport et Fitness</td>
	        <td><button>Editer</button> <button>Supprimer</button></td>
	      </tr>
	      <tr>
	        <td>Croyance</td>
	        <td><button>Editer</button> <button>Supprimer</button></td>
	      </tr>
	   </tbody>
	  </table>

	  <h3 class="mb-3">Conférences</h3>
	  <table class="table table-striped mb-5">
	    <thead>
	      <tr>
	        <th>Titres</th>
	        <th>Organisateur</th>
	        <th>Categories</th>
	        <th>Participants</th>
	        <th>Date</th>
	        <th>Heure</th>
	        <th>Descriptions</th>
	        <th>Notes</th>
	        <th>Actions</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td>PHP</td>
	        <td>John</td>
	        <td>Technologie</td>
	        <td>15</td>
	        <td>27/06/2019</td>
	        <td>14h00 à 15h00</td>
	        <td>PHP est un langage de développement orienté Web, lors de cette conférence je vous prensenterai les fonctionnalité disponible.
			étape 1 : L'histoire de PHP
			étape 2 : Ses qualité/défaut 
			étape 3 : Les framework PHP
			</td>
			<td>4.5</td>
	        <td><button>Editer</button> <button class="mt-2">Supprimer</button></td>
	      </tr>
	      
	   </tbody>
	  </table>
	</div>
  </body>
  <?php include 'footer.php'; ?>

</html>
