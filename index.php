<?php
    include './env.php';
    //session start
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? substr($url['path'], $directoryLenght) : '/';
    /*--------------------------ROUTER -----------------------------*/
    switch($path){
        case 'all':
            include './controller/showUser.php';
            break;
        case 'add':
            include './controller/addUser.php';
            break;
        case '':
            include './view/viewHome.php';
            break;
        default:
            include './view/viewError.php';
            break;
    }
?>