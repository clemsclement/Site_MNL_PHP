<?php
    echo renderHeader("formulaire.css");
    
    // Envoie du formulaire d'inscription
    function registerUser(){
        // Vérification de l'envoie du formulaire
        if(!isset($_POST["submitRegister"])){
            return;
        }

        // Vérification des champs vides
        if(!isset($_POST['newName']) || empty($_POST['newName']) || !isset($_POST['newPseudo']) || empty($_POST['newPseudo']) || !isset($_POST['newTel']) || empty($_POST['newTel']) || !isset($_POST['newEmail']) || empty($_POST['newEmail']) || !isset($_POST['newPassword']) || empty($_POST['newPassword']) || !isset($_POST['confirmPassword']) || empty($_POST['confirmPassword'])){
            return "Veuillez remplir tous les champs.";
        }

        // Vérification du format des données
        if (!filter_var($_POST['newEmail'],FILTER_VALIDATE_EMAIL)) {
            return "Le mail n'est pas au bon format.";
        }

        // Vérification que le mot de passe et sa confirmation sont identiques
        if ($_POST['newPassword'] !== $_POST['confirmPassword']) {
            return "Les mots de passe ne correspondent pas.";
        }

        // Nettoyage des données
        $nameUser = sanitize($_POST['newName']);
        $pseudoUser = sanitize($_POST['newPseudo']);
        $telUser = sanitize($_POST['newTel']);
        $emailUser = sanitize($_POST['newEmail']);
        $passwordUser = sanitize($_POST['newPassword']);
        $confirmPassword = sanitize($_POST['confirmPassword']);

        // Hasher le mot de passe
        $passwordUser = password_hash($passwordUser, PASSWORD_BCRYPT);

        //Connexion à la Base De Donnée
        $bdd = connectBDD();

        //Vérification des doublons
        $dataPseudo = readUserByPseudo($bdd, $pseudoUser);
        var_dump($dataPseudo);
        if($dataPseudo !== false){
            return "Ce pseudo est déjà pris.";
        }

        $dataMail = readUserByMail($bdd, $emailUser);

        if($dataMail !== false){
            return "Cet email est déjà pris.";
        }

        $dataTel = readUserByTel($bdd, $telUser);

        if($dataTel !== false){
            return "Ce téléphone est déjà pris.";
        }

        $data = addUser($bdd, $nameUser, $pseudoUser, $telUser, $emailUser, $passwordUser);

        //Vérification de l'enregistrement de l'utilisateur

        if($data != true){
            return "Erreur d'enregistrement";
        }

        return "Bienvenue sur notre site $nameUser !";   
    }
    
    echo renderInscription(registerUser());
    echo renderFooter();
?>