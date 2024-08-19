<?php
    
    echo renderHeader("formulaire.css");
 
    function sendMessage() {
        // Adresse mail qui va recevoir le message
        $myMail = 'clemsclement@hotmail.fr';
        
        // Vérification du cliquage du bouton "Envoyer"
        if (!isset($_POST['envoyer'])) {
            return;
        }
        
        // Vérification des champs vides
        if (empty($_POST['userName']) || empty($_POST['userEmail']) || empty($_POST['userMessage'])) {
            return "Veuillez remplir tous les champs.";
        }
        
        // Vérification du format de l'input mail
        if (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
            return "Le mail n'est pas au bon format.";
        }
        
        // Nettoyage des données
        $userName = sanitize($_POST['userName']);
        $userEmail = sanitize($_POST['userEmail']);
        $userMessage = sanitize($_POST['userMessage']);
        
        // Ajoute des sauts de ligne HTML si l'utilisateur en a utilisé
        $userMessage = nl2br($userMessage);
    
        // Préparation des en-têtes
        $headers = "From: " . $userEmail . "\r\n";
        $headers .= "Reply-To: " . $userEmail . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
        // Préparation du sujet et du message
        $subject = "Nouveau message de " . $userName;
        $message = "
            <html>
            <head>
                <title>Nouveau message de contact</title>
            </head>
            <body>
                <h2>Vous avez reçu un nouveau message de " . $userName . " (" . $userEmail . ")</h2>
                <p>" . $userMessage . "</p>
            </body>
            </html>
        ";
    
        // Envoie du mail
        if (mail($myMail, $subject, $message, $headers)) {
            return "<p>Le mail a été envoyé avec succès !</p>";
        } else {
            return "<p>Une erreur s'est produite lors de l'envoi du mail. Veuillez réessayer plus tard.</p>";
        }
    }
    

echo renderContact(sendMessage());
echo renderFooter();