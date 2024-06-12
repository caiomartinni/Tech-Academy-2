<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");


    $game[1] = array(

        "id" => 1,
        "nome" => "The Dino Game",
        "descricao" => "Se divirta com seu pequeno dinossauro coletando os cristais.",
        "descricao-full" => "Embarque em uma aventura jurássica com The Dino Game! Ajude nosso corajoso dinossauro a coletar todos os cristais espalhados por cenários deslumbrantes e cheios de desafios. Mas atenção: ao encontrar o poderoso escudo, nosso herói muda de cor e se torna invencível, desbravando os obstáculos com uma força inigualável. Teste suas habilidades, vença inimigos e descubra segredos escondidos nesse jogo eletrizante onde cada cristal coletado é uma vitória épica. Prepare-se para a jornada de sua vida em The Dino Game!",

        "criador" => "Caio Martini",
        "siteJogo" => "https://dinogame.x10.mx",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/dino.png",
        "foto1" => "",
        "foto2" => "",
        "foto3" => "",
    );

    $game[2] = array(

        "id" => 2,
        "nome" => "Fuja das Cobras",
        "descricao" => "Desvie das cobras para vencer este jogo desafiador!",
        "descricao-full" => "a",

        "criador" => "Eduardo Rigobeli Pereira De Souza",
        "siteJogo" => "https://youtube.com",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/cobra.png",
        "foto1" => "",
        "foto2" => "",
        "foto3" => "",
    );

    $game[3] = array(

        "id" => 3,
        "nome" => "Soccer Cat",
        "descricao" => "Já imaginou ser uma grande estrela dos gramados? Mas sendo... um gato fofinho?",
        "descricao-full" => "a",

        "criador" => "Mariano Firmino",
        "siteJogo" => "https://youtube.com",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/cat.png",
        "foto1" => "",
        "foto2" => "",
        "foto3" => "",
    );

    $game[4] = array(

        "id" => 4,
        "nome" => "Ghost Maze",
        "descricao" => "Fuja dos soldados para vencer o jogo!",
        "descricao-full" => "Em Ghost Maze, você assume o papel de um fantasma travesso que deve fugir de militares patrulhando um labirinto enquanto coleta esferas de energia espalhadas pelo caminho. Cada nível do labirinto apresenta desafios únicos e layouts diferentes, onde você precisa evitar os soldados que seguem padrões de movimento predefinidos ou reagem à sua presença. Para ajudar na sua fuga, você pode coletar esferas especiais que concedem poderes temporários, como invisibilidade, atravessar paredes ou aumentar sua velocidade. Com gráficos vibrantes e uma trilha sonora empolgante, Ghost Maze oferece uma experiência nostálgica inspirada em Pac-Man, mas com um toque inovador e envolvente.",

        "criador" => "Mariana Franco",
        "siteJogo" => "#",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/ghost.png",
        "foto1" => "",
        "foto2" => "",
        "foto3" => "",
    );

    $game[5] = array(

        "id" => 5,
        "nome" => "The Dino Game",
        "descricao" => "Se divirta com seu pequeno dinossauro coletando os cristais.",
        "descricao-full" => "a",

        "criador" => "Caio Martini",
        "siteJogo" => "https://dinogame.x10.mx",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/dino.png",
        "foto1" => "",
        "foto2" => "",
        "foto3" => "",
    );

    $game[6] = array(

        "id" => 6,
        "nome" => "The Dino Game",
        "descricao" => "Se divirta com seu pequeno dinossauro coletando os cristais.",
        "descricao-full" => "a",

        "criador" => "Caio Martini",
        "siteJogo" => "https://dinogame.x10.mx",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/dino.png",
        "foto1" => "",
        "foto2" => "",
        "foto3" => "",
    );


    echo json_encode($game);



?>

