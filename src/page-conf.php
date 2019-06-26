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

  <!-- HEADER CONFERENCE -->
  <div class="container up-space content mb-5">
    <div class="row shadow">
      <div class="col-md-8">
        <div class="mt-4 p-3">
          <!-- <span class="text-muted">[lundi 24 juin 2019]</span> -->
          <h3 class="pb-2">[Android Maker 2020]</h3>
          <span class="border rounded bg-danger text-light p-2 mt-3 mb-3">Technologie</span>
          <div class="d-flex align-items-center mt-3">
            <img
            src="../img/mytho.png"
            alt="icon-user"
            class="rounded-circle"
            style="height:40px; width:40px">
            <div class="ml-2 text-muted">
              Animé par
              <a href="page-profil.php" class="text-primary pointer">[Dousaï l'ancien]</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="mt-4 p-3">
          <span class="text-dark">Vous y aller ?</span>
          <span class="ml-2 text-muted">[16] personnes y vont</span>
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
        <img
        src="../img/android-maker.jpeg"
        alt="picture meeting"
        class="img-conf">
        <h5 class="mt-5 mb-5">Détails</h5>
        <div>
          <p class="text-dark text-justify font-weight-light">[Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volup
            ate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occ
            ecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.]</p>
          <p class="text-dark text-justify font-weight-light">[Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat.]</p>
        </div>
      </div>

      <div class="col-md-4 offset-md-1">
        <div class="d-flex mt-4">
          <i class="ml-3 material-icons dp48 text-muted">access_time</i>
          <div class="align-text-top">
            <span class="ml-3 font-weight-light">[lundi 24 juin 2019]</span><br>
            <span class="ml-3 d-block mt-1 font-weight-light">[10h30 à 13h00]</span>
          </div>
        </div>

        <div class="d-flex mt-4">
          <i class="ml-3 material-icons dp48 text-muted">location_on</i>
          <div class="align-text-top">
            <span class="ml-3 font-weight-light">[21 Rue Claude Tillier]</span><br>
            <span class="ml-3 d-block mt-1 font-weight-light">[75012 Paris, FRANCE]</span>
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
          <div class="col-auto">
            <img
            src="../img/meme.png"
            alt="participant-icon"
            class="rounded-circle pointer p-1"
            style="height:80px; width:80px">
          </div>
          <div class="col-auto">
            <img
            src="../img/dann.png"
            alt="participant-icon"
            class="rounded-circle pointer p-1"
            style="height:80px; width:80px">
          </div>
          <div class="col-auto">
            <img
            src="../img/baki.jpg"
            alt="participant-icon"
            class="rounded-circle pointer p-1"
            style="height:80px; width:80px">
          </div>
          <div class="col-auto">
            <img
            src="../img/gin.png"
            alt="participant-icon"
            class="rounded-circle pointer p-1"
            style="height:80px; width:80px">
          </div>
          <div class="col-auto">
            <img
            src="../img/hiruma.jpeg"
            alt="participant-icon"
            class="rounded-circle pointer p-1"
            style="height:80px; width:80px">
          </div>
          <div class="col-auto">
            <img
            src="../img/more.svg"
            alt="participant-icon"
            class="rounded-circle pointer p-1"
            style="height:80px; width:80px">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include 'footer.php'; ?>

</html>
