<?php   
include_once "../Banco/TemaBanco.php";
$variavelConexao = conectarBancoDados();

$numeroPe = $_GET["var_num"];

$sql = "SELECT * FROM itensPedido WHERE numeroPedido='$numeroPe'";
$resultado = mysqli_query($variavelConexao, $sql);

while ($i = mysqli_fetch_assoc($resultado)) {
    echo "Código: " . $i['codigo'] . "<br />";
    echo "Produto: " . $i['produto'] . "<br />";
    echo "Quantidade: " . $i['quantidade'] . "<br />";
    echo "Valor: " . $i['valor'] . "<br />";
    echo "<hr />";
}
mysqli_close($variavelConexao);