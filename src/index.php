<?php
session_start();
include 'code.php';
?>
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
    <?php include 'menu.php';?>

      <!--Div de l'accueil -->
    <img src="../img/imgConf.jpg" class="w-100 home-img">
    <div class="content side-marge">
      <div class="row">
        <div class="col-md-9 mt-5">
          <div class="d-flex align-items-center justify-content-between">
            <h3>Les conférences</h3>
            <!-- <div class="ml-auto">
              <span class="text-muted m-2 pointer"><u>Toutes</u></span>
              <span class="text-muted m-2 pointer">Votés</span>
              <span class="text-muted m-2 pointer">Non votés</span>
            </div> -->
          </div>
          <div class="row">

          <?php
          $i = 0;
          foreach($homeConf as $key ) {
            //image
            $a = $homeConf[$i]['logo'];
            $src = 'data: image.jpeg;base64,'. $a;

            $link = $homeConf[$i]['id'];
            
          ?>
              <a
              href="page-conf.php?idConference=
              <?php echo $link ?>"
              class="col-md-3 rounded m-4 shadow-sm h-25 p-0 pointer event">

              <div class="position-relative w-100 mb-3">
                <?php
                  echo '<img src="'.$src.'" img-conf-profil alt="participant-icon" class="img-conf-profil">';
                ?>
                <span
                class="conf-categ bg-danger text-light p-1">
                  <?php echo $homeConf[$i]['category']?>
                </span>
              </div>
             <span class="text-info font-weight-light ml-3">
               <?php
                maDate($homeConf[$i]['dateStart'], $homeConf[$i]['dateEnd'], $homeConf[$i]['la_date_a_afficher']);
               ?>
             </span>
              <h5 class="p-3 mb-0"><?php echo $homeConf[$i]['title']?></h5>
              <!-- <span class="d-block pl-3 pr-3 mb-2">
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star_border</i>
              </span> -->
              <!-- <?php
              echo '<span class="pl-3 pr-3 mb-4">' . $moyenneVote."/5 </span>";
              ?> -->
              <div class="d-block pl-3 pr-3 pb-3 d-flex align-items-start">
                 <!-- <i class="p48 text-muted material-icons">location_on</i> -->
                  <span class="font-weight-light align-self-center">
                 <?php echo  $homeConf[$i]['adress']." - ".$homeConf[$i]['cp'].' '.strtoupper($homeConf[$i]['city']); ?>
                  </span>
               </div>
              <div class="float-left pl-3 pt-2">
                <!-- <i class="text-muted material-icons dp48">person</i> -->
                <span class="vertical-super"><?php  ?></span>
              </div>
              <button
              type="button"
              name="participer"
              class="btn btn-outline-primary mb-3 mr-3 float-right">Détails</button>
              </a>
            <?php $i++; } ?>
          </div>

          <div class="col-md-2 ml-auto mr-auto">
<div class="btn-group">
  <?php
    if ($page > 1):
    ?>   <a href="?page=<?php echo $page - 1; ?>" class="btn btn-secondary"><</a>   
  <?php
    endif;
  ?>


  <?php
    for ($i = 1; $i <= $nombreDePages; $i++):
      ?>  
      <a href="?page=<?php echo $i; ?>" class="btn btn-secondary"><?php echo $i; ?></a> 
  <?php
    endfor; 
  ?>

<?php
if ($page < $nombreDePages):
    ?> <a href="?page=<?php echo $page + 1; ?>" class="btn btn-secondary">></a><?php
endif;
?>
</div>
</div>
        </div>

        <div class="col-md-3 border-left mt-5 mb-5 pr-2 pl-4">
          <h3 class="ml-3">Catégories</h3>
          <ul class="list-group ml-2 mt-4 shadow-sm">
      <?php
          $i = 0;
          foreach($categoryConf as $key )
            {?> <!-- for each -->
            <li class="list-group-item pointer onCategory"><?php echo $categoryConf[$i]['category_name']?></li>
            <?php $i++; } ?>
          </ul>
        </div>
      </div>

    </div>

  </body>

  <?php include 'footer.php'; ?>

</html>
