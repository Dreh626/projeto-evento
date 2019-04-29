<?php require_once "../verifica.php" ?>
<?php require_once "../topo.php"; ?>

<form action="inserir_proc.php" method="post">
    <div class="form-group row formulario">
            <label class="col-sm-1 col-form-label">Nome</label>
        <div class="col-sm-2">
            <input type="text" name="nome" class="form-control">
        </div>
    </div>
    <div class="form-group row formulario">
            <label class="col-sm-1 col-form-label">Saldo</label>
        <div class="col-sm-2">
            <input type="text" name="saldo" class="form-control">
        </div><br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>
<? require_once "../rodape.php"; ?>