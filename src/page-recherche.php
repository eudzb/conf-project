<?php
include 'code-recherche.php';
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
    <?php include 'menu.php'; ?>

    <div class="container up-space content mb-3">
      <h3>
        <span class="font-weight-light">Résultat(s) pour la recherche : </span>
        <?php echo $query; ?>
      </h3>
      <div class="mt-5">
        <div class="row">

          <?php
          $i = 0;
          foreach($result as $key ) {
            $a = $result[$i]['logo'];
            $src = 'data: image.jpeg;base64,'. $a;
            $link = $result[$i]['id'];
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
                <?php echo $result[$i]['category']?>
              </span>
            </div>
            <h5 class="p-3 mb-0"><?php echo $result[$i]['title']?></h5>
            <div class="d-block pl-3 pr-3 pb-3 d-flex align-items-start">
               <i class="p48 text-muted material-icons">location_on</i>
                <span class="font-weight-light align-self-center">
               <?php echo  $result[$i]['adress']." - ".$result[$i]['cp'].' '.strtoupper($result[$i]['city']); ?>
                </span>
            </div>
            <div class="float-left pl-3 pt-2">
              <i class="text-muted material-icons dp48">person</i>
              <span class="vertical-super"><?php  ?></span>
            </div>
            <button
            type="button"
            name="participer"
            class="btn btn-outline-primary mb-3 mr-3 float-right">Détails</button>
          </a>

          <?php $i++; } ?>

        </div>
      </div>
    </div>
  </body>
  <?php include 'footer.php'; ?>
</html>
