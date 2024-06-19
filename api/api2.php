<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");


    $membro[1] = array(

        "id" => 1,
        "nome" => "Anderson Cirino Oliveira Miranda",
        "descricao" => "Desenvolvedor de Jogos",
        "funcao" => "Estudante de TADS em Centro Universitário Integrado",

        "foto" => "http://localhost/Tech-Academy-2/imagens/pessoas/anderson.png",

        "instagram" => "https://instagram.com",
        "github" => "https://github.com",
        "linkedin"=> "https://linkedin.com",
    );

    $membro[2] = array(

        "id" => 2,
        "nome" => "Caio Martini Lima",
        "descricao" => "Desenvolvedor de Jogos e Site",
        "funcao" => "Estudante de TADS em Centro Universitário Integrado",

        "foto" => "http://localhost/Tech-Academy-2/imagens/pessoas/caio.png",

        "instagram" => "https://instagram.com/caiomartinni",
        "github" => "https://github.com/caiomartinni",
        "linkedin"=> "https://linkedin.com",
    );

    $membro[3] = array(

        "id" => 3,
        "nome" => "Eduardo Rigobeli Pereira de Souza",
        "descricao" => "Desenvolvedor de Jogos",
        "funcao" => "Estudante de TADS em Centro Universitário Integrado",

        "foto" => "http://localhost/Tech-Academy-2/imagens/pessoas/eduardo.png",

        "instagram" => "https://instagram.com/rigobelii_",
        "github" => "https://github.com",
        "linkedin"=> "https://linkedin.com",
    );

    $membro[4] = array(

        "id" => 4,
        "nome" => "Mariana Franco",
        "descricao" => "Desenvolvedora de Jogos",
        "funcao" => "Estudante de TADS em Centro Universitário Integrado",

        "foto" => "http://localhost/Tech-Academy-2/imagens/pessoas/mariana.png",

        "instagram" => "https://instagram.com/franco_.mari",
        "github" => "https://github.com",
        "linkedin"=> "https://linkedin.com",
    );

    $membro[5] = array(

        "id" => 5,
        "nome" => "Matheus Henrique Nascimento",
        "descricao" => "Desenvolvedor de Jogos",
        "funcao" => "Estudante de TADS em Centro Universitário Integrado",

        "foto" => "http://localhost/Tech-Academy-2/imagens/pessoas/matheus.png",

        "instagram" => "https://instagram.com",
        "github" => "https://github.com",
        "linkedin"=> "https://linkedin.com",
    );

    echo json_encode($membro);



?>

