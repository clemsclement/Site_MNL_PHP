<?php
function renderContact(){
    ob_start();
?>

<main>
    <section class="enTete">
        <div class="contenu">
            <h1>Contact</h1>
            <div class="formulaire">
                <h2>Une Question ?</h2>
                <h2>Une Suggestion ?</h2>
                <h3>Ecrivez-nous !</h3>
                <form action="" method="POST">
                    <div class="nomMail">
                        <div class="formNom">
                            <label for="name">Nom et Prénom :</label>
                            <input type="text" id="name" name="userName">
                        </div>
                        <div class="formMail">
                            <label for="mail">Votre Mail :</label>
                            <input type="email" id="mail" name="userEmail">
                        </div>
                    </div>
                    <label for="message">Votre message :</label>
                    <textarea name="userMessage" id="message"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </section>
</main>

<?php
    return ob_get_clean();
}
?>