<?php
function renderAccueil(){
    ob_start();
?>

<main>
    <h2>Ici c'est l'accueil !</h2>
</main>

<?php
    return ob_get_clean();
}
?>