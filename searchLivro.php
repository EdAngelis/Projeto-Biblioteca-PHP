

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
<form class="form-horizontal" action="retirarLivro.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Buscar Livro</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="searchinput"></label>
  <div class="col-md-4">
    <input id="buscaLivro" name="buscaLivro" type="search" placeholder="Nome do Livro" class="form-control input-md">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Buscar</button>
  </div>
</div>

</fieldset>
</form>

    
</body>
</html>


    
    



