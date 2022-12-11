<?php
  include('../banco.php');

  $id = $_POST['id'];
  $ncurso = $_POST['nome'];
  $turno = $_POST['turno'];
  $cargah = $_POST['cargah'];
      // Verificar a ordem dos valores a seguir
  $sql = "update tbcursos set nome = '$ncurso', turno = '$turno', cargahoraria = '$cargah'
            where codcurso = '$id'";

  $update = $conexao->query($sql);

  if($update==true)
  {
    header('Location: buscacurs.php?update=ok');
  }else{
    header('Location: buscacurs.php?update=error');
  }
?>