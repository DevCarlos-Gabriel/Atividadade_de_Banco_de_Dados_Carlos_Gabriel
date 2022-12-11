<?php
include '../banco.php';
    //recebendo codigo para exclusao
$id = $_GET['id'];

$sql = "delete from tbaluno where codaluno = '$id'";

$consulta = $conexao->query($sql);

if($consulta){
    header ('location: buscaaluno.php?delete=ok');
}
else{
    header('location: buscaaluno.php?delete=erro');
}
?>