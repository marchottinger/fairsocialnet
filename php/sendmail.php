<?php 
$subscriber_email = $_POST["email"];
$subscriber_last_name = $_POST["last-name"];
$subscriber_first_name = $_POST["first-name"];
$subscriber_address = $_POST["address"];

$subscription_to_email = "info@fairsocialnet.ch";
$subscription_subject = "Nouvelle demande d'adhésion";
$subscription_body = "Email: " . $subscriber_email . "\nNom: " . $subscriber_last_name . ", Prénom: " .  $subscriber_first_name . "\n" . "Adresse: " . $subscriber_address;

 
if ( mail($subscription_to_email, $subscription_subject, $subscription_body)) {
    echo("L'inscription a bien été envoyée. Merci pour votre confiance !");
} else {
    echo("Erreur d'envoi.");
}
?>