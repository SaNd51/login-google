<?php
include('database.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    $sql = "select * from tb_user where email = '$email' and senha = '$senha' ";
   

    $consulta = $conn->query($sql);

    if($consulta == true){
        if($consulta->num_rows > 0){
            session_start();
            $_SESSION['login'] = 'ok';
            header('Location: user.php?mess=ok');
        }else{
            header('Location: index.php?mess=erro');
        }
    
    }
?>