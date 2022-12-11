<?php
  include('../banco.php');

  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $sexo = $_POST['sexo'];
  $nascimento = $_POST['data'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
      // Verificar a ordem dos valores a seguir
  $sql = "update tbaluno set nome = '$nome', sexo = '$sexo', nascimento = '$nascimento', endereco = '$endereco', telefone = '$telefone'
            where codaluno = '$id'";

  $update = $conexao->query($sql);

  if($update==true)
  {
    header('Location: buscaaluno.php?update=ok');
  }else{
    header('Location: buscaaluno.php?update=error');
  }
?>