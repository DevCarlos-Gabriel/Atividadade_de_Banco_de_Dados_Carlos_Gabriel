<?php
  include('../banco.php');

  $aluno = $_POST['aluno'];
  $usuario = $_POST['usuario'];
  $curso = $_POST['curso'];
  $data = $_POST['data'];
  $hora = $_POST['hora'];
      // Verificar a ordem dos valores a seguir
  $sql = "insert into tbmatriculas (codmat,codaluno,codcurso,codusu,datamat,horamat)
                       values(null,'$aluno','$curso','$usuario','$data','$hora')";
  $insert = $conexao->query($sql);

  if($insert==true)
  {
    header('Location: frmcadmat.php?insert=ok');
  }else{
    header('Location: frmcadmat.php?insert=error');
  }
?>