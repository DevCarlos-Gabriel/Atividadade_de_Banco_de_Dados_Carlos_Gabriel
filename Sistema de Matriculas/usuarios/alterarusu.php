<?php
  include('../banco.php');

  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha1'];
      // Verificar a ordem dos valores a seguir
  $sql = "update tbusua set nome = '$nome', email = '$email', senha = '$senha'
            where codusu = '$id'";

  $update = $conexao->query($sql);

  if($update==true)
  {
    header('Location: buscausu.php?update=ok');
  }else{
    header('Location: buscausu.php?update=error');
  }
?>