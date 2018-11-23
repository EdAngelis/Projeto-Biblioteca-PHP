

<?php

include("conexao.php"); 
//include("cadastrarUsuario.php");

$matricula = $_POST['cadastrarMatricula'];
$nomeUsuario = $_POST['cadastroNome'];
$email = $_POST['cadastroEmail'];

$sql2 = "INSERT INTO Usuario VALUES";
$sql2 .= "('$matricula','$nomeUsuario','$email')";
mysqli_query($mysqli,$sql2) or die("Erro ao tentar Cadastrar Usuario");
mysqli_close($mysqli);
echo "Cliente Cadastrado com Sucesso"

?>

<script type="text/javascript">
   window.setTimeout("location.href='cadastrarUsuario.php'", 2000);
</script>