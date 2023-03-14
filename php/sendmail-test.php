<?php
$honeypot = false;

if (!empty($_REQUEST['password']) && (bool) $_REQUEST['password'] == true) {
    $honeypot = true;

    // log_spambot($_REQUEST);

    # treat as spambot
} else {
    # process as normal
}

$websiteRootDir = '';
$websiteRootPath = $_SERVER["DOCUMENT_ROOT"].$websiteRootDir;
$currentPath = dirname(__FILE__);
$websiteLoadPath = '/php/load.php';
require_once($websiteRootPath.$websiteLoadPath);

$subscriber_email = $_POST["email"];
$subscriber_last_name = $_POST["last-name"];
$subscriber_first_name = $_POST["first-name"];
$subscriber_address = $_POST["address"];

$subscription_to_email = "info@fairsocialnet.ch";//"register@r3mix.ch";
$subscription_subject = "Nouvelle demande d'adhésion";
$subscription_body = "Email: " . $subscriber_email . "\nNom: " . $subscriber_last_name . ", Prénom: " .  $subscriber_first_name . "\n" . "Adresse: " . $subscriber_address;
$subscriber_feedback_body = "Merci pour votre demande d'adhésion, " . $subscriber_first_name . ".\n\nVoici les informations enregistrées: \n" . $subscription_body . "\n\n" . "Nous traitons les demandes d'adhésion avec un délai de 2 semaines (10 jours ouvrés).\nN'hésitez pas à nous contacter si vous n'avez pas de nouvelles de notre part dans le cas ou l'attente excéderait cette durée maximum.\n\nVotre équipe de FairSocialNet.";

$successFSN = mail($subscription_to_email, $subscription_subject, $subscription_body);
$successSub = mail($subscriber_email, $subscription_subject, $subscriber_feedback_body);
$success = $successFSN && $successSub;
get_head(); ?>
<body class="default">
    <header><?php
        get_progressbar();
        get_menu();?>
        <div class="aside features container">
            <div class="row">
                <div class="col-12 offset-lg-6 col-lg-8 illustration aside" style="margin-top: -4rem">
                    <picture>
                        <source srcset="<?php get_website_url();?>img/bonbon-line-fast-email-sending-2-light-1024w.webp 1024w, <?php get_website_url();?>img/bonbon-line-fast-email-sending-2-light-768w.webp 768w" type="image/webp">
                        <source srcset="<?php get_website_url();?>img/bonbon-line-fast-email-sending-2-light-1024w.png 1024w, <?php get_website_url();?>img/bonbon-line-fast-email-sending-2-light-768w.png 768w" type="image/png">
                        <img class="parallax light" style="min-height: 380px; height: 30vw; max-height: 480px; " src="<?php get_website_url();?>img/bonbon-line-fast-email-sending-2-light.png" width="1024" height="768" alt="bonbon-line-man-repairs-and-diagnoses-a-laptop présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                    </picture>
                    <picture>
                        <source srcset="<?php get_website_url();?>img/bonbon-line-fast-email-sending-2-dark-1024w.webp 1024w, <?php get_website_url();?>img/bonbon-line-fast-email-sending-2-dark-768w.webp 768w" type="image/webp">
                        <source srcset="<?php get_website_url();?>img/bonbon-line-fast-email-sending-2-dark-1024w.png 1024w, <?php get_website_url();?>img/bonbon-line-fast-email-sending-2-dark-768w.png 768w" type="image/png">
                        <img class="parallax dark" style="min-height: 380px; height: 30vw; max-height: 480px; " src="<?php get_website_url();?>img/bonbon-line-fast-email-sending-2-light.png" width="1024" height="768" alt="bonbon-line-man-repairs-and-diagnoses-a-laptop présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                    </picture>
                </div>
                <div class="col-12 col-lg-8 main-title"><?php
                    if ($honeypot) {?>
                        <div class="d-none"><?php echo $honeypot; ?></div><?php
                    }
                    if ($success) {?>
                        <h1>Attention,<br/>adhésion en orbite&nbsp;!</h1>
                        <p class="lead">Vous allez reçevoir un mail de confirmation automatique dans les prochaines minutes. Nous traiterons votre demande dans les 2 prochaines semaines (10 jours ouvrés).</p><?php
                    } else {?>
                        <h1>Nous avons rencontré un problème d'envoi&nbsp;!</h1>
                        <p class="lead">Veuillez ré-essayer ou nous contacter par mail.</p><?php
                    }?>
                </div>
            </div>
        </div>
    </header>
        <main>
        </main><?php
        get_footer();?>
    </body>
</html>
?>
