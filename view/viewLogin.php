<?php
function renderLogin($message = ""){
    ob_start();
?>

<main>
    <section class="enTete">
       <div class="contenu">
            <h1>Connexion</h1>
            <div class="formulaire">
                <form action="" method="POST">
                    <div class="nomMail">
                        <div class="formMail">
                            <label for="newmail">Votre Mail :</label>
                            <input type="email" id="newmail" name="newEmail">
                        </div>
                    </div>
                    <div class="nomMail">
                        <div class="formMail">
                            <label for="newPassword">Entrez un Mot de Passe :</label>
                            <input type="password" id="newPassword" name="newPassword">
                        </div>
                    </div>
                    <input type="submit" name="submitLogin" value="Connexion">
                </form>
                <h4><?= $message ?></h4>
            </div>
            <div class="connexion">
                        <p>Pas de compte ?</p>
                        <button><a href="/Site_MNL_PHP/inscription">Inscription</a></button>    
            </div>
        </div>
    </section>
</main>

<?php
    return ob_get_clean();
}
?>
