<?php
  include('../banco.php');

  $id = $_POST['id'];
  $idaluno = $_POST['aluno'];
  $idcurso = $_POST['curso'];
  $usuario = $_POST['nome'];
  $data = $_POST['data'];
  $hora = $_POST['hora'];
      // Verificar a ordem dos valores a seguir
  $sql = "update tbmatriculas codaluno = '$idaluno',codusu = '' ,codcurso = '$idcurso' , datamat = '$data', horamat = '$hora'
            where codmat = '$id'";

  $update = $conexao->query($sql);

  if($update==true)
  {
    header('Location: buscacurs.php?update=ok');
  }else{
    header('Location: buscacurs.php?update=error');
  }
?>