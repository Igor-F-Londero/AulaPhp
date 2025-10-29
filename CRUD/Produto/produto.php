<?php
//conectar ao banco de dados    
include_once "../Banco/TemaBanco.php";
$variavelConexao = conectarBancoDados();


$codigo = (filter_input(INPUT_POST, "cod"));
$nomeprod = (filter_input(INPUT_POST, "nome"));
$valorprod = (filter_input(INPUT_POST, "valor"));
$tipoprod = (filter_input(INPUT_POST, "per"));


$sql = "INSERT INTO produto(codigo,nome,valor,perecivel)VALUES($codigo,'$nomeprod',$valorprod,'$tipoprod')"; //dados tipo texto contem ''

mysqli_query($variavelConexao, $sql);

echo "Gravando dados...";

mysqli_close($variavelConexao);


//voltar
header("Location: produtoSelect.php");
exit();
