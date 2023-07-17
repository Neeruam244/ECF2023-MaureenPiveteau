<?php 
    $messages = [];
    $errors = [];

    if (isset($_POST["sendContact"])) {
        if (!isset($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'adresse e-mail n'est pas valide";
        }
        if (!isset($_POST["message"]) || $_POST["message"] == "") {
            $errors[] = "Le message ne doit pas être vide";
        }
        if (!$errors) {
            $to = _APP_EMAIL_;
            $subject = "[Garage V Parrot] Formulaire de contact";
            $emailContent = "Message : <br>".nl2br(htmlentities($_POST["message"]));
            $headers = "From: "._APP_EMAIL_ . "\r\n" .
                        "MIME-Version: 1.0" . "\r\n" .
                        "Content-type: text/html; charset=utf-8";
        
            if(mail($to, $subject, $emailContent, $headers)) {
                $messages[] = "Votre email a bien été envoyé";
    
            } else {
                $errors[] = "Une erreur s'est produite durant l'envoi";
            }
        }

    }

?>