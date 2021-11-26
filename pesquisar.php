<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pesquisar</title>
  </head>
  <body>

    <?php
        if (isset($_POST['busca'])){
            $pesquisa = $_POST['busca'];
        }else{
            $pesquisa = '';
        }
        
        include "conection.php";

        $sql = "SELECT * FROM alunos WHERE nome LIKE '%$pesquisa%'";

        $dados = mysqli_query($conn, $sql);
?>



  <div class="container">
     <div class="row">
        <div class="col">

    <h1>Pesquisar</h1>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <form class="d-flex" action="pesquisar.php" method="POST">
                <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
     </nav>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        while ( $linha = mysqli_fetch_assoc($dados) ){
                            $id = $linha['id'];
                            $nome = $linha['nome'];
                            $email = $linha['email'];

                            echo "  <tr>
                                        <th scope='row'>$id</th>
                                        <td >$nome</td>
                                        <td >$email</td>
                                        <td> <a href='editar.php?id=$id' class='btn btn-success'>Editar</a>
                                          <a href='' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#confirma' onclick=" .'"'."pegar_dados($id, '$nome')".'"'.">Excluir</a>
                                        </td>
                                    </tr>";
                        }
                   ?>

                        </tbody>
                        </table>

            <a href="index.php" class="btn btn-primary">Voltar Para Inicio</a>
            <a href="cadastro.php" class="btn btn-primary">Ir para Cadastro</a>
            </div>
         </div>
      </div>

<div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmar Exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="excluir_script.php" method="POST">
        <p>Deseja excluir esse aluno</p>
        <b id="nome">Nome do Aluno ?</b>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
          <input type="hidden" name="nome" id="nome" value="">
          <input type="hidden" name="id" id="id" value="">
          <input type="submit" class="btn btn-danger" value="Sim">
         </form>
      </div>
    </div>
  </div>
</div>

    <script type="text/javascript">
     function pegar_dados(id,nome) {
        document.getElementById('nome').innerHTML = nome;
        document.getElementById('nome').value = nome;
        document.getElementById('id').value = id;
     }
     </script>
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









