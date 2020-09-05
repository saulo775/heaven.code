<?php
  $pdo = new PDO('mysql:host=localhost;dbname=heaven_code','root','');
  $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
  $sobre->execute();
  $sobre = $sobre->fetch()['sobre'];

  $nome = $pdo->prepare("SELECT * FROM `tb_equipe`");
  $nome->execute();
  $nome = $nome->fetch()['nome'];

  $descricao = $pdo->prepare("SELECT * FROM `tb_equipe`");
  $descricao->execute();
  $descricao = $descricao->fetch()['descricao'];

?>

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

    <section class="cadastro-lead">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6">
          <h2> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg> Entre na nossa lista!</h2>
          </div>
          <div class="col-md-6">
            <form method="post">
              <input type="text" name="nome"><input type="submit">
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="depoimento text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Depoimento</h2>
            <blockquote>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tortor tellus, lobortis eget justo non, lobortis lobortis ex. Quisque at tristique lacus. Nam vestibulum ante non bibendum vulputate. Phasellus at tortor diam. Integer dapibus orci sit amet efficitur scelerisque. Mauris quis pharetra ante. Phasellus vel euismod est, vitae placerat lorem. Mauris dictum vehicula euismod. Proin non orci feugiat, fermentum leo eget, tincidunt ex."</p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    <section class="diferenciais text-center">
      <h2>Conheça nossa Empresa</h2>
      <div class="container">
        <div class="row"><?php echo $sobre; ?></div>
      </div>
    </section>

    <section class="equipe">
        <h2>Nossa Equipe</h2>
        <div class="container equipe-container">
            <div class="row">

              <?php
                $selectMembros = $pdo->prepare("SELECT `nome`,`descricao` FROM `tb_equipe`");
                $selectMembros->execute();
                $membros = $selectMembros->fetchAll();

                for($i=0; $i<count($membros); $i++){
              ?>
                <div class="col-md-6">
                    <div class="equipe-single">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="user-picture">
                                  <div class="user-picture-child"></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h3><?php echo $membros[$i]['nome']; ?></h3>
                                <p><?php echo $membros[$i]['descricao']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div><!--equipe-container-->
      </section>

      <section class="final-site">
          <div class="container">
              <div class="row">

                  <div class="col-md-6">
                    <h2>Fale conosco</h2>
                    <form>
                        <div class="form-group">
                          <label for="email">Nome:</label>
                          <input type="text" name="nome" class="form-control" id="nome">
                        </div>

                         <div class="form-group">
                          <label for="email">E-mail:</label>
                          <input type="email" name="email" class="form-control" id="email">
                        </div>

                         <div class="form-group">
                          <label for="email">Mensagem:</label>
                          <textarea class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                      <h2>Nossos planos</h2>
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Plano Semanal</th>
                                <th>Plano Diário</th>
                                <th>Plano Anual</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>

                              <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>

                               <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>
                            </tbody>
                          </table>
                  </div>

              </div>
          </div>
      </section>

      <footer>
        <p class="text-center">Todos os direitos reservados!</p>
      </footer>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>