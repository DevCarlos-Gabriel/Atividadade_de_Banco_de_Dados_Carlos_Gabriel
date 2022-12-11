<?php
  include('../banco.php');

  $nome = $_POST['nome'];
  $sexo = $_POST['sexo'];
  $nascimento = $_POST['data'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];

      // Verificar a ordem dos valores a seguir
  $sql = "insert into tbaluno (codaluno,nome,sexo,nascimento,endereco,telefone)
                       values(null,'$nome','$sexo','$nascimento','$endereco','$telefone')";
  $insert = $conexao->query($sql);

  if($insert==true)
  {
    header('Location: frmcadalu.php?insert=ok');
  }else{
    header('Location: frmcadalu.php?insert=error');
  }
?>