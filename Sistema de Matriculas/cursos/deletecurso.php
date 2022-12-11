<?php
include '../banco.php';
    //recebendo codigo para exclusao
$id = $_GET['id'];

$sql = "delete from tbcursos where codcurso = '$id'";

$consulta = $conexao->query($sql);

if($consulta){
    header ('location: buscacurs.php?delete=ok');
}
else{
    header('location: buscacurs.php?delete=erro');
}
?>