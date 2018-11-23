<?php

include("conexao.php");
//include("devolucao.php");

$idLivro = $_POST['idLivro'];

$queryLivro = "DELETE FROM Livro_Retirado WHERE id_livro = '$idLivro'";
mysqli_query($mysqli,$queryLivro) or die ("Erro ao tentar Conectar ao Banco");

// Muda estado de disponibilidade de S para N
$queryDisponivel = "UPDATE Livros SET Disponibilidade = 'S' WHERE id='$idLivro'" ;
mysqli_query($mysqli,$queryDisponivel) or die ("Erro ao tentar conectar ao Banco");
mysqli_close($mysqli);
echo "Devolução Feita com Sucesso";

?>

<script type="text/javascript">
   window.setTimeout("location.href='devolucao.php'", 2000);
</script>