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
    <!-- HEADER CONFERENCE -->
    <div class="container mt-5">
      <h2>Création d'une conférence</h2>

      <!-- MAIN BODY CREATION CONFERENCE -->
      <div class="mt-2 mb-5">
        <div class="row">
          <h4 class="col mt-5 mb-4">Choix du thème</h4>
        </div>
        <div class="form-group row">
        <label
          for="choixTheme"
          class="col">Sélectionner un thème</label>
          <select class="form-control ml-2 mr-2" id="choixTheme">
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
          <h4 class="col mt-5 mb-4">Quel titre voulez-vous donner à la conférence ?</h4>
        </div>
        <div class="row">
          <input
          type="text"
          name="titre"
          placeholder="Saisissez un titre (ex: Les nouveautés d'Angular 8)"
          class="form-control ml-2 mr-2">
        </div>
        <div class="row">
          <h4 class="col mt-5 mb-4">Définissez la date et les horaires</h4>
        </div>
        <div class="form-row">
          <div class="col p-0 mr-4">
            <input
            type="date"
            name="date"
            class="form-control">
          </div>
          <div class="col p-0">
            <input
            type="date"
            name="date"
            class="form-control">
          </div>
        </div>
        <div class="row">
          <h4 class="col mt-5 mb-4">Sélectionner l'adresse</h4>
        </div>
        <div class="row">
          <input
          type="text"
          name="adresse"
          placeholder="Saisissez l'adresse"
          class="form-control ml-2 mr-2">
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
        <div class="row">
          <button
          type="button"
          name="enregister"
          class="btn btn-primary ml-2 mr-2 mt-4">Enregistrer</button>
        </div>
      </div>
    </div>
  </body>

  <!-- FOOTER -->
  <footer>
    <div class="bg-secondary pt-4 pb-4">
      <p class="mt-3 mb-3 text-center font-weight-light text-light">
        La Conférence © 2018 - 2019 | Tous droits réservés.
      </p>
    </div>
  </footer>
</html>
