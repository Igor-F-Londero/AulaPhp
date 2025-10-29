
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vendedor</title>
</head>
<body>
<?php
$getcod = filter_input(INPUT_GET, 'codigo');
$getnome = filter_input(INPUT_GET, 'nome');  
$getcomissao = filter_input(INPUT_GET, 'comissao');

?>
    

    <h2>Editar Vendedor</h2>
    <br>
 
    <form action="updateVendedor.php" method="post">
        <label for="codigo">Código:</label>
        <input type="number" name="codigo" id="codigo" value="<?php echo $getcod; ?>" required>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $getnome; ?>" required>

        <label for="comissao">Comissão:</label>
        <input type="number" name="comissao" id="comissao" step="0.01" value="<?php echo $getcomissao; ?>" required>

        <button type="submit">Salvar</button>
    </form>

    <a href="selectVendedor.php">Voltar</a>

</body>
</html>