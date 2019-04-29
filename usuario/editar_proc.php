<?php require_once "../verifica.php" ?>
<?php
require_once '../conexao.php';

if($_POST['id'] != ''){
    
    $nome = filter_input(INPUT_POST,'nome',
    FILTER_SANITIZE_SPECIAL_CHARS);

    $nota = str_replace(',','.',$_POST['nota']);
    $nota = floatval($_POST['nota']);   
    
    $id = intval($_POST['id']);

    $sql = "UPDATE aluno SET nome = :nome, nota = :nota
            WHERE id = :id";

    $resultado = $con->prepare($sql);
    $resultado -> bindParam(':nome',$nome);
    $resultado -> bindParam(':nota',$nota);
    $resultado -> bindParam(':id',$id);
    $resultado ->execute();

    header('location: index.php');
}
