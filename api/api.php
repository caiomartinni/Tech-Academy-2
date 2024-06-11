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
        "nome" => "Lost In Paris",
        "descricao" => "Viva em um mundo onde a cidade de Paris foi abandonada há décadas.",

        "criador" => "Drauzio Salles",
        "siteJogo" => "https://youtube.com",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/paris.png",
        "foto1" => "",
        "foto2" => "",
        "foto3" => "",
    );

    $game[3] = array(

        "id" => 3,
        "nome" => "Soccer Cat",
        "descricao" => "Já imaginou ser uma grande estrela dos gramados? Mas sendo... um gato fofinho?",

        "criador" => "Mariano Firmino",
        "siteJogo" => "https://youtube.com",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/cat.png",
        "foto1" => "",
        "foto2" => "",
        "foto3" => "",
    );

    $game[4] = array(

        "id" => 4,
        "nome" => "The Dino Game",
        "descricao" => "Se divirta com seu pequeno dinossauro coletando os cristais.",

        "criador" => "Caio Martini",
        "siteJogo" => "https://dinogame.x10.mx",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/dino.png",
        "foto1" => "",
        "foto2" => "",
        "foto3" => "",
    );

    $game[5] = array(

        "id" => 5,
        "nome" => "The Dino Game",
        "descricao" => "Se divirta com seu pequeno dinossauro coletando os cristais.",

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

        "criador" => "Caio Martini",
        "siteJogo" => "https://dinogame.x10.mx",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/dino.png",
        "foto1" => "",
        "foto2" => "",
        "foto3" => "",
    );


    echo json_encode($game);



?>

