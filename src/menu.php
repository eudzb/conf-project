<?php
/*session_start();*/
/*include "code_connexion";*/
?>
<nav class="navbar navbar-expand-xl p-4 fixed-top bg-dark shadow">
  <h2>
    <a href="./index.php" class="font-weight-light title-style">La Conférence</a>
  </h2>
  <button
  class="navbar-toggler"
  type="button"
  data-toggle="collapse"
  data-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent"
  aria-expanded="false"
  aria-label="Toggle navigation">
    <i
    class="material-icons dp48 pointer p-2 rounded"
    style="color: #fedc72;">reorder</i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a
      class="nav-link text-light font-weight-light pointer ml-4 mr-4 letter-space"
      href="./creation-conf.php"
      >Créer une conférence<a/>
    </li>
    <form
    class="form-inline my-2 my-lg-0"
    action="page-recherche.php"
    method="get">
      <input
      name="query"
      class="form-control mr-sm-2"
      style="width: 30rem;"
      type="search"
      placeholder="Rechercher…"
      aria-label="Rechercher">
    </form>
  </ul>
  <ul class="navbar-nav ml-auto">
    <?php
    if(isset($_SESSION['idSession'])) {
    ?>
      <?php 
      $q = "5";
        if($_SESSION['status'] == "Admin"){
        ?>
          <li class="nav-item">
            <a
            class="nav-link text-light font-weight-light pointer letter-space"
            href="./admin.php"
            >Administrateur | <a/>
          </li>
        <?php } ?>

    <li class="nav-item">
      <a
      class="nav-link text-light font-weight-light pointer letter-space"
      href="./page-profil.php?id=<?php echo $_SESSION['idSession'] ?>"
      >Profil<a/>
    </li>
    <li class="nav-item">
      <a
      class="nav-link text-light font-weight-light pointer letter-space"
      href="./deconnexion.php"
      >Déconnexion<a/>
    </li>
    <?php } else { ?>
    <li class="nav-item">
      <a
      class="nav-link text-light font-weight-light pointer letter-space"
      href="./page-connexion.php"
      >Se connecter<a/>
    </li>
    <li class="nav-item">
      <a
      class="nav-link text-light font-weight-light pointer letter-space"
      href="./page-inscription.php"
      >S'inscrire<a/>
    </li>
    <?php } ?>
  </ul>
</nav>
