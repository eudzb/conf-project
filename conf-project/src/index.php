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
    <img src="../img/imgConf.jpg" class="w-100" style="object-fit: cover; height: 34rem;">
    <div class="side-marge content"> 
      <h3 class="bold">Evenements</h3>
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <!--
            <div class="shadow col-md-5 m-3 rounded p-3 text-light img-opa" style="background-image: url('../img/imgConf.jpg');">
              <span class="text-info">mer. 26 juin, 9:30</span>
              <h4 class="card-title text-sh">Nouveauté Angular 8</h4>
              <p class="card-text text-sh">Toutes les news sur Angular 8...</p>
              <div class="d-flex align-items-center">
              <i class="p48 text-muted material-icons">location_on</i>
              <span class="font-weight-light text-sh align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
              </div>
              <button cLass="btn btn-primary shadow-sm mt-3 mb-3" type="button" name="conference">Participer</button>
            </div>

            <div class="shadow col-md-5 m-3 rounded p-3 text-light" style="background-image: url('../img/meme.png');">
              <span class="text-info">mer. 26 juin, 9:30</span>
              <h4 class="card-title text-sh">Nouveauté Angular 8</h4>
              <p class="card-text text-sh">Toutes les news sur Angular 8...</p>
              <div class="d-flex align-items-center">
              <i class="p48 text-muted material-icons">location_on</i>
              <span class="font-weight-light text-sh align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
              </div>
              <button cLass="btn btn-primary shadow-sm mt-3 mb-3" type="button" name="conference">Participer</button>
            </div>

            <div class="shadow col-md-5 m-3 rounded p-3 text-light" style="background-image: url('../img/hiruma.jpeg');">
              <span class="text-info">mer. 26 juin, 9:30</span>
              <h4 class="card-title text-sh">Nouveauté Angular 8</h4>
              <p class="card-text text-sh">Toutes les news sur Angular 8...</p>
              <div class="d-flex align-items-center">
              <i class="p48 text-muted material-icons">location_on</i>
              <span class="font-weight-light text-sh align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
              </div>
              <button cLass="btn btn-primary shadow-sm mt-3 mb-3" type="button" name="conference">Participer</button>
            </div>

            <div class="shadow col-md-5 m-3 rounded p-3 text-light" style="background-image: url('../img/dann.png');">
              <span class="text-info">mer. 26 juin, 9:30</span>
              <h4 class="card-title text-sh">Nouveauté Angular 8</h4>
              <p class="card-text text-sh">Toutes les news sur Angular 8...</p>
              <div class="d-flex align-items-center">
              <i class="p48 text-muted material-icons">location_on</i>
              <span class="font-weight-light text-sh align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
              </div>
              <button cLass="btn btn-primary shadow-sm mt-3 mb-3" type="button" name="conference">Participer</button>
            </div>
          </div>
        -->
          <div class="col-md-3 rounded m-4 shadow-sm h-25 p-0 pointer event">
            <img
            src="../img/dann.png"
            alt="img-conf"
            class="img-conf-profil mb-3">
            <span class="text-info font-weight-light ml-3">mer. 21 nov, 9h45</span>
            <h5 class="p-3">Nouveautés Angular 8+</h5>
            <span class="pl-3 pr-3 pb-3 d-block">Retrouvez toutes les news à ne pas manquer […]</span>
            <div class="d-block pl-3 pr-3 pb-3 d-flex align-items-start">
               <i class="p48 text-muted material-icons">location_on</i>
               <span class="font-weight-light align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
             </div>
            <button
            type="button"
            name="participer"
            class="btn btn-outline-primary mb-3 mr-3 float-right">Participer</button>
          </div>

          <div class="col-md-3 rounded m-4 shadow-sm h-25 p-0 pointer event">
            <img
            src="../img/hiruma.jpeg"
            alt="img-conf"
            class="img-conf-profil mb-3">
            <span class="text-info font-weight-light ml-3">mer. 21 nov, 9h45</span>
            <h5 class="p-3">Nouveautés Angular 8+</h5>
            <span class="pl-3 pr-3 pb-3 d-block">Retrouvez toutes les news à ne pas manquer […]</span>
            <div class="d-block pl-3 pr-3 pb-3 d-flex align-items-start">
               <i class="p48 text-muted material-icons">location_on</i>
               <span class="font-weight-light align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
             </div>
            <button
            type="button"
            name="participer"
            class="btn btn-outline-primary mb-3 mr-3 float-right">Participer</button>
          </div>

          <div class="col-md-3 rounded m-4 shadow-sm h-25 p-0 pointer event">
            <img
            src="../img/meme.png"
            alt="img-conf"
            class="img-conf-profil mb-3">
            <span class="text-info font-weight-light ml-3">mer. 21 nov, 9h45</span>
            <h5 class="p-3">Nouveautés Angular 8+</h5>
            <span class="pl-3 pr-3 pb-3 d-block">Retrouvez toutes les news à ne pas manquer […]</span>
            <div class="d-block pl-3 pr-3 pb-3 d-flex align-items-start">
               <i class="p48 text-muted material-icons">location_on</i>
               <span class="font-weight-light align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
             </div>
            <button
            type="button"
            name="participer"
            class="btn btn-outline-primary mb-3 mr-3 float-right">Participer</button>
          </div>

          <div class="col-md-3 rounded m-4 shadow-sm h-25 p-0 pointer event">
            <img
            src="../img/imgConf.jpg"
            alt="img-conf"
            class="img-conf-profil mb-3">
            <span class="text-info font-weight-light ml-3">mer. 21 nov, 9h45</span>
            <h5 class="p-3">Nouveautés Angular 8+</h5>
            <span class="pl-3 pr-3 pb-3 d-block">Retrouvez toutes les news à ne pas manquer […]</span>
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
        <div class="col-md-4 border-left ">
          <h3 class="ml-3">Catégories</h3>
          <ul class="list-group ml-5  shadow">
            <li class="list-group-item">Technologie</li>
            <li class="list-group-item">Nature et Aventure</li>
            <li class="list-group-item">Famille</li>
            <li class="list-group-item">Formation</li>
          </ul>
        </div>
      </div>
    <!--Fin Div de l'accueil -->

    </div>
  </body>

  <?php include 'footer.php'; ?>

</html>