<?php require_once "../verifica.php" ?>
<?php require_once "../conexao.php";

if($_GET['id'] != ''){
    $id = intval($_GET['id']);

    $sql = "DELETE  FROM aluno WHERE id = $id";
    $con->query($sql);
}

header('location: index.php');