<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcadeHub</title>

    <link rel="shortcut icon" href="imagens/logo/icone.png">
    <base href="http://localhost/Tech-Academy-2/">
    <!--Fontes: Exo 2, Nunito-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">

    <!--Folhas de Estilo e Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!--Ícones do Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--Animações na página-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!--Importar animações-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!--Importar Bootstrap-->
    <script src="js/bootstrap.bundle.min.js"></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">
                <img src="imagens/logo/logo-h-white2.png" alt="ArcadeHub" title="ArcadeHub" width="200px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Jogos Favoritos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                </ul>
                <a class="d-flex btn btn-primary" type="submit" href="login">
            <i class="bi bi-door-open"></i>              
            Entre ou cadastre-se
            </a>
            </div>
            
        </div>
    </nav>

    <main>
<!-- Comeco PHP BASE -->
<?php
        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            $p = explode("/", $param);
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "games") {
            $pagina = "paginas/{$jogo}.php";
        } else {
            $pagina = "paginas/{$page}.php";
        }

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
        ?>
        <!-- Final PHP BASE -->
        
    </main>

    <footer>
        <p class="text-center">Desenvolvido por Caio Martini</p>
        <ul>
            <li>
                <a href="https://github.com/caiomartinni">
                    <i class="bi bi-github"></i>
                </a>
            </li>
            <li>
                <a href="https://instagram.com/caiomartinni">
                    <i class="bi bi-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://linkedin.com/caiomartinni">
                    <i class="bi bi-linkedin"></i>
                </a>
            </li>
        </ul>
    </footer>
        <script>
            AOS.init();
        </script>
</body>

</html>