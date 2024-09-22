<?php
    // Générer un numéro de suivi unique
    $numero_suivi = uniqid();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Envoyer l'e-mail avec le numéro de suivi
        $to = "votreadresse@example.com";
        $subject = "Nouveau message avec numéro de suivi";
        $body = "Nom: $nom\n";
        $body .= "E-mail: $email\n";
        $body .= "Message: $message\n";
        $body .= "Numéro de suivi: $numero_suivi\n";
        $headers = "From: $email";

        // Envoyer l'e-mail
        mail($to, $subject, $body, $headers);
        echo "<p>Message envoyé avec succès!</p>";
    }
    ?>