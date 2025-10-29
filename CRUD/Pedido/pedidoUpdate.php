<?php
include_once "../Banco/TemaBanco.php";
$variavelConexao = conectarBancoDados();

$numeroPe = $_POST["numero"];
$dataPe = $_POST["data"];   
$valorPe = $_POST["valor"];
$vendedorPe = $_POST["vendedor"];

$buscaVendedor = "SELECT codigo FROM vendedor WHERE codigo='$vendedorPe'";
$resultadoBusca = mysqli_query($variavelConexao, $buscaVendedor);

if (mysqli_num_rows($resultadoBusca) == 0 && $vendedorPe != "") { // mysqli_num_rows verifica se a consulta retornou algum registro
    echo " Código de vendedor inválido. Atualização cancelada.";
    mysqli_close($variavelConexao);
    exit();
} else {
    $sql = "UPDATE pedido SET data='$dataPe', valor='$valorPe', codVendedor='$vendedorPe' WHERE numero='$numeroPe'";

mysqli_query($variavelConexao, $sql);

echo " Dados atualizados";

mysqli_close($variavelConexao);

header("Location: pedidoFromEditar.php");
}


?>
