<?php
$websiteRootDir = '';
$websiteRootPath = $_SERVER["DOCUMENT_ROOT"].$websiteRootDir;
$currentPath = dirname(__FILE__);
$websiteLoadPath = '/php/load.php';
require_once($websiteRootPath.$websiteLoadPath);
$test = true;//isset($_GET["test"]);
get_head();?>
<body class="default"><?php
get_header($currentPath);?>
    <!-- Todo check page path to load only when required. -->
    <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
    <main>
        <section class="tiles module">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tile half-height">
                            <div class="content">
                                <article class="text split figure">
                                    <header>
                                        <span>Déposer une demande d'adhésion</span>
                                        <span class="d-none"></span>
                                    </header>
                                    <main class="flex-column">
                                        <h2 class="h1" style=" align-self: flex-start; ">
                                            Soutenez notre association 
                                            <div class="text-muted">en devenant membre</div>
                                        </h2>
                                        <div class="row">
                                            <div class="col-md-6 mt-2">
                                                <p>La cotisation annuelle est de 12.- CHF pour un membre individuel et de 36.- CHF pour une personne morale. Si vous souhaitez payer par un autre moyen merci de contacter support@fairsocialnet.ch</p>
                                                <h5 class="text-muted small">information importante</h5>
                                                <p class="text-muted small">Votre adresse de messagerie est uniquement utilisée pour vous envoyer notre lettre d'information ainsi que des informations concernant nos activités. Vous pouvez à tout moment utiliser le lien de désabonnement intégré dans chacun de nos mails.</p>
                                            </div>
                                            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center h-100 mt-2">
                                                <script type="text/javascript" src="https://webform.statslive.info/ow/eyJpdiI6Ik1IY0hZV1pIMUVrUHh1aE9SenR2SjJ0YUNuQWtSejlZYzRCalRBYXVNVmM9IiwidmFsdWUiOiJMZG9aaDlkVUFab1FVSlBXZGM0eDVyeEJVYUo4dDBDbnB6UkVZOVZ0QkpVPSIsIm1hYyI6IjQ3OTI5NWI1NDkzNjg3MWI2YjY2ZmEwOTE4YTdjM2Q2ODUxYTNmNzc4YTE5MzcxYmEzNDlhMjE3OGE1M2M4NWYifQ=="></script>
                                            </div>
                                        </div>                                     
                                    </main>
                                    <footer></footer>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div id="soutien" class="tile">
                            <div class="content">
                            <div id="mastodon-vs-twitter" class="media">
                                    <picture>
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-stacks-of-coins-bills-credit-card-and-bitcoin-light-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-stacks-of-coins-bills-credit-card-and-bitcoin-light-768w.webp 768w" type="image/webp">
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-stacks-of-coins-bills-credit-card-and-bitcoin-light-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-stacks-of-coins-bills-credit-card-and-bitcoin-light-768w.png 768w" type="image/png">
                                        <img class="light" src="<?php get_website_url(); ?>img/bonbon-line-stacks-of-coins-bills-credit-card-and-bitcoin-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                    </picture>
                                    <picture>
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-stacks-of-coins-bills-credit-card-and-bitcoin-dark-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-stacks-of-coins-bills-credit-card-and-bitcoin-dark-768w.webp 768w" type="image/webp">
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-stacks-of-coins-bills-credit-card-and-bitcoin-dark-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-stacks-of-coins-bills-credit-card-and-bitcoin-dark-768w.png 768w" type="image/png">
                                        <img class="dark" src="<?php get_website_url(); ?>img/illustration-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                    </picture>
                                </div>
                                <article class="text">
                                    <header>
                                        <span>Soutenez-nous</span>
                                    </header>
                                    <main>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="text-muted">Les personnes qui contribuent aux bien communs ont besoin de votre soutien. Construire des logiciels libres, diffuser les savoirs libres, ces choses prennent du temps et coûtent de l’argent, non seulement pour effectuer le travail initial, mais aussi pour le maintenir dans le temps.</p>
                                            </div>
                                            <div class="col-lg-6">

                                            </div>
                                        </div>
                                    </main>
                                </article>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="tile">
                            <div class="content">
                                <div class="media">
                                </div>
                                <article class="text">
                                    <header>
                                        <span>Twint</span>
                                    </header>
                                    <main>
                                        <img src="<?php get_website_url(); ?>img/twint-qr.png" class="mb-3 w-100" alt="">
                                    </main>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="tile">
                            <div class="content">
                                <div class="media">
                                </div>
                                <article class="text">
                                    <header>
                                        <span>Virement banquaire</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">Envoyez votre donation directement sur le compte en banque de l’association</p> <p class="text-muted small">IBAN: CH9800766000103126001</p>
                                        <div class="btn-fsn-wrapper">
                                            <a href="<?php get_website_url(); ?>downloads/Facture%20QR%20don.pdf" class="btn btn-fsn my-2 mx-2">Don libre</a>
                                        </div>
                                        <div class="btn-fsn-wrapper">
                                            <a href="<?php get_website_url(); ?>downloads/Facture%20QR%20cotisation.pdf" class="btn btn-fsn my-2 mx-2">Cotisation</a>
                                        </div>
                                    </main>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tile">
                            <div class="content">
                                <article class="text">
                                    <header>
                                        <span>PayPal</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">PayPal est un service de paiement en ligne qui permet de recevoir des paiements de manière simplifiée. <div class="d-none">Pour donner cliquez sur le bouton ci-dessous.</div></p>
                                        <div class="btn-fsn-wrapper">
                                            <a href="https://www.paypal.com/donate/?hosted_button_id=J3KFBAWYQ99XA" class="btn btn-fsn my-2 mx-2">Don libre</a>
                                        </div>
                                    </main>
                                </article>
                            </div>
                        </div>
                    </div>
                    <!-- Kept here just in case. -->
                    <div class="col-lg-4 d-none">
                        <div class="tile">
                            <div class="content">
                                <div class="media">
                                </div>
                                <article class="text">
                                    <header>
                                        <span>Liberapay</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">Liberapay est conçu pour fournir un revenu de base stable aux créateurs, leur permettant de continuer à travailler sur leurs projets qui sont bénéfiques pour tout le monde. <div class="d-none">Prêt à contribuer ?</div></p>
                                        <div class="btn-fsn-wrapper">
                                            <a href="https://liberapay.com/Tursiops" class="btn btn-fsn my-2 mx-2">Don avec Liberapay</a>
                                        </div>
                                    </main>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><?php
    get_footer();?>
    <script>
        $(function () {
            let rand = Math.floor(Math.random() * 100);
            $('input[name="password"]').hide().val();
        });
    </script>
</body>
</html>