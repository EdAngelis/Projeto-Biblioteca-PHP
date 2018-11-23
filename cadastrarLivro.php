<?php
  include('conexao.php');
  

  $query = 'SELECT * FROM Livros';
  $consulta = $mysqli->query($query) or die ($mysqli->error);

?>

<!DOCTIPE <!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
     <!-- Aqui chamamos o nosso arquivo css externo -->
     <link rel="stylesheet" type="text/css"  href="estilo.css" />
</head>
<body>

<style> body {background-color: #e0e0d2} </style>
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

    <form class="form-horizontal " action="insereDadosLivro.php" method="POST">
    <fieldset>

    <div class="form-group">
      <label class="col-md-4 control-label" for="nomeLivro">Título</label>  
      <div class="col-md-4">
      <input id="nomeLivro" name="nomeLivro" type="text" placeholder="" class="form-control input-md" required="required">
        
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="autor">Autor</label>  
      <div class="col-md-4">
      <input id="Autor" name="autor" type="text" required="required" placeholder="" class="form-control input-md">
        
      </div>
    </div>


    <div class="form-group">
      <label class="col-md-4 control-label" for="categoria">Categoria</label>  
      <div class="col-md-4">
      <input id="categoria" name="categoria" required="required" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="cadastroButton"></label>
      <div class="col-md-4">
        <button id="cadastroButton" name="cadastroButton" class="btn btn-primary">Cadastrar</button>
      </div>
    </div>
        

    </fieldset>
    </form>

<table class="table table-dark">
 
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Categoria</th>
    </tr>
  

    
      <?PHP while ($dados = $consulta->fetch_array() ){ ?>
        <tr>
          <th scope="row"> <?php echo $dados['id']; ?> </th>
          <td><?php echo $dados['Titulo'];  ?></td>
          <td><?php echo $dados['Autor']; ?></td>
          <td><?php echo $dados['Categoria']; ?></td>
        </tr>
      
        <?PHP } ?>
   
        
</table>

</body>
</html>

