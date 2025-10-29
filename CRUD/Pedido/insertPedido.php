<?php
    $codiPe = $_POST["cod"];
    $dataPe =$_POST["data"];
    $valorPe =$_POST["valor"];
    $vendedorPe =$_POST["vendedor"];


    include_once "../Banco/TemaBanco.php";
    $variavelConexao = conectarBancoDados();
    $sql ="INSERT INTO pedido(numero,data,valor,codVendedor)VALUES({$codiPe},'{$dataPe}',{$valorPe},'{$vendedorPe}')"; //dados tipo texto contem ''

    mysqli_query($variavelConexao,$sql);

    echo"Gravando dados...";
    header("Location: pedidoSelect.php");
    exit();
    //desconectar do banco d dados

    mysqli_close($variavelConexao);

?>