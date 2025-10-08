<?php
      // cria conexão
      $conexao = mysqli_connect("localhost", "root", "", "baseTeste");
      if (!$conexao) {
         die("Conexão falhou! " . mysqli_connect_error());
      } else {
         echo "Conexão realizada!";
      }

     $get1 = filter_input(INPUT_GET,"var-cod");
     $sql = "DELETE FROM Produto WHERE codigo= {$get1}";
     mysqli_query($conexao,$sql);

     echo "<br>"."Excluido!";

?>