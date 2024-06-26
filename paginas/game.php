<?php

$id = $p[1] ?? NULL;

$dadosApi = file_get_contents("http://localhost/Tech-Academy-2/api/api.php");

$dadosApi = json_decode($dadosApi);

$jogo = $dadosApi->$id;

?>

<div class="card mb-3 card-info" style="width: 90%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= $jogo->capa ?>" class="img-fluid" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h1 class="card-title"><?= $jogo->nome ?></h1>
        <p class="card-text"><?= $jogo->descricaofull ?></p>
        <p class="card-text"><small class="text-body-secondary"><strong>Criador: </strong> <?= $jogo->criador ?></small></p>
        <br>
        <a class="btn btn-primary" href="<?= $jogo->siteJogo ?>">
          <i class="bi bi-globe"></i>
          Site Oficial do Jogo
        </a>
        <a class="btn btn-primary" href="jogos/<?= $jogo->short ?>/index.html">
          <i class="bi bi-controller"></i>
          Jogue Agora
        </a>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="bi bi-star-fill"></i>
          Adicionar aos favoritos
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        Jogo adicionado aos favoritos com sucesso!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>