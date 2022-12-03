<?php
    echo "<h1>Processando...</h1>";

include "conexao.php";

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];


if (!mysqli_query($link,"INSERT INTO brinquedo (descricao,valor,tipo) VALUES ('$descricao','$valor', '$tipo')")) { 
  echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse brinquedo');window.location.
                href='index.html'</script>";
} else{
  echo"<script language='javascript' type='text/javascript'>
          alert('Brinquedo cadastrado com sucesso!');window.location.
          href='index.html'</script>";
}

mysqli_close($link);
?>