<?php
function renderApropos(){
        ob_start();
?>

<main>
    <h2>Ici c'est A propos !</h2>
</main>

<?php
    return ob_get_clean();
}
?>