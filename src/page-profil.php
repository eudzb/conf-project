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

    <div class="container up-space content">

      <!-- INFO HEADER -->
      <div class="row shadow">
        <div class="col-md-8">
          <div class="mt-4 p-3">
            <div class="d-flex align-items-center mt-2">
              <img
              src="../img/mytho.png"
              alt="icon-user"
              class="rounded-circle"
              style="height:100px; width:100px">
              <div class="ml-3 align-self-start">
                <h5 class="text-dark">[Pseudo] ([Prénom Nom])</h5>
                <h5 class="text-dark font-weight-light">
                  Nombres de participations : [18]
                </h5>
                <h5 class="text-dark font-weight-light">Contact : [dousai@gmail.com]</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mt-4 p-3">
            <i class="fab fa-facebook-square"></i>

            <!-- <div class="d-flex align-items-center">
              <i class="p48 text-muted material-icons">location_on</i>
              <span class="font-weight-light text-sh align-self-center">21 Rue Claude Tillier - 75012 Paris</span>
            </div> -->
            <button
            type="button"
            name="participate"
            class="btn btn-primary w-75"
            >Ajouter en ami</button>
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
        Conférences assistées
      </h4>

      <div class="row mt-5">
        <div class="col-md-3 rounded m-4 h-25 p-0 shadow-sm pointer event">
          <img
          src="../img/android-maker.jpeg"
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
          src="../img/android-maker.jpeg"
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
          src="../img/android-maker.jpeg"
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
          src="../img/android-maker.jpeg"
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
  </body>
</html>
