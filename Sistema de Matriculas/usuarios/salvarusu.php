<?php
  include('../banco.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha1'];
      // Verificar a ordem dos valores a seguir
  $sql = "insert into tbusua (codusu,nome,email,senha)
                       values(null,'$nome','$email','$senha')";
  $insert = $conexao->query($sql);

  if($insert==true)
  {
    header('Location: frmcadusu.php?insert=ok');
  }else{
    header('Location: frmcadusu.php?insert=error');
  }
?>