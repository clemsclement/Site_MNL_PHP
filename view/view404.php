<?php
function render404(){
    ob_start();
?>

<main>
    <h1>404 NOT FOUND</h1>
    <p>Veuillez bien renseigner votre chemin</p>
</main>

<?php
    return ob_get_clean();
}
?>