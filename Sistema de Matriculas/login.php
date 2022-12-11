<?php
    include 'banco.php';
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from tbusua where email = '$email' and senha = '$senha'";
    //executa comando sql
    $consulta = $conexao->query($sql);

    //testa se deu certo o comando
    if($consulta)
    {
        if($consulta->num_rows > 0)
        {
            session_start();
            $_SESSION['login'] = 'ok';
            /*echo 'Usuário encontrado';*/
            header ('Location: principal.php');
        }
        else
        {
            /*echo 'Usuário não encontrado';*/
            header ('Location: index.php?login=erro');
        }
    }
?>