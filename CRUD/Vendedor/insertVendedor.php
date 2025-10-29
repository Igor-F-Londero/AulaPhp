<?php

include_once "../Banco/TemaBanco.php"; //inclui o arquivo de conexao com o banco de dados
$variavelConexao = conectarBancoDados();

$acao = $_POST['acao'];
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$comissao = $_POST['comissao'];

$sql = "INSERT INTO vendedor (codigo, nome, comissao) VALUES ('$codigo','$nome','$comissao')";


if ($acao == 'inserir') {
    if (mysqli_query($variavelConexao, $sql)) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($variavelConexao);
    }


    mysqli_close($variavelConexao);
    header("Location: telaVendedor.html")
;
}
