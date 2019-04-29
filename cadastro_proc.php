<?php 
 require_once 'conexao.php';

 if($_POST['login'] != ''){
     $login = filter_input(INPUT_POST,'login',
     FILTER_SANITIZE_SPECIAL_CHARS);

     $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

     $sql = "INSERT INTO usuario (nome,telefone,email,usuario,senha)
             VALUES (:nome,:telefone,email,usuario,senha)";

    $resultado = $con->prepare($sql);
    $resultado -> bindParam(":nome",$nome);
    $resultado -> bindParam(":telefone",$telefone);
    $resultado -> bindParam(":email",$email);
    $resultado -> bindParam(":usuario",$usuario);
    $resultado -> bindParam(":senha", $senha);
    $resultado->execute();

    header("location: login.php?ok=1");
    
 }