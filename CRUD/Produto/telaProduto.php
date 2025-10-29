<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<BODY>
  <h3>
    <font color="#0000FF">Lista de PRODUTOS</font>
  </h3>
  <?php
  include_once "../Banco/TemaBanco.php";
  $variavelConexao = conectarBancoDados();
  ?>

  <table border="1">
    <tr>
      <td><b>Código</b></td>
      <td><b>Nome</b></td>
      <td><b>Valor</b></td>
      <td><b>Tipo</b></td>
    </tr>

  </table>

  <h4><a href="/aula2/produto.html">Cadastrar novo PRODUTO</a></h4>
  <?php

  // encerra conexão
  mysqli_close($variavelConexao);
  ?>

</BODY>

</HTML>