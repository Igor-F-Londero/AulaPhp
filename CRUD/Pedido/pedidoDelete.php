<?php
include_once "../Banco/TemaBanco.php";
$variavelConexao = conectarBancoDados();

$get = filter_input(INPUT_GET, "var_num");


$sql = "DELETE FROM pedido WHERE numero = {$get}";
mysqli_query($variavelConexao,$sql);
echo "Deletado!";

header("Location: pedidoSelect.php");
exit();

?>