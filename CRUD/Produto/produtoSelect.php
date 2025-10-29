<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<BODY>
   <h3>
      <font color="#0000FF">Lista de PRODUTOS</font>
   </h3>

   <table border="1">
      <tr>
         <td><b>Código</b></td>
         <td><b>Nome</b></td>
         <td><b>Valor</b></td>
         <td><b>Tipo</b></td>
         <td><b>Excluir</b></td>
         <td><b>Editar</b></td>
      </tr>


      <?php
      // cria conexão
      include_once "../Banco/TemaBanco.php";
      $variavelConexao = conectarBancoDados();

      $sql = "SELECT * FROM Produto order by codigo";
      $resultado = mysqli_query($variavelConexao, $sql);

      while ($i = mysqli_fetch_assoc($resultado)) {
      ?>
         <tr>
            <td><?php echo $i['codigo']; ?></td>
            <td><?php echo $i['nome']; ?></td>
            <td><?php echo $i['valor']; ?></td>
            <td><?php echo $i['perecivel']; ?></td>
            <td><a href="<?php echo "deleteProduto.php?var-cod=".$i['codigo'] ?>">Excluir</a></td>
            <td><a href="<?php echo"ProdutoFormEditar.php?var_cod=".$i['codigo']. "&var_nome=".$i['nome']."&var_valor=".$i['valor']."&var_tipo=".$i["perecivel"]?>">Alterar</a></td>
         </tr>

      <?php
      }
      ?>
   </table>

   <h4><a href="produto.html">Cadastrar novo PRODUTO</a></h4>
   <?php
   // encerra conexão
   mysqli_close($variavelConexao);
   ?>

</BODY>

</HTML>