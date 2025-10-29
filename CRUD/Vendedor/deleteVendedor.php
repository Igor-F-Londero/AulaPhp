<?php
include_once "../Banco/TemaBanco.php"; //inclui o arquivo de conexao com o banco de dados
$variavelConexao = conectarBancoDados();

$get1 = filter_input(INPUT_GET, "var_cod", FILTER_VALIDATE_INT);// pega o valor da variavel passada na URL

//Fazer tratamento de erro para garantir que o vendedor não esteja associado a nenhum produto antes de deletar


// comando SQL para deletar o registro
$sql = "DELETE  FROM vendedor WHERE codigo= $get1";

mysqli_query($variavelConexao, $sql);

echo "<br>" . "Excluido!";
mysqli_close($variavelConexao);
header("Location: selectVendedor.php");   
?>
