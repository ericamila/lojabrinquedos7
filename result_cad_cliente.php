<?php

echo "<h1>Processando...</h1>";

include "conexao.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

    if($nome == "" || $nome == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo nome deve ser preenchido');window.location.href='
    index.html';</script>";

    }else{
      if (!mysqli_query($link,"INSERT INTO cliente (nome,cpf) VALUES ('$nome','$cpf')")) { 
        echo"<script language='javascript' type='text/javascript'>
                alert('Não foi possível cadastrar esse Cliente');window.location.
                href='index.html'</script>";
      } else{
        echo"<script language='javascript' type='text/javascript'>
                alert('Cliente cadastrado com sucesso!');window.location.
                href='index.html'</script>";
      }
    }
 

mysqli_close($link);
?>