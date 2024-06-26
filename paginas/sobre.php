<?php
$api = file_get_contents("http://localhost/Tech-Academy-2/api/api2.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $membro) {

}
?>

<div class="container text-center">
    <h1>SOBRE O ARCADEHUB</h1>
    <p style="width: 60%; margin: auto;">O ArcadeHub foi criado com o objetivo de entreter aquelas pessoas que buscam
        diversão e desafios rápidos,
        acessíveis e empolgantes. Nascido da paixão por jogos e da vontade de proporcionar experiências memoráveis,
        nosso site é o destino perfeito para quem deseja se desconectar da rotina e mergulhar em um mundo de aventuras.
    </p>
    <p style="width: 60%; margin: auto;">Todos os nossos jogos são gratuitos e podem ser jogados diretamente no
        navegador, sem a necessidade de downloads ou instalações complicadas. Basta acessar o site, escolher o seu jogo
        favorito e começar a se divertir.</p>
    <p style="width: 60%; margin: auto;">
        No ArcadeHub, nossa missão é trazer alegria e entretenimento de qualidade para pessoas de todas as idades.
        Acreditamos que os jogos são uma forma poderosa de relaxamento e aprendizado, estimulando a criatividade, a
        resolução de problemas e a coordenação.
    </p>
    <p class="text-center" style="width: 60%; margin: auto;">
        Estamos apenas começando e queremos que você faça parte dessa jornada. Acesse o ArcadeHub agora mesmo, descubra
        seus jogos favoritos e embarque em aventuras inesquecíveis. Quer você esteja procurando por uma rápida diversão
        ou um desafio mais intenso, o ArcadeHub tem tudo o que você precisa.
    </p>
    
    <h1>EQUIPE RESPONSÁVEL</h1>
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
                            <a href="https://github.com">
                                <i class="bi bi-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://linkedin.com">
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