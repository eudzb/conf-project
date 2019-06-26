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
    <?php include './menu.php'; ?>

    <!-- HEADER CONFERENCE -->
    <div class="container up-space content">
      <h2>Création d'une conférence</h2>

      <!-- MAIN BODY CREATION CONFERENCE -->
      <div class="mt-2 mb-5">
        <div class="row">
          <h4 class="col mt-5 mb-4">Choix du thème</h4>
        </div>
        <div class="form-group row p-3 align-items-baseline">
        <label for="choixTheme">Sélectionner un thème</label>
          <select class="form-control ml-4 mr-2 col-md-4" id="choixTheme">
            <option>Bonheur</option>
            <option>Cohesion d'équipe</option>
            <option>Conduite du changement</option>
            <option>Dépassement de soi</option>
            <option>Digital / Technologie</option>
            <option>Innovation</option>
            <option>Management / Leadership</option>
            <option>Motivation</option>
            <option>Performance</option>
            <option>Prise de risque</option>
          </select>
        </div>
        <div class="row">
          <h4 class="col mt-3 mb-4">Quel titre voulez-vous donner à la conférence ?</h4>
        </div>
        <div class="row">
          <input
          type="text"
          name="titre"
          placeholder="Saisissez un titre (ex: Les nouveautés d'Angular 8)"
          class="form-control ml-2 mr-2 col-md-6">
        </div>
        <div class="row">
          <h4 class="col mt-5 mb-4">Définissez la date et les horaires</h4>
        </div>
        <div class="form-row mb-3">
          <div class="col-md-1 align-self-center mr-2">
            <span>Début</span>
          </div>
          <div class="col-md-3 p-0 mr-2">
            <input
            type="date"
            name="date"
            class="form-control">
          </div>
          <div class="col-md-2">
            <input
            type="time"
            name="start"
            class="form-control">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-1 align-self-center mr-2">
            <span>Fin</span>
          </div>
          <div class="col-md-3 p-0 mr-2">
            <input
            type="date"
            name="date"
            class="form-control">
          </div>
          <div class="col-md-2">
            <input
            type="time"
            name="end"
            class="form-control">
          </div>
        </div>
        <div class="row">
          <h4 class="col mt-5 mb-4">Ajouter une adresse</h4>
        </div>
        <div class="row mb-3">
          <input
          type="text"
          name="adress"
          placeholder="Saisissez l'adresse (ex: 21 rue Claude Tillier)"
          class="form-control ml-2 mr-2 col-md-6">
        </div>
        <div class="row mb-3">
          <input
          type="text"
          name="cp"
          placeholder="Saisissez un code postal (ex: 75012)"
          class="form-control ml-2 mr-2 col-md-6">
        </div>
        <div class="row">
          <input
          type="text"
          name="city"
          placeholder="Saisissez la ville (ex: Paris)"
          class="form-control ml-2 mr-2 col-md-6">
        </div>
        <div class="row">
          <h4 class="col mt-5 mb-4">Une brève description</h4>
        </div>
        <div class="row">
          <textarea
          name="description"
          rows="8"
          cols="80"
          class="form-control ml-2 mr-2"
          style="resize: none"></textarea>
        </div>
        <div class="row pb-5">
          <button
          type="button"
          name="enregister"
          class="btn btn-primary ml-2 mr-2 mt-4">Enregistrer</button>
        </div>
      </div>
    </div>
  </body>
  <?php include './footer.php'; ?>
</html>
