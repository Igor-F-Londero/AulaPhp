<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<BODY>
  <h3>
    <font color="#0000FF">Lista de PEDIDOS</font>
  </h3>


  <table border="1">
    <tr>
      <td><b>Numero</b></td>
      <td><b>Data</b></td>
      <td><b>Valor</b></td>
      <td><b>Vendedor</b></td>
      <td><b>Excluir</b></td>
      <td><b>Editar</b></td>
      <td><b>Detalhes do Pedido</b></td>
    </tr>

    <?php
    // cria conexão
    include_once "../Banco/TemaBanco.php";
    $variavelConexao = conectarBancoDados();

    $sql = "SELECT * FROM Pedido order by data";
    $resultado = mysqli_query($variavelConexao, $sql);

    while ($i = mysqli_fetch_assoc($resultado)) {
    ?>
      <tr>
        <td><?php echo $i['numero']; ?></td>
        <td><?php echo date('d/m/Y', strtotime($i['data'])); ?></td>
        <td><?php echo $i['valor']; ?></td>
        <td><?php echo $i['codVendedor']; ?></td>

        <td><a href="<?php echo "pedidoDelete.php?var_num=" . $i['numero'] . "&tabela=pedido" ?>">Excluir</a></td>
        <td><a href="<?php echo "pedidoFormEditar.php?var_num=" . $i['numero'] . "&var_data=" . $i['data'] . "&var_valor=" . $i['valor'] . "&var_vend=" . $i['codVendedor'] ?>">Alterar</a></td>
        <td><a href="<?php echo "./itens/detalhesItens.php?var_num=" . $i['numero'] ?>">Detalhes</a></td>

      </tr>
    <?php
    }
    ?>
  </table>

  <h4><a href="pedido.php">Cadastrar novo PEDIDO</a></h4>

  <?php
  // encerra conexão
  mysqli_close($variavelConexao);
  ?>

</BODY>

</HTML>