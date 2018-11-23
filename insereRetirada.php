<?php

include("conexao.php");
//include("retirarLivro.php");

$idLivro = $_POST['idLivro'];
$matri_Aluno = $_POST['matri_Aluno'];

$queryLivro = "SELECT Titulo FROM Livros WHERE id = '$idLivro'";
$consuLivro = mysqli_query($mysqli,$queryLivro) or die ("Erro ao tentar Conectar ao Banco");
$dados = $consuLivro->fetch_array();

$queryuser = "SELECT email FROM Usuario WHERE matricula = '$matri_Aluno'";
$consuser = mysqli_query($mysqli,$queryuser) or die ("Erro ao tentar Conectar ao Banco");
$dadosUser = $consuser->fetch_array();


$nomeLivro = $dados['Titulo'];
$emailUser = $dadosUser['email'];
$dataSaida = date('Y/m/d'); 
$dataEntrega = date('Y/m/d', strtotime("+15 days"));

$queryRetirada = "INSERT INTO Livro_Retirado VALUE";
$queryRetirada.= "('$idLivro','$matri_Aluno','$dataSaida','$dataEntrega','$nomeLivro','$emailUser')";
mysqli_query($mysqli,$queryRetirada) or die ("Não foi Possivel fazer a retirada");
echo ("Retirada feita com Sucesso");

// Muda estado de disponibilidade de S para N
$queryDisponivel = "UPDATE Livros SET Disponibilidade = 'N' WHERE id='$idLivro'" ;
mysqli_query($mysqli,$queryDisponivel) or die ("Erro ao tentar conectar ao Banco");
mysqli_close($mysqli);

?>

<script type="text/javascript">
   window.setTimeout("location.href='home.php'", 2000);
</script>