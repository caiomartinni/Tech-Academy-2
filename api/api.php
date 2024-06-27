<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");


    $game[1] = array(

        "id" => 1,
        "nome" => "The Dino Game",
        "descricao" => "Se divirta com seu pequeno dinossauro coletando os cristais.",
        "descricaofull" => "Embarque em uma aventura jurássica com The Dino Game! Ajude nosso corajoso dinossauro a coletar todos os cristais espalhados por cenários deslumbrantes e cheios de desafios. Mas atenção: ao encontrar o poderoso escudo, nosso herói muda de cor e se torna invencível, desbravando os obstáculos com uma força inigualável. Teste suas habilidades, vença inimigos e descubra segredos escondidos nesse jogo eletrizante onde cada cristal coletado é uma vitória épica. Prepare-se para a jornada de sua vida em The Dino Game!",

        "criador" => "Caio Martini",
        "siteJogo" => "https://dinogame.x10.mx",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/dino.png",
        "foto1" => "http://localhost/Tech-Academy-2/imagens/screenshots/dino1.jpg",
        "foto2" => "http://localhost/Tech-Academy-2/imagens/screenshots/dino2.jpg",

        "short" => "dino",
    );

    $game[2] = array(

        "id" => 2,
        "nome" => "Fuja das Cobras",
        "descricao" => "Desvie das cobras para vencer este jogo desafiador!",
        "descricaofull" => "Em 'Fuja das Cobras', um emocionante jogo mobile, você se vê em uma aventura onde agilidade e reflexos rápidos são essenciais. À medida que cobras venenosas caem do céu, seu objetivo é desviar habilmente delas enquanto coleta moedas reluzentes para aumentar sua pontuação. Cada moeda coletada traz recompensas, mas cuidado: uma colisão com as cobras pode acabar com a sua jornada. Com gráficos vibrantes e uma jogabilidade envolvente, 'Fuja das Cobras' oferece uma experiência desafiadora e divertida para jogadores de todas as idades. Prepare-se para testar suas habilidades e veja até onde você consegue ir neste viciante jogo de ação e estratégia.",

        "criador" => "Eduardo Rigobeli Pereira De Souza",
        "siteJogo" => "https://youtube.com",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/cobra.png",
        "foto1" => "http://localhost/Tech-Academy-2/imagens/screenshots/cobra1.jpg",
        "foto2" => "http://localhost/Tech-Academy-2/imagens/screenshots/cobra2.jpg",

        "short" => "cobra",
    );

    $game[3] = array(

        "id" => 3,
        "nome" => "Soccer Cat",
        "descricao" => "Já imaginou ser uma grande estrela dos gramados? Mas sendo... um gato fofinho?",
        "descricaofull" => "Em 'Soccer Cat', você assume o papel de um adorável gatinho com habilidades surpreendentes no futebol, competindo em um estádio cheio de vida e entusiasmo. Os gráficos vibrantes e detalhados trazem à vida um campo de futebol onde seu felino protagonista dribla, passa e chuta a bola com agilidade e precisão felinas. As arquibancadas estão repletas de torcedores miando e aplaudindo a cada jogada espetacular. Com uma jogabilidade envolvente, 'Soccer Cat' oferece uma experiência única e encantadora, onde estratégia e reflexos rápidos são essenciais para levar seu time de gatinhos à vitória. Prepare-se para viver a emoção do futebol de uma forma totalmente nova e cativante!",

        "criador" => "João Lucas Santos",
        "siteJogo" => "https://youtube.com",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/cat.png",
        "foto1" => "",
        "foto2" => "",

        "short" => "cat",

    );

    $game[4] = array(

        "id" => 4,
        "nome" => "Ghost Maze",
        "descricao" => "Fuja dos soldados para vencer o jogo!",
        "descricaofull" => "Em Ghost Maze, você assume o papel de um fantasma travesso que deve fugir de militares patrulhando um labirinto enquanto coleta esferas de energia espalhadas pelo caminho. Cada nível do labirinto apresenta desafios únicos e layouts diferentes, onde você precisa evitar os soldados que seguem padrões de movimento predefinidos ou reagem à sua presença. Para ajudar na sua fuga, você pode coletar esferas especiais que concedem poderes temporários, como invisibilidade, atravessar paredes ou aumentar sua velocidade. Com gráficos vibrantes e uma trilha sonora empolgante, Ghost Maze oferece uma experiência nostálgica inspirada em Pac-Man, mas com um toque inovador e envolvente.",

        "criador" => "Mariana Franco",
        "siteJogo" => "#",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/ghost.png",
        "foto1" => "http://localhost/Tech-Academy-2/imagens/screenshots/ghost1.jpg",
        "foto2" => "http://localhost/Tech-Academy-2/imagens/screenshots/ghost2.jpg",

        "short" => "ghost",

    );

    $game[5] = array(

        "id" => 5,
        "nome" => "Adventure King",
        "descricao" => "Você é rei de um vasto mundo, mas terá muitos desafios para enfrentar pela frente...",
        "descricaofull" => "'Adventure King' é um emocionante jogo de ação e aventura onde você assume o papel de um valente rei armado com uma poderosa marreta. Em sua jornada épica, você enfrentará uma variedade de inimigos ferozes e superará obstáculos desafiadores, como canhões mortais, enquanto busca restaurar a paz em seu reino. Com gráficos vibrantes e jogabilidade envolvente, cada nível traz novos desafios e perigos, exigindo habilidades estratégicas e reflexos rápidos para derrotar os adversários e avançar em sua missão heroica.",

        "criador" => "Matheus Henrique do Nascimento",
        "siteJogo" => "https://construct.net",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/king.png",
        "foto1" => "http://localhost/Tech-Academy-2/imagens/screenshots/king1.jpg",
        "foto2" => "",
        
        "short" => "king",

    );

    $game[6] = array(

        "id" => 6,
        "nome" => "The Cold Climb",
        "descricao" => "Sua missão é guardar o tesouro desse reino gelado.",
        "descricaofull" => "'Cold Climb' é um emocionante jogo de ação e aventura que leva você a um mundo gelado repleto de perigos. Como um corajoso rei, você deve enfrentar inimigos formidáveis enquanto escala montanhas cobertas de neve e atravessa paisagens congeladas. Sua missão é encontrar a chave do tesouro, escondida em locais desafiadores, e abrir o baú que guarda riquezas incalculáveis. Com gráficos impressionantes e uma jogabilidade envolvente, cada nível exige habilidade e estratégia para superar os desafios, derrotar os adversários e alcançar a glória em um ambiente de gelo e neve.",

        "criador" => "Anderson Cirino Oliveira Miranda",
        "siteJogo" => "https://construct.net",

        "capa" => "http://localhost/Tech-Academy-2/imagens/banner/coldclimb.png",
        "foto1" => "http://localhost/Tech-Academy-2/imagens/screenshots/coldclimb1.jpg",
        "foto2" => "http://localhost/Tech-Academy-2/imagens/screenshots/coldclimb2.jpg",
        "short" => "coldclimb",

    );


    echo json_encode($game);



?>

