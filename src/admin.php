<?php
	include "code.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
    <meta charset="utf-8">
    <title>La Conférence</title>
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
	        <th>Icon</th>
	        <th>Nom</th>
	        <th>Prénom</th>
	        <th>Email</th>
	        <th>Pseudo</th>
	        <th>Admin</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody><?php $i = 0;
	      	 foreach ($participant as $key ) {
	      		$a = $participant[$i]['img'];
           		$src = 'data: image.jpeg;base64,'. $a;
	      	 ?>
	      <tr>
	        <td>
	        	<?php echo '<img src="'.$src.'" class="rounded-circle pointer p-1"
	        			alt="participant-icon" style="height:80px; width:80px">';
	        	?>
	        </td>
	        <td class="align-middle"><?php echo $participant[$i]['lastName'] ?></td>
	        <td class="align-middle"><?php echo $participant[$i]['firstName'] ?></td>
	        <td class="align-middle"><?php echo $participant[$i]['email'] ?></td>
	        <td class="align-middle"><?php echo $participant[$i]['pseudo'] ?></td>
	        <td class="align-middle">0</td>
	        <td class="align-middle">
	        		<a href="delete.php?id=<?php echo  $participant[$i]['id']?>" class="btn btn-danger" onClick="return checkMe(), alert('Utilisateur Supprimé !')">Supprimer
	        		</a>
	        </td>
	      </tr>
	     <?php $i++ ; }?>
	   </tbody>
	  </table>

	  <h3 class="mb-3">Conférences</h3>
	  <table class="table table-striped mb-5">
	    <thead>
	      <tr>
	        <th>Titres</th>
	        <th>Organisateur</th>
	        <th>Date</th>
	        <th>Heure</th>
	        <th>Descriptions</th>
	        <th>Adresse</th>
	        <th>Ville</th>
	        <th>Actions</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php $i = 0;
	      	 foreach ($row as $key ) {
	      	 ?>
	      <tr>
	        <td class="align-middle"><?php echo $row[$i]['title'] ?></td>
	        <td class="align-middle"><?php echo $row[$i]['firstName'] ?></td>
	        <td class="align-middle"><?php echo $row[$i]['la_date_a_afficher'] ?></td>
	        <td class="align-middle"><?php echo "De ".$dateStart." à ".$dateEnd ?></td>
	        <td class="align-middle"><?php echo $row[$i]['description'] ?></td>
	        <td class="align-middle"><?php echo $row[$i]['adress'] ?></td>
	        <td class="align-middle"><?php echo $row[$i]['city'] ?></td>
	        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
	      </tr>
	       <?php $i++ ; }?>
	   </tbody>
	  </table>
	</div>
  </body>
  <?php include 'footer.php'; ?>

</html>
