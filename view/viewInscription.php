<?php
function renderInscription(){
    ob_start();
?>

<main>
    <h2>Ici c'est l'inscription</h2>
</main>

<?php
    return ob_get_clean();
}
?>
