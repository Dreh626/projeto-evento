<?php
    require_once 'conexao.php';

    if($_POST['login'] != '' && $_POST['senha'] != ''){
        $login = $_POST['login'];
        $sql = "SELECT * FROM usuario
                WHERE login = :login LIMIT 1";
        $resultado = $con->prepare($sql);
        $resultado->bindParam('login',$login);
        $resultado->execute();

        $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
        if($usuario){
            $logado = password_verify($_POST['senha'],$usuario['senha']);
                if($logado){
                    session_start();
                    $_SESSION['usuario_id'] = $usuario['id'];
                    header('location: index.php');
                } else{
                    header('location: login.php');
                }
        }else{
            header('location: login.php?erro=usuarion');    
        }
    }else {
        header('location: login.php?erro=dados');
    }