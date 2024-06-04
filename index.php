<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcadeHub</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/icone.png">

    <!--Fonte: Abel-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

    <!--Fonte: Ubuntu-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Space+Grotesk:wght@300..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Ícones do Fontawesome-->
    <script src="https://kit.fontawesome.com/2382e2b1fd.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <img src="imagens/logo.png">
        <nav class="header-nav">
            <ul>
                <li>
                    <a href="index.php?pagina=home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=jogos">
                        Jogos
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=sobre">
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=contato">
                        Contato
                    </a>
                </li>
            </ul>
        </nav>
        <a href="javascript:mostrarMenu()" title="menu">
            <i class="fa-solid fa-bars"></i>
        </a>
    </header>
        <nav class="mobile-menu">
        <ul>
                <li>
                    <a href="index.php?pagina=home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=jogos">
                        Jogos
                    </a>
                </li>   
                <li>
                    <a href="index.php?pagina=sobre">
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=contato">
                        Contato
                    </a>
                </li>
            </ul>
        </nav>

        <script>
            function mostrarMenu () {
                var menu = document.querySelector(".mobile-menu");
                menu.classList.toggle("show");
            }
        </script>
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

    <footer class="footer">
        <p class="text-center" >Desenvolvido por Caio Martini.</p>
        <p class="text-center">2024. Todos os direitos reservados.</p>
        <ul>
            <li>
                <a href="https://instagram.com">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://github.com/caiomartinni">
                    <i class="fa-brands fa-github"></i>
                </a>
            </li>
            <li>
                <a href="https://linkedin.com">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </li>
        </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>