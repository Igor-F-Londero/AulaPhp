<?php

    $codigo = $_POST["cod"];
    $nomeprod =$_POST["nome"];
    $valorprod =$_POST["valor"];
    $tipoprod =$_POST["per"];

    $variavelConexao = mysqli_connect("localhost","root",
    "", "baseteste");

    if(!$variavelConexao){
        die("conexão falhou!".mysqli_connect_error());
    }else{
        echo "Conexão realizada com sucesso";
    }
    $sql ="INSERT INTO produto(codigo,nome,valor,perecivel)VALUES({$codigo},'{$nomeprod}',{$valorprod},'{$tipoprod}')"; //dados tipo texto contem ''

    mysqli_query($variavelConexao,$sql);

    echo"Gravando dados...";
    
    //desconectar do banco d dados

    mysqli_close($variavelConexao);

?>