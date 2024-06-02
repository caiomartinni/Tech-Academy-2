<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcadeHub: Home</title>
    
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
                        Catálogo
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
                        Catálogo
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
        <p>Desenvolvido por Caio Martini.</p>
        <p>2024. Todos os direitos reservados.</p>
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
</body>
</html>