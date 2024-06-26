<div class="container container-carrousel">
    <br>
    <h1 class="text-center">JOGOS EM DESTAQUE</h1>
    <div id="carouselExampleCaptions" class="carousel slide" style=" background-color: black; border-radius: 20px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./imagens/screenshots/dino2.jpg" class="d-block w-100" alt="The Dino Game" title="The Dino Game"
                    style=" opacity: 60% !important;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Dino Game</h5>
                    <p>Se divirta com seu pequeno dinossauro coletando os cristais.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./imagens/screenshots/ghost1.jpg" class="d-block w-100" alt="Ghost Maze" title="Ghost Maze"
                    style=" opacity: 60% !important;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ghost Maze</h5>
                    <p>Fuja dos soldados para vencer o jogo!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./imagens/screenshots/cobra1.png" class="d-block w-100" alt="Fuja das Cobras" title="Fuja das Cobras"
                    style=" opacity: 60% !important;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fuja das Cobras</h5>
                    <p>Desvie das cobras para vencer este jogo desafiador!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <Br>
</div>

<?php
$api = file_get_contents("http://localhost/Tech-Academy-2/api/api.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $jogo) {

}
?>

<div class="container container-box">
    <h1 class="text-center">TODOS OS JOGOS</h1>

    <div class="container-cards row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xxl-3 row-cols-fluid-4">
        <?php
        foreach ($dadosApi as $jogo) {
            ?>

                <div class="col" data-aos="flip-down">
                    <div class="card">
                        <img src="<?= $jogo->capa ?>" class="card-img-top" alt="<?= $jogo->nome ?>" title="<?= $jogo->nome ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $jogo->nome ?></h5>
                            <p class="card-text"><?= $jogo->descricao ?></p>
                            <a href="jogos/<?= $jogo->short ?>/index.html" class="btn btn-primary">
                                <i class="bi bi-controller"></i>
                                Jogar
                            </a>
                            <a href="game/<?= $jogo->id ?>" class="btn btn-secondary">
                                <i class="bi bi-plus"></i>
                                Mais Detalhes
                            </a>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>
    </div>
</div>