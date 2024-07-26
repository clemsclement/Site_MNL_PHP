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
    case '/Site_MNL_PHP/' :
        include './view/viewAccueil.php';
        include './controller/accueil.php';
        break;

    // Route pour la carte
    case '/Site_MNL_PHP/lacarte' :
        include './view/viewLacarte.php';
        include './controller/lacarte.php';
        break;

    // Route pour A propos
    case '/Site_MNL_PHP/apropos' :
        include './view/viewApropos.php';
        include './controller/apropos.php';
        break;

    // Route pour les recettes
    case '/Site_MNL_PHP/lesRecettes' :
        include './view/viewRecette.php';
        include './controller/recette.php';
        break;
 
    // Route pour les contacts
    case '/Site_MNL_PHP/contact' :
        include './view/viewContact.php';
        include './controller/contact.php';
        break;

    // Route pour le panier
    case '/Site_MNL_PHP/panier' :
        include './view/viewPanier.php';
        include './controller/panier.php';
        break;

    // Route pour le login
    case '/Site_MNL_PHP/login' :
        include './view/viewLogin.php';
        include './controller/login.php';
        break;
    
    case '/Site_MNL_PHP/inscription' :
        include './view/viewInscription.php';
        include './controller/inscription.php';
        break;

    //route par défaut : 404
    default:
        include './view/view404.php';
        include './controller/404.php';
}
?>