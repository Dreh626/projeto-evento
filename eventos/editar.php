<?php require_once "../verifica.php" ?>
<?php 
    require_once "../topo.php";

    $id = intval($_GET['id']);
    $sql = "SELECT * FROM cliente WHERE id = $id LIMIT 1";
    $resultado = $con->query($sql);
    $cliente = $resultado->fetch(PDO::FETCH_ASSOC);

?>

<form action="editar_proc.php" method="post">
    <div class="form-group row formulario">
            <label class="col-sm-1 col-form-label">Nome</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="nome" value="<?= $cliente['nome']?>">
        </div>
    </div>
    <div class="form-group row formulario">
            <label class="col-sm-1 col-form-label">Saldo</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="saldo" value="<?= $cliente['saldo']?>">
        </div><br>
        <button type="submit" class="btn btn-success">Salvar</button>
        <input type="hidden" name="id" value="<?= $cliente['id']; ?>">
    </div>
</form>
<? require_once "../rodape.php"; ?>