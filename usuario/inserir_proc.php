<?php require_once "../verifica.php" ?>
<?php 
require_once '../conexao.php';

if($_POST['nome'] != ''){

    $nome = filter_input(INPUT_POST,'nome',
    FILTER_SANITIZE_SPECIAL_CHARS);

    $nota = str_replace(',','.',$_POST['nota']);
    $nota = floatval($nota);

    $sql = "INSERT INTO aluno (nome,nota)
            VALUES (:nome,:nota)";
            
    $resultado = $con->prepare($sql);
    $resultado -> bindParam(':nome',$nome);
    $resultado -> bindParam(':nota',$nota);
    $resultado ->execute();

    header('location: index.php');
}