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

        <div class="col-md-8 mt-5">
          <h3>Les conférences</h3>
          <div class="row">
            <a href="page-conf.php" class="col-md-4 rounded m-4 shadow-sm h-25 p-0 pointer event">
              <img
              src="../img/dann.png"
              alt="img-conf"
              class="img-conf-profil mb-3">
              <span class="text-info font-weight-light ml-3">mer. 21 nov, 9h45</span>
              <h5 class="p-3 mb-0">Nouveautés Angular 8+</h5>
              <span class="d-block pl-3 pr-3 mb-2">
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star_border</i>
              </span>
              <div class="d-block pl-3 pr-3 pb-3 d-flex align-items-start">
                 <i class="p48 text-muted material-icons">location_on</i>
                 <span class="font-weight-light align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
               </div>
              <button
              type="button"
              name="participer"
              class="btn btn-outline-primary mb-3 mr-3 float-right">Participer</button>
              </a>

            <div class="col-md-4 rounded m-4 shadow-sm h-25 p-0 pointer event">
              <img
              src="../img/hiruma.jpeg"
              alt="img-conf"
              class="img-conf-profil mb-3">
              <span class="text-info font-weight-light ml-3">mer. 21 nov, 9h45</span>
              <h5 class="p-3 mb-0">Nouveautés Angular 8+</h5>
              <span class="d-block pl-3 pr-3 mb-2">
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star_half</i>
                <i class="text-warning material-icons dp48">star_border</i>
                <i class="text-warning material-icons dp48">star_border</i>
                <i class="text-warning material-icons dp48">star_border</i>
              </span>
              <div class="d-block pl-3 pr-3 pb-3 d-flex align-items-start">
                 <i class="p48 text-muted material-icons">location_on</i>
                 <span class="font-weight-light align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
               </div>
              <button
              type="button"
              name="participer"
              class="btn btn-outline-primary mb-3 mr-3 float-right">Participer</button>
            </div>

            <div class="col-md-4 rounded m-4 shadow-sm h-25 p-0 pointer event">
              <img
              src="../img/meme.png"
              alt="img-conf"
              class="img-conf-profil mb-3">
              <span class="text-info font-weight-light ml-3">mer. 21 nov, 9h45</span>
              <h5 class="p-3 mb-0">Nouveautés Angular 8+</h5>
              <span class="d-block pl-3 pr-3 mb-2">
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star_half</i>
                <i class="text-warning material-icons dp48">star_border</i>
              </span>
              <div class="d-block pl-3 pr-3 pb-3 d-flex align-items-start">
                 <i class="p48 text-muted material-icons">location_on</i>
                 <span class="font-weight-light align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
               </div>
              <button
              type="button"
              name="participer"
              class="btn btn-outline-primary mb-3 mr-3 float-right">Participer</button>
            </div>

            <div class="col-md-4 rounded m-4 shadow-sm h-25 p-0 pointer event">
              <img
              src="../img/imgConf.jpg"
              alt="img-conf"
              class="img-conf-profil mb-3">
              <span class="text-info font-weight-light ml-3">mer. 21 nov, 9h45</span>
              <h5 class="p-3 mb-0">Nouveautés Angular 8+</h5>
              <span class="d-block pl-3 pr-3 mb-2">
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star</i>
                <i class="text-warning material-icons dp48">star_half</i>
                <i class="text-warning material-icons dp48">star_border</i>
              </span>
              <div class="d-block pl-3 pr-3 pb-3 d-flex align-items-start">
                 <i class="p48 text-muted material-icons">location_on</i>
                 <span class="font-weight-light align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
               </div>
              <button
              type="button"
              name="participer"
              class="btn btn-outline-primary mb-3 mr-3 float-right">Participer</button>
            </div>
          </div>
        </div>

        <div class="col-md-4 border-left mt-5 mb-5">
          <h3 class="ml-3">Catégories</h3>
          <ul class="list-group ml-2 mt-4 shadow-sm">
            <li class="list-group-item pointer onCategory">Famille</li>
            <li class="list-group-item pointer onCategory">Formation</li>
            <li class="list-group-item pointer onCategory">Nature et Aventure</li>
            <li class="list-group-item pointer onCategory">Technologie</li>
          </ul>
        </div>
      </div>

    </div>
  </body>

  <?php include 'footer.php'; ?>

</html>
