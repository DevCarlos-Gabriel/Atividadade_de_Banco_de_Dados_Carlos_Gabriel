<?php
include '../banco.php';
    //recebendo codigo para exclusao
$id = $_GET['id'];

$sql = "delete from tbmatriculas where codmat = '$id'";

$consulta = $conexao->query($sql);

if($consulta){
    header ('location: buscamat.php?delete=ok');
}
else{
    header('location: buscamat.php?delete=erro');
}
?>