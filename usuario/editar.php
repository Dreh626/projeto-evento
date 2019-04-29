<?php require_once "../verifica.php" ?>
<?php 
    require_once "../topo.php";

    $id = intval($_GET['id']);
    $sql = "SELECT * FROM aluno WHERE id = $id LIMIT 1";
    $resultado = $con->query($sql);
    $aluno = $resultado->fetch(PDO::FETCH_ASSOC);

?>

<form action="editar_proc.php" method="post">
    <div class="form-group row formulario">
            <label class="col-sm-1 col-form-label">Nome</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="nome" value="<?= $aluno['nome']?>">
        </div>
    </div>
    <div class="form-group row formulario">
            <label class="col-sm-1 col-form-label">Nota</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="nota" value="<?= $aluno['nota']?>">
        </div><br>
        <button type="submit" class="btn btn-success">Salvar</button>
        <input type="hidden" name="id" value="<?= $aluno['id']; ?>">
    </div>
</form>
<? require_once "../rodape.php"; ?>