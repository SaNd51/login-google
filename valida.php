<?php
include('database.php');

$email = $_GET['email'];

$sql = "select * from tb_user where email = '$email' limit 1";

$consulta = $conn->query($sql);


if ($consulta == true) {
    if($consulta->num_rows !== 0){
        //echo '';
        session_start();
        $_SESSION['login'] = 'ok';
    }else{
        $sql="insert into tb_user(email, senha) values ('$email','1')";
        $consulta =  $conn->query($sql);
        if ($consulta == true){
            //echo $consulta;
            session_start();
            $_SESSION['login'] = 'ok';
            header('Location: index.php?mess=erro');
        }
    }
}
?>