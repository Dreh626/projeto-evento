<?php require_once "../verifica.php" ?>
<?php
require_once '../conexao.php';

if($_POST['id'] != ''){
    
    $nome = filter_input(INPUT_POST,'nome',
    FILTER_SANITIZE_SPECIAL_CHARS);

    $saldo = str_replace(',','.',$_POST['saldo']);
    $saldo = floatval($_POST['saldo']);   
    
    $id = intval($_POST['id']);

    $sql = "UPDATE cliente SET nome = :nome, saldo = :saldo
            WHERE id = :id";

    $resultado = $con->prepare($sql);
    $resultado -> bindParam(':nome',$nome);
    $resultado -> bindParam(':saldo',$saldo);
    $resultado -> bindParam(':id',$id);
    $resultado ->execute();

    header('location: index.php');
}
