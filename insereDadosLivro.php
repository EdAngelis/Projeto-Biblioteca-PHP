

<?php

include("conexao.php"); 
//include("cadastrarLivro.php");

$nomeLivro = $_POST['nomeLivro'];
$autor = $_POST['autor'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO Livros VALUES ";
$sql .= "(null, '$nomeLivro', '$autor', '$categoria','S')"; 
mysqli_query($mysqli,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($mysqli);
echo "Livro cadastrado com sucesso!";


?>

<script type="text/javascript">
   window.setTimeout("location.href='cadastrarLivro.php'", 2000);
</script>