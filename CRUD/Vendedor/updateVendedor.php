<?php 
include_once "../Banco/TemaBanco.php"; //inclui o arquivo de conexao com o banco de dados
$variavelConexao = conectarBancoDados();

$getcod = filter_input(INPUT_POST, 'codigo')?? '';
$getnome = filter_input(INPUT_POST, 'nome')?? '';
$getcomissao = filter_input(INPUT_POST, 'comissao')?? '';


if ($getcod && $getnome && $getcomissao) {
    $sql = "UPDATE vendedor 
    SET nome='$getnome', comissao='$getcomissao' 
    WHERE codigo='$getcod'"; // Comando SQL para atualizar o registro

    mysqli_query($variavelConexao, $sql);
    echo "Registro atualizado com sucesso!";
}else{
    echo "Erro: Dados incompletos para atualização.";
}
mysqli_close($variavelConexao);
echo "<br><a href='selectVendedor.php'>Voltar</a>";
?>