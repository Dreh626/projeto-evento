<?php 
 require_once 'conexao.php';

 if($_POST['login'] != ''){
     $login = filter_input(INPUT_POST,'login',
     FILTER_SANITIZE_SPECIAL_CHARS);

     $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

     $sql = "INSERT INTO usuario (login,senha)
             VALUES (:login,:senha)";

    $resultado = $con->prepare($sql);
    $resultado -> bindParam(":login",$login);
    $resultado -> bindParam(":senha",$senha);
    $resultado->execute();

    header("location: login.php?ok=1");
    
 }