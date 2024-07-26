<?php
function renderPanier(){
    ob_start();
?>

<main>
    <h2>Ici c'est le panier !</h2>
</main>

<?php
    return ob_get_clean();
}
?>