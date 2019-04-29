<?php require_once "../verifica.php" ?>
<?php 
require_once '../conexao.php';

if($_POST['nome'] != ''){

    $nome = filter_input(INPUT_POST,'nome',
    FILTER_SANITIZE_SPECIAL_CHARS);

    $saldo = str_replace(',','.',$_POST['saldo']);
    $saldo = floatval($saldo);

    $sql = "INSERT INTO cliente (nome,saldo)
            VALUES (:nome,:saldo)";
            
    $resultado = $con->prepare($sql);
    $resultado -> bindParam(':nome',$nome);
    $resultado -> bindParam(':saldo',$saldo);
    $resultado ->execute();

    header('location: index.php');
}