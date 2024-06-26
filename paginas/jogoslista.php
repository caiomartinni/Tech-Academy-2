<?php
$api = file_get_contents("http://localhost/Tech-Academy-2/api/api.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $jogo) {

}
?>

<div class="container container-box">
    <h1 class="text-center">JOGOS FAVORITOS</h1>

    <div class="container-cards row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xxl-3 row-cols-fluid-4">
        <?php
        foreach ($dadosApi as $jogo) {
            ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $jogo->capa ?>" class="card-img-top" alt="<?= $jogo->nome ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $jogo->nome ?></h5>
                        <p class="card-text"><?= $jogo->descricao ?></p>
                            <a href="#" class="btn btn-primary">
                            <i class="bi bi-controller"></i>
                                Jogar
                            </a>
                            <a href="#" class="btn btn-secondary">
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



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"] ?? NULL;
      
    function mensagem($msg){
      echo "<script>alert('{$msg}');history.back();</script>";
    };

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      mensagem("Escreva um email válido");
    };
};
?>