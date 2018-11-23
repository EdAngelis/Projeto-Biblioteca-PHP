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

   <div class="teste" >


</div>

    <form class="form-horizontal" action="insereDadosUsuario.php" method="POST" >
        
        <fieldset>


            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="nomeLivro">Matricula</label>  
            <div class="col-md-4">
            <input id="cadastrarMatricula" name="cadastrarMatricula" required="required" type="text" placeholder="Numero de Sua Matricula" class="form-control input-md">
                
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="CadastroNome">Nome</label>  
            <div class="col-md-4">
            <input id="cadastroNome" name="cadastroNome" type="text" require="required  " placeholder="Nome Completo" class="form-control input-md">
                
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="cadastroEmail">E-Mail</label>  
            <div class="col-md-4">
            <input id="cadastroEmail" name="cadastroEmail" type="text" placeholder="E-Mail" class="form-control input-md">
                
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
    
</body>
</html>