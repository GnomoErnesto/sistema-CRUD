<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastrar Aluno</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pesquisar.php">Pesquisar Aluno</a>
                      </li>
                </ul>
        </div>

  </nav>
  <div class="container">
            <div class="row">
              <div class="col">
                <h1>Cadastro Alunos</h1>
                <img src="images/addaluno.png" alt="Adicionar Aluno" width="500" height="400">
                    <form action = "cadastro_script.php" method="POST">

                      <div class="form-group">
                        <label for="nome">Nome:</label><br>
                        <input type="text" class="form-control" name="nome" ><br>
                      </div>

                      <div class="form-group">
                        <label for="email">Email:</label><br>
                        <input type="text" class="form-control" name="email"><br><br>
                      </div>  

                      <div class="form-group">
                        <input type="submit" class="btn btn-success">
                      </div>  
                    </form>
                    <br>
                    <div class="form-group">
                    <a href="index.php" class="btn btn-primary">Voltar Para Inicio</a>
                    <a href="pesquisar.php" class="btn btn-primary">Ir para Pesquisa</a>
                      </div>  
                    </form>
                  </div>
              </div>
          </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>