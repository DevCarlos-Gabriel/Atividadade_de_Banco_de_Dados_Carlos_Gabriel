<?php
  include('../banco.php');

  $ncurso = $_POST['nome'];
  $turno = $_POST['turno'];
  $cargah = $_POST['cargah'];
  
      // Verificar a ordem dos valores a seguir
  $sql = "insert into tbcursos (codcurso,nome,turno,cargahoraria)
                       values(null,'$ncurso','$turno','$cargah')";
  $insert = $conexao->query($sql);

  if($insert==true)
  {
    header('Location: frmcadcurs.php?insert=ok');
  }else{
    header('Location: frmcadcurs.php?insert=error');
  }
?>