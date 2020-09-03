<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel de controle</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styleAdmin.css" rel="stylesheet">
  </head>
  <body >

    <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-fixet-top">
      <div class="container">

        <a class="navbar-brand" href="#">Heaven.Code</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul id="menu-principal" class="navbar navbar-nav navbar-right">
            <li class="nav-item active">
              <a class="nav-link" href="#" ref_sys = "sobre">Editar Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" ref_sys = "cadastrar_equipe">Cadastrar Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" ref_sys = "listar_equipe">Listar Equipe</a>
            </li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="?sair" style="color: pink">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-closed-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4 1a1 1 0 0 0-1 1v13H1.5a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2a1 1 0 0 0-1-1H4zm2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>Sair!</a>
          </li>
          </ul>



        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h2>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
              </svg>Painel de controle
            </h2>
          </div>
          <div class="col-md-3">
            <p>Seu ultimo login foi em 02/09/2020</p>
          </div>

        </div>
      </div>
    </header>

    <section class="bread">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
    </section>

    <section class="principal" >
      <div class="container" >
        <div class="row" >
          <div class="col-md-3" >
            <div class="list-group">
              <a href="#" class="list-group-item active " ref_sys = "sobre">Sobre</a>
              <a href="#" class="list-group-item" ref_sys = "cadastrar_equipe">Cadastrar Equipe</a>
              <a href="#" class="list-group-item" ref_sys = "listar_equipe">Listar Equipe</a>
            </div>
          </div>
          <div class="col-md-9" >
            <div id="sobre_section" class="panel panel-default">
              <div class="panel-heading cor-padrao">
                <h3 class="panel-title">Sobre</h3>
              </div>
              <div class="panel-body">
                <form>
                  <div class="form-group">
                    <label for="email">Código HTML:</label>
                    <textarea class="form-control" style="height: 140px; resize: vertical;"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default" style="background-color: white; margin-bottom:10px">Enviar</button>
                </form>
              </div>
            </div>

            <div id="cadastrar_equipe_section" class="panel panel-default">
              <div class="panel-heading cor-padrao">
                <h3 class="panel-title">cadastrar Equipe</h3>
              </div>
              <div class="panel-body">
                <form>
                <div class="form-group">
                    <label for="email">Nome do membro</label>
                    <input type="text" name="nome_membro" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="email">Descrição do membro</label>
                    <textarea class="form-control" style="height: 140px; resize: vertical;"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default" style="background-color: white; margin-bottom:10px">Enviar</button>
                </form>
              </div>
            </div>

            <div id="listar_equipe_section" class="panel panel-default">
              <div class="panel-heading cor-padrao">
                <h3 class="panel-title">Membros da Equipe</h3>
              </div>
              <div class="panel-body">
                <table class="table" style="background-color: white;">
                  <thead>
                    <tr>
                      <th>ID:</th>
                      <th>Nome do membro</th>
                      <th>Excluir</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      for($i=0; $i<5; $i++){
                    ?>
                        <tr>
                          <td>1</td>
                          <td>saulo</td>
                          <td><button type="button" class="btn btn-sm btn-danger">Excluir</button></td>
                        </tr>

                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(function(){

        clickMenu();
        scrollItem();
        function clickMenu() {
          $('#menu-principal a, .list-group a').click(function () {
            $('.list-group a').removeClass('active');
            $('#menu-principal a').parent().removeClass('active');

            $('menu-principal a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active');
            $('.list-group a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active');
            return false;
          })
        }

        function scrollItem(){
          $('#menu-principal a, .list-group a').click(function (){
            var ref = '#'+$(this).attr('ref_sys')+'_section';
            var offset = $(ref).offset().top;
            $('html, body').animate({'scrollTop':offset});
          });
        }

      })
    </script>
  </body>
</html>