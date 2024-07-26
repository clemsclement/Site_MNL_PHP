<?php
function renderRecette(){
    ob_start();
?>

<main>
    <h2>Ici c'est les recettes !</h2>
</main> 

<?php
    return ob_get_clean();
}
?>