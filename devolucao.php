<?php
    include("conexao.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
 
// inclui o autoloader do Composer
require 'vendor/autoload.php';
    // query com livros retirados
    $queryRetirados = 'SELECT * FROM Livro_Retirado';
    $resultQuery = $mysqli->query($queryRetirados) or die ("Não foi Possivel Retirar dados do banco");

    
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
    <div class="teste" >


    </div>
   <form action="insereDevolucao.php" method="POST">
      <div class="form-row">
        <div class="col">
          <input type="text" name="idLivro" class="form-control" placeholder="Código do Livro">
        </div>
        <div class="Button">
          <button id="singlebutton" name="singlebutton" class="btn btn-primary">Devolver</button>
        </div>
      </div>
    </form>

    
<h2> Livros para Devolver </h2>
	
<table class="table table-dark">
 
 <tr>
   <th scope="col">id</th>
   <th scope="col">Matrícula Aluno</th>
   <th scope="col">Livro</th>
   <th scope="col">Data Entrega</th>
   <th scope="col">Prazo Entrega</th>
 </tr>

 
   <?PHP while ($dados = $resultQuery->fetch_array() ){ ?>
    <?php  $data_inicial = new DateTime(date('Y/m/d')); 
            $data_final = new DateTime($dados['data_vencimento']); 
            $diferenca = $data_inicial->diff( $data_final ); 
            $diferenca = $diferenca->format('%d days');    ?> 
     <tr>
       <th scope="row"> <?php echo $dados['id_livro'] ; ?> </th>
       <td><?php echo $dados['matri_Aluno']; ?></td>
       <td><?php echo $dados['nome_livro'];  ?></td>
       <td><?php echo $dados['data_vencimento']; ?></td>
       <td><?php echo $diferenca; ?></td>
     </tr>
    
     
    <?PHP } ?>
    
     
</table>

</body>
</html>