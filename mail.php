<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if (isset($_POST['message']) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    
        $retour = mail("sergeauxilia@yahoo.com", "Envoi depuis la page Contact", $_POST['message'], "From: webmaster@monsite.fr"
         . "\r\n" . 'Reply-to: ' . $_POST['email']
        );
        if ($retour) {
            echo "<p>Votre message a bien été envoyé.</p>";
        }
    }
    
?>
    
</body>
</html>





