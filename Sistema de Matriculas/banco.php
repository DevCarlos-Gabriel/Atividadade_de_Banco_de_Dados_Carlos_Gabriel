<?php
    $conexao =  new mysqli('localhost','root','','dbmatriculas');
    if (mysqli_connect_errno()){
        trigger_error(mysqli_connect_error());
    }
?>