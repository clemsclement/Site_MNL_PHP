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
    <link rel="stylesheet" href="./Site_MNL_PHP/css/style.css">

</head>
<body>
    <header>
        <h1>Test</h1>
        <nav>
            <ul>
                <li><a href="/Site_MNL_PHP">ACCUEIL</a></li>
                <li><a href="/Site_MNL_PHP/lacarte">LA CARTE</a></li>
                <li><a href="/Site_MNL_PHP/apropos">À PROPOS</a></li>
                <li><img src="" alt="Logo du Restaurant Marinade et Limonade"></li>
                <li><a href="/Site_MNL_PHP/lesRecettes">RECETTE</a></li>
                <li><a href="/Site_MNL_PHP/contact">CONTACT</a></li>
                <div class="iconeNavBar">
                    <a href="/Site_MNL_PHP/panier"><img src="" alt="Icône Panier"></a>
                    <a href="/Site_MNL_PHP/login"><img src="" alt="Icône Login"></a>
                </div>
            </ul>
        </nav>
    </header>

<?php
    return ob_get_clean();
}
?>