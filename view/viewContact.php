<?php
function renderContact(){
    ob_start();
?>

<main>
    <h2>Ici c'est les contacts !</h2>
</main>

<?php
    return ob_get_clean();
}
?>