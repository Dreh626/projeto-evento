<?php require_once "../verifica.php" ?>
<?php require_once "../topo.php" ?>

<div class="d-flex justify-content-center btnaddnew">
    <button type="button" class="btn btn-primary">
        <a href="inserir.php">Adicionar novo aluno</a>
    </button>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Nota</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        $sql = "SELECT * FROM aluno";
        $resultado = $con->query($sql);
        while($aluno = $resultado->fetch(PDO::FETCH_ASSOC)):
      ?>
    <tr>
      <td> <?= $aluno['id']?></td>
      <td> <?= $aluno['nome']?></td>
      <td> <?= $aluno['nota']?></td>
      <td> 
      <button type="button" class="btn btn-warning botao">
          <a href="editar.php?id=<?= $aluno['id']?>">Editar</a>
        </button>
      <button type="button" class="btn btn-danger botao">
          <a href="excluir.php?id=<?= $aluno['id']?>">Excluir</a>
        </button>
    
      </td>
    </tr>
  </tbody>
        <?php endwhile; ?> 
</table>
