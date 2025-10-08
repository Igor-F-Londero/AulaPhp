<?php

//-- não recebe parâmeto e não retorna dados
function f_mensagem(){
    echo "ADS - UPF";
}
//-- recebe parâmeto e não retorna dados
function f_boasVindas($a){
    echo "Oi $a";
}
//-- não recebe parâmeto e retorna dados
function f_conteudo(){
    $c = 'Linguagem PHP';
    return $c;
}
//-- recebe parâmeto e retorna dados
function f_soma($v1, $v2){
  return $v1 + $v2;
}
?>