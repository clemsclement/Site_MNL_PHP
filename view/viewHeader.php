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
    <link rel="stylesheet" href="../Site_MNL_PHP/css/style.css">

</head>
<body>
    <header>
        <nav>
            <ul>
                <li>ACCUEIL</li>
                <li>LA CARTE</li>
                <li>À PROPOS</li>
                <li><img src="" alt="Logo du Restaurant"></li>
                <li>RECETTE</li>
                <li>CONTACT</li>
                <div class="iconeNavBar">
                    <a href=""><img src="" alt="Icône Panier"></a>
                    <a href=""><img src="" alt="Icône Login"></a>
                </div>
            </ul>
        </nav>
    </header>

<?php
    return ob_get_clean();
}
?>