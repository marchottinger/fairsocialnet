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
                                        <h2 class="h1">Sur le canapé <div class="text-muted">ou en route</div></h2>
                                        <p class="text-muted">Peertube.ch est hébergé en Suisse par notre association. Vos vidéos sont hébergées localement, mais peuvent atteindre une large audience si vous souhaitez les rendre publiques et accessibles à tous les utilisateurs de peertube.</p>
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
                                        <h2 class="h1">Voir et revoir<div class="text-muted">sans remords</div></h2>
                                        <p class="text-muted">Le nombre de visionnages et les interactions entre utilisateurs ne sont pas analysées pour imposer un ordre d'importance des vidéos (suggestions). Visionner des vidéos participe activement à leur succès grâce à la diffusion en pair-à-pair.</p>
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
                                                <h3>Des valeurs qui<br>vous rassemblent<br><span class="text-muted"></span></h3>
                                            </div>
                                        </div>
                                        <div class="col pr-2">
                                            <div class="figure">
                                                <span class="key-figure">80'000</span>
                                                <p class="text-muted">Un nombre conséquent d'utilisateurs visitent chaque mois une instance PeerTube un peu partout sur la planète.</p>
                                            </div>
                                        </div>
                                    </main>
                                    <footer></footer>
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
                                            <div class="figure">
                                                <span class="key-figure small">2264</span>
                                                <p class="text-muted">Utilisateurs de peertube.ch</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="figure">
                                                <span class="key-figure small">192</span>
                                                <p class="text-muted">Vidéos en ligne</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="figure">
                                                <span class="key-figure small">2133</span>
                                                <p class="text-muted">Vues</p>
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
                                        <span>Honnête</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">Aucun algorithme n'est à l'œuvre pour influencer les utilisateurs à augmenter ou baisser l'interêt des vidéos. Les vidéos virales ne colonisent pas votre page d'accueil en faisant fi de vos centres d'interêt.</p>
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
                                        <span>Respectueux</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">Peertube n'intégre pas la publicité comme moyen de financement. Vous ne serez pas interrompus dans votre visionnage. Soutenez les réalisateurs et les fournisseurs du service directement.</p>
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
                                        <p class="text-muted">A la différence de Youtube, l’intégralité du code qui sert à faire fonctionner la plateforme est public et transparent, développé par la communauté sous une licence libre (open source).</p>
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
                                        <div class="btn-fsn-wrapper">
                                            <a href="https://peertube.ch/" class="btn btn-fsn my-2 mx-2">Découvrez peertube.ch</a>
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
    </main><?php
get_footer();?>