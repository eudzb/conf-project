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
    <div class="container mt-5">
      <div class="col-md-6 offset-md-3 mt-5 border rounded shadow pl-4 pr-4">
        <h3 class="text-center mt-5">Se connecter</h3>
        <form>
          <div class="form-group mt-5 ml-5 mr-5">
            <input
            type="email"
            class="form-control"
            placeholder="Adresse email"
            autocomplete="off">
          </div>
          <div class="form-group ml-5 mr-5">
            <input
            type="password"
            class="form-control"
            placeholder="Mot de passe"
            autocomplete="off">
          </div>
          <div class="form-check ml-5 mr-5">
            <input type="checkbox" class="form-check-input" id="condition">
            <label class="form-check-label" for="condition">J'approuve les conditions d'utilisations</label>
          </div>
            <button
            type="submit"
            class="btn btn-success mt-4 mb-5 col-md-4 offset-md-4">Connexion</button>
        </form>
      </div>
    </div>
  </body>
</html>
