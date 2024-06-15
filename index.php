<?php
if(isset($_POST['envoyer'])){
    $message = "Voici votre code : joyce033";
    $destinataire = "carineteoi@gmail.com";
    $sujet = "Code de vérification";

    $headers = "From: carineteoi@gmail.com\r\n";
    $headers .= "Reply-To: carineteoi@gmail.com\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    mail($destinataire, $sujet, $message, $headers);
    
    echo "Email envoyé avec succès!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Envoi d'email</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="envoyer">Envoyer l'email</button>
    </form>
</body>
</html>
