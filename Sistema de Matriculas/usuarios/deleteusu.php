<?php
include '../banco.php';
    //recebendo codigo para exclusao
$id = $_GET['id'];

$sql = "delete from tbusua where codusu = '$id'";

$consulta = $conexao->query($sql);

if($consulta){
    header ('location: buscausu.php?delete=ok');
}
else{
    header('location: buscausu.php?delete=erro');
}
?>