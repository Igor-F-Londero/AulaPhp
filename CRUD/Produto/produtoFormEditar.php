<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<BODY>
   <?php
   $get1 = filter_input(INPUT_GET, "var_cod");
   $get2 = filter_input(INPUT_GET, "var_nome");
   $get3 = filter_input(INPUT_GET, "var_valor");
   $get4 = filter_input(INPUT_GET, "var_tipo");
   ?>

   <b>
      <font color="#0000FF">Tela de Edição de PRODUTOS</font>
   </b>
   </br> </br>

   <form action="updateProduto.php" method="post">

      <input type=hidden name=tabela value="produto">

      <b> Código:</b> <input type="text" name="cod" size="8" value="<?php echo $get1 ?>" readonly>
      <br /><br />

      <b> Nome:</b> <input type="text" name="nome" size="16" value="<?php echo $get2 ?>">
      <br /><br />

      <b> Valor:</b> <input type="text" name="valor" size="16" value="<?php echo $get3 ?>">
      <br /><br />

      <b> Tipo:</b> <input type="text" name="tipo" size="16" value="<?php echo $get4 ?>">
      <br /><br />

      <a href="produtoSelect.php"> <input type="button" value="Voltar"></a>
      <input type="submit" value="Salvar">
   </form>