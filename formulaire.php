<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = sanitize_input($_POST['email']);
    $message = sanitize_input($_POST['message']);

    // Adresse email de destination
    $to = "lucas.dequinze@outlook.com";  // Remplace par ton adresse email

    // Sujet de l'email
    $subject = "Message depuis le formulaire de contact";

    // Corps du message
    $body = "Vous avez reçu un message de $email :\n\n$message";

    // Utilisation de PHPMailer pour envoyer l'email
    $mail = new PHPMailer(true);

    try {
        // Paramètres du serveur SMTP
        // Looking to send emails in production? Check out our Email API/SMTP product!
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '282c636666fd8a';
        $mail->Password = '80f43dfdac3d51';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Activer STARTTLS
        $mail->Port = 587; // Port SMTP pour STARTTLS

        // Destinataire
        $mail->setFrom($to, 'Formulaire de contact');
        $mail->addAddress($to, 'Lucas Dequinze');  // L'adresse à laquelle envoyer le mail

        // Contenu de l'email
        $mail->isHTML(false);  // Utiliser le format texte
        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->SMTPDebug = 0;  // Niveau de débogage

        // Envoyer l'email
        $mail->send();
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Message Envoyé</title>
            <link rel="stylesheet" href="/style/style2.css">
        </head>

        <body>
            <div class="messages">
                <h1>Vôtre message à bien été envoyé</h1>
                <p>je vous recontacterai dans les plus bref délai</p>
            </div>
            </main>
        </body>

        </html>
<?php
    } catch (Exception $e) {
        echo "<p>Message non envoyé. Erreur : {$mail->ErrorInfo}</p>";
    }
}

// Fonction pour nettoyer les données d'entrée et éviter les injections
function sanitize_input($data)
{
    $data = trim($data);  // Supprimer les espaces inutiles
    $data = stripslashes($data);  // Supprimer les antislashs
    $data = htmlspecialchars($data);  // Convertir les caractères spéciaux en entités HTML
    return $data;
}
