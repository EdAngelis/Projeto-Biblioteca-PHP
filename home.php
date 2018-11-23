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

<div class="d-flex align-items-end container align-self-center d-flex justify-content-center"  >
    <img  src="img/logo.png" alt="biblioteca" width=384 height=256>
</div>

    
<h2> Livros para Entrega </h2>

	
<table class="table table-dark">
 
 <tr>
   <th scope="col">Matrícula Aluno</th>
   <th scope="col">Livro</th>
   <th scope="col">Data Entrega</th>
   <th scope="col">Prazo Entrega</th>
 </tr>

 
   <?PHP while ($dados = $resultQuery->fetch_array() ){ ?>
    <?php  $data_atual = new DateTime(date('2018/12/07')); //2018/12/07
            $data_final = new DateTime($dados['data_vencimento']); 
            $diferenca = $data_atual->diff( $data_final ); 
            $diferenca = $diferenca->format('%d days');    ?> 
     <tr>
       <th scope="row"> <?php echo $dados['matri_Aluno']; ?> </th>
       <td><?php echo $dados['nome_livro'];  ?></td>
       <td><?php echo $dados['data_vencimento']; ?></td>
       <td><?php echo $diferenca; ?></td>
     </tr>
    <?php 
    if($diferenca<=0){

        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 0;

        $mail->isSMTP();

        $mail->SMTPAuth = true;
    
        $mail->Host = 'smtp.gmail.com'; 
    
        $mail->Username = 'seuEmail@gmail.com';
        $mail->Password = 'PASSWORD';
        $mail->Port = 465;
        
        // tipo de criptografia: "tls" ou "ssl"
        $mail->SMTPSecure = 'ssl';
        
        $mail->setFrom('ed4ngelis@gmail.com', 'Ed');

        $mail->addAddress($dados['email'] , 'Destinatário 1');
        
        // define o formato como HTML
        $mail->isHTML(true);
        
        $mail->Charset = 'UTF-8';
        
        // assunto do email
        $mail->Subject = '';
        
        // corpo do email em HTML
        $mail->Body    = 'Ola Aluno, A entrega do Livro ' .$dados['nome_livro']. ', vence Hoje';
        
        // corpo do email em texto
        //$mail->AltBody = "";
        
        $mail->send();

    } 
    ?>
    <?PHP } ?>
    
     
</table>

</body>
</html>

