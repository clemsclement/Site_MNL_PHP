<?php
function renderLogin(){
    ob_start();
?>

<main>
    <h2>Ici c'est le Login</h2>
    <p>Vous n'avez pas de compte ? Inscrivez-vous !</p>
    <button><a href="/Site_MNL_PHP/inscription">Inscription</a></button>
</main>

<?php
    return ob_get_clean();
}
?>