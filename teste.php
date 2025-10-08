<?php

include_once('ex.php');

f_mensagem();
echo "<br />";
$nome = "Ana";
echo "<br />";
f_boasVindas($nome);
echo "<br />";
$dados = f_conteudo();
echo "$dados";
echo "<br />";
$soma = f_soma(84,90);
echo "Resultado: $soma";

?>