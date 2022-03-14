<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/btslogin.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/login.css">

  <title>Connexion</title>
</head>
@extends('layouts.main')
@include('layouts.nav')

<body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('/img/img-connexion.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Connexion à <strong>FOOD STROKES</strong></h3>
            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>

            <form method="post">
              @csrf
              <div class="form-group first">
                <label for="username">Adresse mail</label>
                <input type="email" name="email" required class="form-control" placeholder="exemple-email@gmail.com" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" required class="form-control" placeholder="*************" id="password">
              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
              </div>

              <input type="submit" value="Connexion" class="btn btn-block btn-primary">
              <a href="/inscription" class="btn btn-link">
                S'inscrire
            </a>
            </form>

          </div>
        </div>
      </div>
    </div>


  </div>



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>