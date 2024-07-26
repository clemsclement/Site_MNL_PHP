<?php
// J'importe les ressources communes à tous les controllers

// J'active la session
session_start();

// J'inclus mes variables d'environnement
include './env.php';

// J'inclus mes view communes à mes controller
include './view/viewHeader.php';
include './view/viewFooter.php';

// Je récupère les informations de la requête (l'URL) et j'isole le path (la partie après le nom de domaine dans l'URL)
$url = parse_url($_SERVER['REQUEST_URI']);

// Je teste l'URL pour connaitre la route, ou retourner la racine
$path = isset($url['path']) ? $url['path'] : '/';

// Je mets en place le routeur
switch($path){
    // Route pour l'accueil
    case '/' :
        include './controller/accueil.php';
        break;

    //route par défaut : 404
    default:
        include './view/view404.php';
        include './controller/404.php';
}
?>