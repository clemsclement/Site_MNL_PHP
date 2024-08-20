<?php
echo renderHeader("formulaire.css");

    function login(){
        if(!isset($_POST['submitLogin'])){
            return;
        }

        if(!isset($_POST['newEmail']) || empty($_POST['newEmail']) || !isset($_POST['newPassword']) || empty($_POST['newPassword'])){
            return 'Veuillez remplir tous les champs.';
        }

        if (!filter_var($_POST['newEmail'],FILTER_VALIDATE_EMAIL)) {
            return "Le mail n'est pas au bon format.";
        }

        $mailLogin = sanitize($_POST['newEmail']);
        $passwordLogin = sanitize($_POST['newPassword']);

        $bdd = connectBDD();

        $data = readUserByMail($bdd, $mailLogin);

        if(!$data){
            return 'Mail et/ou mot de passe incorrect';
        }

        if(!password_verify($passwordLogin, $data['motdepasse'])){
            return 'Mail et/ou mot de passe incorrect';
        }

        $_SESSION['id_utilisateur'] = $data['id_utilisateur'];
        $_SESSION['nomPrenom'] = $data['nomPrenom'];
        $_SESSION['pseudo'] = $data['pseudo'];
        $_SESSION['telephone'] = $data['telephone'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['motdepasse'] = $data['motdepasse'];

        return "Vous êtes bien connecté ". $_SESSION['nomPrenom'] . ".";

    }

echo renderLogin(login());
echo renderFooter();
?>