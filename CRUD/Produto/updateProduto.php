<?php

// cria conexão
include_once("../Banco/TemaBanco.php");
$variavelConexao = conectarBancoDados();

$cod = $_POST['cod'];
$nom = $_POST['nome'];
$val = $_POST['valor'];
$tip = $_POST['tipo'];

$sql = "UPDATE produto 
        SET nome = '$nom', valor = '$val', perecivel = '$tip'
        WHERE codigo = '$cod'";

mysqli_query($variavelConexao, $sql);
echo " Dados atualizados";



mysqli_close($variavelConexao);
?>

<h3><a href="produtoSelect.php">LISTAR PRODUTOS</a></h3>