<?php

include("conexao.php");
//include("searchLivro.php");
$buscaLivro = $_POST['buscaLivro'];
$queryBusca = "SELECT * FROM Livros WHERE Titulo LIKE '%$buscaLivro%'";
$busca = $mysqli->query($queryBusca) or die ($mysqli->error);

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
</head>
<body>
    <div >
            <ul class="menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">Livros</a>
                        <ul>
                                <li><a href="cadastrarLivro.php">Cadastrar</a></li> 
                                <li><a href="searchLivro.php">Retirada</a></li>
                                <li><a href="devolucao.php">Devolução</a></li>
                        </ul>
                        </li>
                        <li><a href="#">Usuários</a>
                            <ul>
                                <li><a href="cadastrarUsuario.php">Cadastrar</a></li>
                            </ul>
                        </li>
                  
                </ul>
      </div>

<div class="espaçamento_retirarLivro" > </div>
   
    <form action="insereRetirada.php" method="POST">
      <div class="form-row">
        <div class="col">
          <input type="text" name="idLivro" class="form-control" placeholder="Código do Livro">
        </div>
        <div class="col">
          <input type="text" name="matri_Aluno" class="form-control" placeholder="Matricula do Aluno">
        </div>
        <div class="Button">
          <button id="singlebutton" name="singlebutton" class="btn btn-primary">Retirar Livro</button>
        </div>
      </div>
    </form>
 <div class="espaçamento_retirarLivro2" ></div>
   
    <table class="table table-dark">
    
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Categoria</th>
      <th scope="col">Disponibilidade</th>
    </tr>


    
      <?PHP while ($dados2 = $busca->fetch_array() ){ ?>
        <tr>
          <th scope="row"> <?php echo $dados2['id']; ?> </th>
          <td><?php echo $dados2['Titulo'];  ?></td>
          <td><?php echo $dados2['Autor']; ?></td>
          <td><?php echo $dados2['Categoria']; ?></td>
          <td><?php echo $dados2['Disponibilidade']; ?></td>
        </tr>
      
        <?PHP } ?>
        
    </table>
    
</body>
</html>


