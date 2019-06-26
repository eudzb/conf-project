<!-- HEADER CONFERENCE -->
<?php 
// Fonctionne
if ((include 'code.php') == TRUE) {
    echo 'OK';
}

?>
<div class="container mt-5">
  <div class="row shadow">
    <div class="col-md-8">
      <div class="mt-4 p-3">
        <span class="text-muted"><?php echo $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee; ?></span>
        <h3><?php echo $row[0]['title']; ?></h3>
        <div class="d-flex align-items-center mt-2">
          <!-- <img
          src="../img/mytho.png"
          alt="icon-user"
          class="rounded-circle"
          style="height:40px; width:40px"> -->
            <?php  echo '<img src="'.$imgPseudo.'" class="rounded-circle pointer p-1" alt="participant-icon" style="height:50px; width:50px">'; ?>      
          <div class="ml-2 text-muted">
            Animé par
            <a class="text-primary pointer"><?php echo $row[0]['firstName']; ?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="mt-4 p-3">
        <span class="text-dark">Vous y aller ?</span>
        <span class="ml-2 text-muted"><?php echo $nbParticipant[0]['attendees']; ?> personne(s) y vont</span>
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
      <?php  echo '<img src="'.$imgConf.'"  alt="participant-icon" style="height:450px; width:650px">'; ?>      
<!--       <img
      src="../img/android-maker.jpeg"
      alt="picture meeting"
      class="img-conf"> -->
      <h5 class="mt-5 mb-5">Détails</h5>
      <div>
        <p class="text-dark text-justify font-weight-light"><?php echo $row[0]['description']; ?></p>
        <!-- <p class="text-dark text-justify font-weight-light">[Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
          ex ea commodo consequat.]</p> -->
      </div>
    </div>

    <div class="col-md-4 offset-md-1">
      <div class="d-flex mt-4">
        <i class="ml-3 material-icons dp48 text-muted">access_time</i>
        <div class="align-text-top">
          <span class="ml-3 font-weight-light"><?php echo $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee; ?></span><br>
          <span class="ml-3 d-block mt-1 font-weight-light"><?php echo "De ".$dateStart ." à ". $dateEnd ?></span>
        </div>
      </div>

      <div class="d-flex mt-4">
        <i class="ml-3 material-icons dp48 text-muted">location_on</i>
        <div class="align-text-top">
          <span class="ml-3 font-weight-light"><?php echo $row[0]['adress']; ?></span><br>
          <span class="ml-3 d-block mt-1 font-weight-light"><?php echo $row[0]['cp'].' '.strtoupper($row[0]['city']); ?></span>
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
      <?php  echo '<img src="'.$src.'" class="rounded-circle pointer p-1" alt="participant-icon" style="height:80px; width:80px">'; ?>      
    </div>

    <?php $i++; } ?>
  </div>
        
      
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<div class="bg-secondary pt-4 pb-4">
  <p class="mt-3 mb-3 text-center font-weight-light text-light">
    La Conférence © 2018 - 2019 | Tous droits réservés.
  </p>
</div>
