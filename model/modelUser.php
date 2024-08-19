<?php
function readUserByPseudo($bdd, $pseudo){
    try{
        //Vérification de la disponibilité du pseudo
        $req = $bdd -> prepare('SELECT id_utilisateurs, nomPrenom, pseudo, telephone, email, motdepasse FROM utilisateurs WHERE pseudo = ?');

        $req -> bindParam(1, $pseudo, PDO::PARAM_STR);

        $req -> execute();

        return $req -> fetchAll(PDO::FETCH_ASSOC);
    }catch(EXCEPTION $error){
        return $error -> getMessage();
    }
}

function readUserByMail($bdd, $mail){
    try{
        //Vérification de la disponibilité du mail
        $req = $bdd -> prepare('SELECT id_utilisateurs, nomPrenom, pseudo, telephone, email, motdepasse FROM utilisateurs WHERE email = ?');

        $req -> bindParam(1, $mail, PDO::PARAM_STR);

        $req -> execute();

        return $req -> fetchAll(PDO::FETCH_ASSOC);
    }catch(EXCEPTION $error){
        return $error -> getMessage();
    }
}

function readUserByTel($bdd, $tel){
    try{
        //Vérification de la disponibilité du téléphone
        $req = $bdd -> prepare('SELECT id_utilisateurs, nomPrenom, pseudo, telephone, email, motdepasse FROM utilisateurs WHERE telephone = ?');

        $req -> bindParam(1, $tel, PDO::PARAM_STR);

        $req -> execute();

        return $req -> fetchAll(PDO::FETCH_ASSOC);
    }catch(EXCEPTION $error){
        return $error -> getMessage();
    }
}

function addUser($bdd, $nomPrenom, $pseudo, $tel, $email, $password){
    try{
        //Préparation de la requête d'enregistrement
        $req = $bdd -> prepare('INSERT INTO utilisateurs (nomPrenom, pseudo, telephone, email, motdepasse) VALUES (?, ?, ?, ?, ?');

        //Binding
        $req -> bindParam(1, $nomPrenom, PDO::PARAM_STR);
        $req -> bindParam(2, $pseudo, PDO::PARAM_STR);
        $req -> bindParam(3, $tel, PDO::PARAM_STR);
        $req -> bindParam(4, $email, PDO::PARAM_STR);
        $req -> bindParam(5, $password, PDO::PARAM_STR);

        //Exécution de la requête
        if($req -> execute()){
            return true;
        }
    }catch(EXCEPTION $error){
        return $error -> getMessage();
    }
}