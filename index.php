<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Heaven Code</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-fixet-top">
    <div class="container">

      <a class="navbar-brand" href="#">Heaven.Code</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar navbar-nav navbar-right">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <div class="box">
    <section class="banner">
      <div class="overlay"></div>
      <div class="container chamada-banner">
      <div class="row">
        <div class="col-md-12 text-center">
        <h2><?php echo htmlentities('<'); ?>Heaven.Code<?php echo htmlentities('>');  ?></h2>
          <p>Empresa voltada para desenvolvimento web e marketing digital.</p>
          <a href="">Saiba Mais!</a>
        </div>
      </div>
      </div>
    </section>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>