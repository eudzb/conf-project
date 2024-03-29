<?php
session_start();

include 'code_profil.php';
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

    <div class="container up-space content mb-5">

      <!-- INFO HEADER -->
      <div class="row shadow">
        <div class="col-md-8">
          <div class="mt-4 p-3">
            <div class="d-flex align-items-center mt-2">
              <?php
               echo '<img src="'.$src.'" img-conf-profil alt="participant-icon" class="rounded-circle" style="height:100px; width:100px">';
               ?>
              <div class="ml-3 align-self-start">
                <h5 class="text-dark"><?php echo $userInfos[0]['pseudo']." (".$userInfos[0]['firstName']." ".$userInfos[0]['lastName'].")"?></h5>
                <h5 class="text-dark font-weight-light">
                  Nombres de participation(s) : <?php echo $userParticipation[0]['participation'] ?>
                </h5>
                <h5 class="text-dark font-weight-light">Contact : <?php echo $userInfos[0]['email'] ?></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mt-4 p-3">

            <!-- <div class="d-flex align-items-center">
              <i class="p48 text-muted material-icons">location_on</i>
              <span class="font-weight-light text-sh align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
            </div> -->
            <button
            type="button"
            name="participate"
            class="btn btn-primary w-75"
            data-toggle="modal"
            data-target="#exampleModalCenter"
            >Éditer le profil</button>

            <!-- Modal -->
            <div
            class="modal fade"
            id="exampleModalCenter"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                  <div class="modal-header bg-dark">
                    <h5
                    class="modal-title gold-color"
                    id="exampleModalLongTitle">Édition du profil</h5>
                    <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close">
                      <span aria-hidden="true" class="text-light">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input
                        type="text"
                        class="form-control"
                        id="pseudo"
                        value="[Pseudo]">
                      </div>
                      <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input
                        type="text"
                        class="form-control"
                        id="prenom"
                        value="[Prénom]">
                      </div>
                      <div class="form-group">
                        <label for="nom">Nom</label>
                        <input
                        type="text"
                        class="form-control"
                        id="nom"
                        value="[Nom]">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input
                        type="email"
                        class="form-control"
                        id="email"
                        value="[Email]">
                      </div>
                      <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input
                        type="text"
                        class="form-control"
                        id="mdp"
                        value="[Mot de passe]">
                      </div>
                    </form>
                  </div>

                  <div class="modal-footer">
                    <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal">Fermer</button>
                    <button
                    type="button"
                    class="btn btn-primary">Valider</button>
                  </div>
                </div>
              </div>
            </div>

            <span class="d-block mt-2">Moyenne des notes attribuées</span>
            <span class="d-block mt-2">
              <i class="text-warning material-icons dp48">star</i>
              <i class="text-warning material-icons dp48">star_half</i>
              <i class="text-warning material-icons dp48">star_border</i>
              <i class="text-warning material-icons dp48">star_border</i>
              <i class="text-warning material-icons dp48">star_border</i>
            </span>
          </div>
        </div>
      </div>

      <!-- BODY MAIN -->
      <h4 class="up-space p-0">
      Conférences organisées
      </h4>

<?php
          $j = 0;
          foreach($confOrgaInfos as $key ) {
            //image
            $a = $confOrgaInfos[$j]['logo'];
            $src = 'data: image.jpeg;base64,'. $a;
          ?>
        <div class="col-md-3 rounded m-4 shadow-sm h-25 p-0 pointer event">
          <?php
                  echo '<img src="'.$src.'" img-conf-profil alt="participant-icon" class="img-conf-profil">';
          ?>
          <span class="text-info font-weight-light ml-3"><?php echo $confOrgaInfos[$j]['la_date_a_afficher'] ?></span>
          <h5 class="p-3"><?php echo $confOrgaInfos[$j]['title'] ?></h5>
          <button
          type="button"
          name="participer"
          class="btn btn-outline-primary mb-3 mr-3 float-right">Participer</button>
        </div>
<?php $j++; } ?>
      </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  <?php
  include 'footer.php';
  ?>
</html>
