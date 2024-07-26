<?php 
function renderLacarte(){
    ob_start();
?>

<main>
    <h2>Ici c'est la Carte !</h2>
</main>

<?php
    return ob_get_clean();
}
?>