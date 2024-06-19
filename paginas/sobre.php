<?php
$api = file_get_contents("http://localhost/Tech-Academy-2/api/api2.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $membro) {

}
?>

<div class="container text-center">
    <h1>SOBRE O ARCADEHUB</h1>
    <p>O ArcadeHub foi criado com o objetivo de entreter aquelas pe</p>

    <h1>EQUIPE</h1>
    <?php
    foreach ($dadosApi as $membro) {
        ?>
        <div class="card mb-3 equipe" style="max-width: 540px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= $membro->foto ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body card-body-equipe">
                        <h5 class="card-title"><?= $membro->nome ?></h5>
                        <p class="card-text"><?= $membro->descricao ?></p>
                        <p class="card-text"><small class="text-body-secondary"><?= $membro->funcao ?></small></p>
                    </div>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="bi bi-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

