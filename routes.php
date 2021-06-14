<?php
    // A creer pour chaques pages

    $_pages = [
        'connection' => ['layout' => 'auth', 'data' => ['title' => 'Connection']],
        'inscription' => ['layout' => 'auth', 'data' => ['title' => 'Inscription']],
        'passwordforgotten' => ['layout' => 'auth', 'data' => ['title' => 'Réinitialisation du Password']],
        'accueil' => ['layout' => 'acc','data' => ['title' => 'Le Groupement Banque Assurance Français (GBAF)']],
        'cde' => ['layout' => 'app', 'data' => ['title' => 'CDE']],
        'dsa' => ['layout' => 'app', 'data' => ['title' => 'Dsa_france']],
        'forma' => ['layout' => 'app', 'data' => ['title' => 'Formation&ampCo']],
        'protectp' => ['layout' => 'app', 'data' => ['title' => 'Protectpeople']],
        'comments' => ['layout' => 'comm', 'data' => ['title' => 'Commentaires']],

        'a' => ['layout' => 'app', 'data' => ['title' => 'AAAAAA']],
        'b' => ['layout' => 'app', 'data' => ['title' => 'BBBBBBB']],
    ];

    var_dump($_GET);

    $_controllers = [
        'connection' => 'POST',
        'deconnection' => 'POST',
        'inscription' => 'POST',
        'passwordforgotten' => 'POST',
        'cde' => 'POST',
        'dsa' => 'POST',
        'forma' => 'POST',
        'protectp' => 'POST',
        'comments' => 'POST',
    ];

    $test = 100;


    // Fonction a utiliser simplement pour afficher une page depuis un controller en php
    function includePage($page)
    {
        global $_pages;

        $pagePath = "pages/$page.php";


        if(file_exists($pagePath))
        {
            $layout = $_pages[$page]['layout'];
            $data = $_pages[$page]['data'];

            makePage($layout, $page, $data);
        }
        else
        {
            http_response_code(404);
        }

        die;
    }

    // NE PAS UTILISER

    function includeController($ctrl)
    {
        global $_controllers, $bdd;

        $ctrlPath = "controllers/$ctrl.php";


        if(file_exists($ctrlPath))
        {
            include($ctrlPath);
        }
        else
        {
            http_response_code(404);
        }

        die;
    }

    function makePage($layout, $_page, $_data)
    {
        include("pages/layout/$layout.php");
    }

    function pageExist($page)
    {
        global $_pages;

        return isset($_pages[$page]);
    }

    function controllerExist($ctrl)
    {
        global $_controllers;

        return isset($_controllers[$ctrl]);
    }

    //Le routage est un mécanisme par lequel des chemins sont sélectionnés dans un réseau pour acheminer les données d'un expéditeur
    //jusqu à un ou plusieurs destinataires 


