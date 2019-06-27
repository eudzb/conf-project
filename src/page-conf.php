<?php
// Fonctionne
if ((include 'code.php') == TRUE) {
    echo 'OK';
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conferank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../rating.js"></script>
  </head>
  <body>
    <?php include 'menu.php'; ?>

  <!-- HEADER CONFERENCE -->
  <div class="container up-space content mb-5">
    <div class="row shadow">
      <div class="col-md-8">
        <div class="mt-4 p-3">
          <h3 class="pb-2">
            <?php echo $row[0]['title']; ?>
          </h3>
          <span class="border rounded bg-danger text-light p-2 mt-3 mb-3">Technologie</span>
          <div class="d-flex align-items-center mt-3">
            <a href="page-profil.php">
              <?php
                echo '<img src="'.$imgPseudo.'" class="rounded-circle pointer p-1" alt="participant-icon" style="height:50px; width:50px">';
              ?>
            </a>
            <div class="ml-2 text-muted">
              Présenté par
              <a href="page-profil.php" class="text-primary pointer">
                <?php
                  echo $row[0]['firstName'];
                ?>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mt-4 p-3">
          <span class="text-dark">Vous y aller ?</span>
          <span class="ml-2 text-muted">
            <?php echo $nbParticipant[0]['attendees']; ?> personnes y vont</span>
          <button
          type="button"
          name="participate"
          class="btn btn-success w-75 mt-3"
          >Je participe</button>
          <span class="d-block mt-2">
            <i class="text-warning material-icons dp48">star</i>
            <i class="text-warning material-icons dp48">star</i>
            <i class="text-warning material-icons dp48">star</i>
            <i class="text-warning material-icons dp48">star_half</i>
            <i class="text-warning material-icons dp48">star_border</i>
          </span>
        </div>
      </div>
    </div>

    <!-- MAIN BODY CONFERENCE -->
    <div class="row mt-5 mb-5">
      <div class="col-md-7">
        <?php
          echo '<img src="'.$imgConf.'"  alt="picture meeting" class="img-conf">';
        ?>
        <h5 class="mt-5 mb-5">Détails</h5>
        <div>
          <p class="text-dark text-justify font-weight-light">
            <?php echo $row[0]['description']; ?>
          </p>
        </div>
        <h5 class="mt-5 mb-3">Donnez-nous votre avis :)</h5><span class="d-block mt-2">
          <div class="align-items-center">
            <!-- <input type="radio" class="mr-3" value="0">
            <input type="radio" class="mr-3" value="1">
            <input type="radio" class="mr-3" value="2">
            <input type="radio" class="mr-3" value="3">
            <input type="radio" class="mr-3" value="4">
            <input type="radio" class="mr-3" value="5"> -->
            <!-- <form>
              <label for="rating-5"></label>
              <input type="radio" id="rating-5" name="rating" value="5" />
              <label for="rating-4"></label>
              <input type="radio" id="rating-4" name="rating" value="4" checked="checked" />
              <label for="rating-3"></label>
              <input type="radio" id="rating-3" name="rating" value="3" />
              <label for="rating-2"></label>
              <input type="radio" id="rating-2" name="rating" value="2" />
              <label for="rating-1"></label>
              <input type="radio" id="rating-1" name="rating" value="1" />
              <label for="rating-0"></label>
              <input type="radio" id="rating-0" name="rating" value="0" />
            </form> -->

            <form>
              <fieldset>
                <span class="star-cb-group">
                <input type="radio" id="rating-5" name="rating" value="5"><label for="rating-5">5</label>
                <input type="radio" id="rating-4" name="rating" value="4" checked="checked"><label for="rating-4">4</label>
                <input type="radio" id="rating-3" name="rating" value="3"><label for="rating-3">3</label>
                <input type="radio" id="rating-2" name="rating" value="2"><label for="rating-2">2</label>
                <input type="radio" id="rating-1" name="rating" value="1"><label for="rating-1">1</label>
                <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear"><label for="rating-0">0</label>
                </span>
              </fieldset>
            </form>


            <script id="rendered-js">
            var logID = 'log',
            log = $('<div id="' + logID + '"></div>');
            $('body').append(log);
            $('[type*="radio"]').change(function () {
              var me = $(this);
              log.html(me.attr('value'));
            });
            </script>
            <div id="log"></div>
          </div>

      </div>

      <div class="col-md-4 offset-md-1">
        <div class="d-flex mt-4">
          <i class="ml-3 material-icons dp48 text-muted">access_time</i>
          <div class="align-text-top">
            <span class="ml-3 font-weight-light">
              <?php
                echo $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee;
              ?>
            </span><br>
            <span class="ml-3 d-block mt-1 font-weight-light">
              <?php echo "De ".$dateStart ." à ". $dateEnd ?>
            </span>
          </div>
        </div>

        <div class="d-flex mt-4">
          <i class="ml-3 material-icons dp48 text-muted">location_on</i>
          <div class="align-text-top">
            <span class="ml-3 font-weight-light">
              <?php echo $row[0]['adress']; ?>
            </span><br>
            <span class="ml-3 d-block mt-1 font-weight-light">
              <?php echo $row[0]['cp'].' '.strtoupper($row[0]['city']); ?>
            </span>
          </div>
        </div>

        <div class="mt-5 iframe-container">
          <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.5147875595117!2d2.385956815017054!3d48.84839320936571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6720cdaaa69f7%3A0xa773ccbe56d557b4!2s21+Rue+Claude+Tillier%2C+75012+Paris!5e0!3m2!1sen!2sfr!4v1561384960806!5m2!1sen!2sfr"
          width="500"
          height="450"
          frameborder="0"
          style="border:0"
          allowfullscreen></iframe>
        </div>

        <h5 class="mt-5 mb-4">Participants</h5>
        <div class="row">
          <?php
          $i = 0;
          foreach($participant as $key ) {
            $a = $participant[$i]['img'];
            $c = $participant[$i]['id'];
            $src = 'data: image.jpeg;base64,'. $a;
          ?>
          <div class="col-auto">
            <?php
            echo '<img src="'.$src.'" class="rounded-circle pointer p-1" alt="participant-icon" style="height:80px; width:80px">'; ?>
          </div>

        <?php $i++; } ?>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include 'footer.php'; ?>

</html>
