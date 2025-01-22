<?php
// Controleer of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang de formuliergegevens
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Jouw e-mailadres
    $to = "kianoleemput07@gmail.com"; // Vervang dit door jouw e-mailadres

    // Onderwerp van de e-mail
    $subject = "Nieuw bericht van $name via het contactformulier";

    // Berichtinhoud
    $email_content = "Naam: $name\n";
    $email_content .= "E-mail: $email\n\n";
    $email_content .= "Bericht:\n$message\n";

    // E-mailheaders
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Verzend de e-mail
    if (mail($to, $subject, $email_content, $headers)) {
        // Succesmelding
        echo "<p>Bedankt, $name! Je bericht is succesvol verzonden.</p>";
        header("Location: ../resource/contact.php");

    } else {
        // Foutmelding
        echo "<p>Er is een fout opgetreden bij het verzenden van je bericht. Probeer het later opnieuw.</p>";
    }
} else {
    // Als het formulier niet is verzonden, stuur de gebruiker terug naar de contactpagina
    header("Location: ../resource/contact.php");
    exit();
}
?>