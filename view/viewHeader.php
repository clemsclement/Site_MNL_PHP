<?php
function renderHeader(){
    ob_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marinade et Limonade</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Space+Grotesk:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
     <script src="./script/script.js" defer></script>

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/Site_MNL_PHP">ACCUEIL</a></li>
                <li><a href="/Site_MNL_PHP/lacarte">LA CARTE</a></li>
                <li><a href="/Site_MNL_PHP/apropos">À PROPOS</a></li>
                <li><img src="./images/logo.jpg" alt="Logo du Restaurant Marinade et Limonade"></li>
                <li><a href="/Site_MNL_PHP/lesRecettes">RECETTE</a></li>
                <li><a href="/Site_MNL_PHP/contact">CONTACT</a></li>
                <li class="iconeNavBar">
                    <a href="/Site_MNL_PHP/panier"><img src="./images/panier.png" alt="IcôneHeader Panier"></a>
                    <a href="/Site_MNL_PHP/login"><img src="./images/connexion.png" alt="IcôneHeader Login"></a>
</li>
            </ul>
        </nav>
    </header>

<?php
    return ob_get_clean();
}
?>