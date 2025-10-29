<?php
function conectarBancoDados() {
    $host = "localhost"; // Endereço do servidor de banco de dados
    $usuario = "root"; // Nome de usuário do banco de dados
    $senha = ""; // Senha do banco de dados
    $banco = "tema"; // Nome do banco de dados

    // Cria a conexão com o banco de dados usando mysqli_connect
    $variavelConexao = new mysqli($host, $usuario, $senha, $banco);


// die()   é um apelido para exit() e serve para encerrar a execução do script imediatamente
if ($variavelConexao -> connect_error) {
    die("Falha na conexão" . $variavelConexao -> connect_error); // .mysqli_connect_error() retorna uma string com a descrição do último erro de conexão com o banco de dados MySQL. Ela é usada para obter informações detalhadas sobre uma falha na conexão, permitindo que você exiba ou registre o motivo pelo qual a conexão não foi estabelecida
}

    $variavelConexao->set_charset("utf8mb4");

    return $variavelConexao;
}
?>