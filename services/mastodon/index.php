<?php
$websiteRootDir = '';
$websiteRootPath = $_SERVER["DOCUMENT_ROOT"].$websiteRootDir;
$currentPath = dirname(__FILE__);
$websiteLoadPath = '/php/load.php';
require_once($websiteRootPath.$websiteLoadPath);
get_head();?>
<body class="default"><?php
get_header($currentPath);?>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-8 mx-auto">
                        
                    </div>
    
                </div>
            </div>
        </section>
    <section class="tiles module">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tile ratio ratio-1x1">
                        <div class="content">
                            <div id="tooting-ch" class="media">
                                <picture>
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-hr-manager-examines-resume-candidates-for-vacancies-light-1024w.webp 1024w, <?php get_website_url(); ?>img/illustration-light-768w.webp 768w" type="image/webp">
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-hr-manager-examines-resume-candidates-for-vacancies-light-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-hr-manager-examines-resume-candidates-for-vacancies-light-768w.png 768w" type="image/png">
                                    <img class="light ratio ratio-4x3" src="<?php get_website_url(); ?>img/bonbon-line-hr-manager-examines-resume-candidates-for-vacancies-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                </picture>
                                <picture>
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-hr-manager-examines-resume-candidates-for-vacancies-dark-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-hr-manager-examines-resume-candidates-for-vacancies-dark-768w.webp 768w" type="image/webp">
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-hr-manager-examines-resume-candidates-for-vacancies-dark-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-hr-manager-examines-resume-candidates-for-vacancies-dark-768w.png 768w" type="image/png">
                                    <img class="dark ratio ratio-4x3" src="<?php get_website_url(); ?>img/bonbon-line-hr-manager-examines-resume-candidates-for-vacancies-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                </picture>
                            </div>
                            <article class="text default">
                                <header>
                                    <span>Local</span>
                                </header>
                                <main class="flex-column">
                                    <h2 class="h1">Bienvenue <div class="text-muted">parmis nous</div></h2>
                                    <p class="text-muted">www.tooting.ch est hébergée en Suisse par notre association. Des milliers d'autres instances de Mastodon sont disponibles partout sur la planète. Suivez et interagissez librement avec les personnes d'autres instances.</p>
                                </main>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tile ratio ratio-1x1">
                        <div class="content">
                            <div id="secure" class="media">
                                <picture>
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-information-security-light-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-information-security-light-768w.webp 768w" type="image/webp">
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-information-security-light-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-information-security-light-768w.png 768w" type="image/png">
                                    <img class="light" src="<?php get_website_url(); ?>img/bonbon-line-information-security-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                </picture>
                                <picture>
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-information-security-dark-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-information-security-dark-768w.webp 768w" type="image/webp">
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-information-security-dark-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-information-security-dark-768w.png 768w" type="image/png">
                                    <img class="dark" src="<?php get_website_url(); ?>img/illustration-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                </picture>
                            </div>
                            <article class="text">
                                <header>
                                    <span>Sécurisé</span>
                                </header>
                                <main>
                                    <h2 class="h1">Vos données <div class="text-muted">sous contrôle</div></h2>
                                    <p class="text-muted">Vous gérez vos données et votre compte en choisissant une instance sans y être lié à vie — Mastodon n'enchaîne et ne réprime pas ses utilisateurs.</p>
                                </main>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="tile half-height">
                        <div class="content">
                            <div id="mastodon-vs-twitter" class="media">
                                <picture>
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-fast-email-sending-2-light-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-fast-email-sending-2-light-768w.webp 768w" type="image/webp">
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-fast-email-sending-2-light-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-fast-email-sending-2-light-768w.png 768w" type="image/png">
                                    <img class="light" src="<?php get_website_url(); ?>img/bonbon-line-fast-email-sending-2-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                </picture>
                                <picture>
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-fast-email-sending-2-dark-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-fast-email-sending-2-dark-768w.webp 768w" type="image/webp">
                                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-fast-email-sending-2-dark-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-fast-email-sending-2-dark-768w.png 768w" type="image/png">
                                    <img class="dark" src="<?php get_website_url(); ?>img/illustration-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                </picture>
                            </div>
                            <article class="text split figure">
                                <header>
                                    <span>Ouvert et tolérant</span>
                                </header>
                                <main>
                                    <div class="col">
                                        <div class="title">
                                            <h3>La liberté<br>d'expression<br><span class="text-muted">pour tous</span></h3>
                                        </div>
                                    </div>
                                    <div class="col pr-2">
                                        <div class="figure">
                                            <span class="key-figure">500</span>
                                            <p class="text-muted">500 caractères sur Mastodon vs 240 sur Twitter. Vidéos, audio, images, …partagez sans limites.</p>
                                        </div>
                                    </div>
                                </main>
                                <footer></footer>
                            </article>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="tile ratio ratio-1x1">
                        <div class="content">
                            <div class="media">
                            </div>
                            <article class="text">
                                <header>
                                    <span>Décentralisé</span>
                                </header>
                                <main>
                                    <p class="text-muted">La décentralisation. C'est la magie de Mastodon : ne restez pas coincé·e sur l'instance d'une seule et même entreprise comme Twitter, Facbook, et consors. Préférez la liberté!</p>
                                </main>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tile ratio ratio-1x1">
                        <div class="content">
                            <article class="text">
                                <header>
                                    <span>Transparent</span>
                                </header>
                                <main>
                                    <p class="text-muted">Vous avez l'assurance que vos données sont traitées avec respect contrairement au logiciel fermé ou privateur, opaques car la recette de fabrication est gardée secrète.</p>
                                </main>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tile ratio ratio-1x1">
                        <div class="content">
                            <div class="media">
                            </div>
                            <article class="text">
                                <header>
                                    <span>Open Source</span>
                                </header>
                                <main>
                                    <p class="text-muted">Le logiciel serveur qui fait tourner Mastodon est entièrement public et transparent, développé par la communauté sous une licence libre (open source).</p>
                                </main>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tile ratio ratio-1x1">
                        <div class="content">
                            <div class="media">
                            </div>
                            <article class="text">
                                <header>
                                    <span>La communauté</span>
                                </header>
                                <main>
                                    <h2 class="h1">Une communauté <div class="text-muted">humaine</div></h2>
                                    <p class="text-muted">Découvrez une communauté sympathique, bienveillante et prête à vous aider à découvrir une nouvelle façon de voir Internet, pour les humain·es par les humain·es. Vous avez la totale liberté de déménager d'une instance à une autre sans l'accord de quiconque.</p>
                                    <div class="btn-fsn-wrapper d-none">
                                        <a href="https://tooting.ch/" class="btn btn-fsn my-2 mx-2">Découvrez tooting.ch</a>
                                    </div>
                                    <div class="btn-fsn-wrapper">
                                        <a href="https://tooting.ch/invite/r5jMadqb" class="btn btn-fsn my-2 mx-2">S'inscrire sur tooting.ch</a>
                                    </div>
                                </main>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tile ratio ratio-1x1">
                        <div class="content">
                            <div class="media">
                            </div>
                            <article class="text">
                                <header>
                                    <span>FairSocialNet</span>
                                </header>
                                <main>
                                    <h2 class="h1">Une association <div class="text-muted">à vos côtés</div></h2>
                                    <p class="text-muted">FairSocialNet, association à but non lucratif, fait un choix assumé d'utiliser exclusivement des logiciels libres et transparents pour vous fournir des services sûrs et respectueux de leurs utilisateurs</p>
                                    <div class="btn-fsn-wrapper">
                                        <a href="<?php get_website_url(); ?>association/a-propos/" class="btn btn-fsn my-2 mx-2">Découvrez FairSocialNet</a>
                                    </div>
                                </main>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <p class="d-none">
    *Notre instance Mastodon est https://tooting.ch/ hébergée en Suisse et il y en a des milliers d'autres à choix. Vous pouvez suivre et interagir avec les personnes d'autres instances. 
        
    *C'est ça la magie de Mastodon : ce n'est pas centralisé et vous ne restez pas coincé·e sur l'instance d'une seule et même entreprise comme Twitter, Facbook, et consors. VOUS avez la liberté!
    
    *Les avantages de Mastodon par rapport à Twitter Vous choisissez qui gère vos données et votre compte, ici FairSocialNet, association à but non lucratif.
    
    *Une communauté sympathique, bienveillante et prête à vous aider à découvrir une nouvelle façon de voir Internet, pour les humain·es par les humain·es. Vous avez la totale liberté de déménager d'une instance à une autre sans l'accord de quiconque, cela fait partie de Mastodon.
    
    *Des messages plus complets, grâce aux 500 caractères contre 240 pour Twitter. 
    
    *Le logiciel serveur qui fait tourner Mastodon est entièrement public et transparent, développé par la communauté sous une licence libre (open source). Cela assure que vos données sont traitées avec respect contrairement au logiciel fermé ou privateur, dont nous n'avons aucune idée de ce qu'il fait réellement car la recette de fabrication est gardée secrète.
    
    *FairSocialNet fait un choix assumé d'utiliser exclusivement des logiciels libres et transparents pour vous fournir des services sûrs et respectueux de leurs utilisateurs.
    
    Les désavantages de Mastodon
    Certaines instances peuvent être lentes, mais celle de tooting.ch est sur un serveur bien dimensionné sans virtualisation*.
    
    *Il faut un peu de temps pour remplir sa timeline personnelle, à vous de choisir des comptes à suivre qui vous intéresse, et si besoin écrivez un message pour que l'on vous en propose par rapport à vos centres d'intérêts. </p>
    </main><?php
get_footer();?>