<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8" />

<BODY>
    <h3>
        <font color="#0000FF">Cadastro de Pedidos</font>
    </h3> <br />
    <form action="insertPedido.php" method="post">
        <b> Código:</b> <input type="text" name="cod" size="3">
        <br /><br />
        <b> Data:</b> <input type="date" name="data" size="30">
        <br /><br />
        <b> Valor:</b> <input type="text" name="valor" size="10">
        <br /><br />
        <b> Vendedor:</b> <select name="vendedor">
            <option>Selecione</option>

            <?php
            include_once "../Banco/TemaBanco.php";
            $variavelConexao = conectarBancoDados();

            $sql = "SELECT codigo,nome FROM vendedor
            order by nome";
            $resultado = mysqli_query($variavelConexao, $sql);
            while ($i = mysqli_fetch_array($resultado)) {
            ?>
                <option value="<?php echo $i['codigo']; ?>">
                    <?php echo $i['nome']; ?>
                </option>


            <?php } 
            
            mysqli_close($variavelConexao)?>
        </select>
        <br /><br />
            <input type="reset" value="Cancelar"> <input type="submit" value="Cadastrar">
    </form>
</BODY>

</HTML>


<?php



?>