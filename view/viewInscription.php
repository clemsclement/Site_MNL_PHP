<?php
function renderInscription($message = ""){
    ob_start();
?>

<main>
    <section class="enTete">
        <div class="contenu">
            <h1>Inscription</h1>
            <div class="formulaire">
                <form action="" method="POST">
                    <div class="nomMail">
                        <div class="formNom">
                            <label for="newName">Nom et Prénom :</label>
                            <input type="text" id="nomPrenom" name="newName">
                        </div>
                        <div class="formMail">
                            <label for="newPseudo">Votre Pseudo :</label>
                            <input type="text" id="pseudo" name="newPseudo">
                        </div>
                    </div>
                    <div class="nomMail">
                        <div class="formNom">
                            <label for="tel">Numéro de Téléphone :</label>
                            <input type="tel" id="tel" name="newTel">
                        </div>
                        <div class="formMail">
                            <label for="newmail">Votre Mail :</label>
                            <input type="email" id="newmail" name="newEmail">
                        </div>
                    </div>
                    <div class="nomMail">
                        <div class="formNom">
                            <label for="newPassword">Entrez un Mot de Passe :</label>
                            <input type="password" id="newPassword" name="newPassword">
                        </div>
                        <div class="formMail">
                            <label for="confirmPassword">Confirmez le Mot de Passe :</label>
                            <input type="password" id="confirmPassword" name="confirmPassword">
                        </div>
                    </div>
                    <input type="submit" name="submitRegister" value="Inscription">
                    <div class="connexion">
                        <p>Déjà un compte ?</p>
                        <button><a href="/Site_MNL_PHP/login">Connexion</a></button>    
                    </div>
                </form>    
                <h4><?= $message ?></h4>
            </div>
        </div>
    </section>
</main>

<?php
    return ob_get_clean();
}
?>