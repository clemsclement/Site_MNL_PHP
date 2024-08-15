<?php
    echo renderHeader("formulaire.css");
    echo renderContact($message);
    echo renderFooter();

    $message='',

//Adresse mail qui va recevoir le message
$_mail = 'clemsclement@hotmail.fr';

//Vérification du cliquage du bouton "Envoyer"
if(!isset($_POST['envoyer'])){
    return;
}

//Vérification des champs vides
if(!isset($_POST['userName']) || empty($_POST['userName']) || !isset($_POST['userEmail']) || empty($_POST['userEmail']) || !isset($_POST['userMessage']) || empty($_POST['userMessage'])){
    $message = "Veuillez remplir tous les champs.";
    return;
}