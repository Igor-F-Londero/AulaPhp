<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Vendedores</h3>

    <table border="1">
        <tr>

            <td><b>Código</b></td>
            <td><b>Nome</b></td>
            <td><b>Comissão</b></td>
            <td><b>Ações</b></td>   
            

        </tr>

        <?php
        include_once "../Banco/TemaBanco.php"; //inclui o arquivo de conexao com o banco de dados
        $variavelConexao = conectarBancoDados(); //chama a funcao que faz a conexao com o banco de dados

        $sql = "SELECT * FROM vendedor";
        $resultado = mysqli_query($variavelConexao, $sql);

        while ($i = mysqli_fetch_array($resultado)) { //loop para exibir todos os registros encontrados
        ?>
            <tr>

                <td><?php echo $i['codigo']; ?></td>
                <td><?php echo $i['nome']; ?></td>
                <td><?php echo $i['comissao']; ?></td>
                <td>
                    <a href="deleteVendedor.php?var_cod=<?php echo $i['codigo']; ?>">Deletar</a>
                </td>
                <td><a href="editarVendedor.php?codigo=<?php echo $i['codigo']; ?>">Editar</a></td>

            </tr>
        <?php
        }
        ?>

    </table>

    <a href="telaVendedor.html">Voltar</a>
    <?php
    mysqli_close($variavelConexao); //fecha a conexao com o banco de dados  
    ?>

</body>

</html>