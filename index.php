<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcadeHub</title>

    <link rel="shortcut icon" href="imagens/logo/icone.png">

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
</head>

<body>

    <!--Importar Bootstrap-->
    <script src="js/bootstrap.bundle.min.js"></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
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
                        <a class="nav-link" aria-current="page" href="index.php?pagina=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=login">Jogos Favoritos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=contato">Contato</a>
                    </li>
                </ul>
                <a class="d-flex btn btn-primary" type="submit" href="index.php?pagina=login">
            <i class="bi bi-door-open"></i>              
            Entre ou cadastre-se
            </a>
            </div>
            
        </div>
    </nav>

    <main>
        <?php
        //imprimir o conteúdo do array do GET
        //print_r($_GET);
        
        //recuperar a variável página
        $pagina = $_GET["pagina"] ?? "home";

        //paginas / home.php
        $pagina = "paginas/{$pagina}.php";

        //verificar se o arquivo existe
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
        ?>
    </main>

    <footer>
        <p class="text-center">Desenvolvido por Caio Martini</p>
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
    </footer>

</body>

</html>