<?php 

$nome = $_POST["caixa1"];
$cidade = $_POST["cidades"];
$usuario = $_POST["user"];


if(empty($nome)){

    echo "O campo não pode ser vazio"."<br />";

}else{
    echo "=>$nome"."<br />";
}

echo "cidade => $cidade"."<br />";
echo "Usuário =>$usuario"."<br />";

if(isset($_POST["opc"])){

    echo "As leituras de preferência são:"."<br />";

    foreach($_POST["opc"] as $n){
        echo "*"."$n"."<br />";
    }
}else{
    echo "Nenhum Selecionado";
}

if(isset($_POST["livros"])){
    echo " livros preferidos"."<br />";
    foreach($_POST["livros"] as $livro){
        echo "$livro"."<br />";
    }
}else{

}


?>