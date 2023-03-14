<nav aria-hidden="true" class="navbar-large d-none d-xl-flex flex-column">
    <div class="bar">
        <a class="navbar-brand d-flex align-items-center" href="<?php get_website_url(); ?>">FairSocialNet<div class="d-none"> 🚧 Peinture fraîche 🚧</div></a>
        <div class="nav-links">
            <ul class="nav nav-tabs main-links" id="tabNav" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link default" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="true">Services</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link default" id="transparence-tab" data-bs-toggle="tab" data-bs-target="#transparence" type="button" role="tab" aria-controls="transparence" aria-selected="false">Transparence</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link default" id="association-tab" data-bs-toggle="tab" data-bs-target="#association" type="button" role="tab" aria-controls="association" aria-selected="false">Association</button>
                </li>
                
            </ul>
            <ul class="d-flex align-items-center m-0">
                <li>
                    <a class="nav-link default" href="<?php get_website_url(); ?>finances/">Finances</a>
                </li>
                <li>
                    <a class="nav-link btn default" href="https://meet.webconf.ch/">Visioconférence rapide</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-wrapper">
        <div class="tab-content" id="tabNavContent">
            <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
                <div class="links-pane size-1">
                    <ul>
                        <li>
                            <a href="<?php get_website_url(); ?>services/peertube/">
                                <span>PeerTube</span>
                                <span>Partage de video</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_website_url(); ?>services/mastodon/">
                                <span>Mastodon</span>
                                <span>Microblogging</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_website_url(); ?>services/pixelfed/">
                                <span>PixelFed</span>
                                <span>Réseau social de photographie</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="links-pane size-1">
                    <ul>
                        <li>
                            <a href="<?php get_website_url(); ?>services/jitsi/">
                                <span>Jitsi Meet</span>
                                <span>Visoconférence</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_website_url(); ?>services/mobilizon/">
                                <span>Mobilizon</span>
                                <span>Partage d'événements</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_website_url(); ?>services/bbb/" class="soon">
                                <span>BigBlueButton</span>
                                <span>Visioconférence avancée</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="links-pane size-2 focus-bg">
                    <picture>
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-friendly-doctor-helping-young-girl-treating-psychology-problem-2-light-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-friendly-doctor-helping-young-girl-treating-psychology-problem-2-light-768w.webp 768w" type="image/webp">
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-friendly-doctor-helping-young-girl-treating-psychology-problem-2-light-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-friendly-doctor-helping-young-girl-treating-psychology-problem-2-light-768w.png 768w" type="image/png">
                        <img class="dark ratio ratio-4x3" src="<?php get_website_url(); ?>img/bonbon-line-friendly-doctor-helping-young-girl-treating-psychology-problem-2-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                    </picture>
                    <picture>
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-friendly-doctor-helping-young-girl-treating-psychology-problem-2-dark-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-friendly-doctor-helping-young-girl-treating-psychology-problem-2-dark-768w.webp 768w" type="image/webp">
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-friendly-doctor-helping-young-girl-treating-psychology-problem-2-dark-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-friendly-doctor-helping-young-girl-treating-psychology-problem-2-dark-768w.png 768w" type="image/png">
                        <img class="light ratio ratio-4x3" src="<?php get_website_url(); ?>img/bonbon-line-friendly-doctor-helping-young-girl-treating-psychology-problem-2-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                    </picture>
                    <a href="<?php get_website_url(); ?>services/a-propos/">
                        <span>À propos de nos services</span>
                        <span>FairSocialNet s'engage pour des services Internet éthiques, sans publicité, fonctionnant de manière transparente avec des logiciels libres exclusivement.</span>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="transparence" role="tabpanel" aria-labelledby="transparence-tab">
                <div class="links-pane size-1">
                    <ul>
                        <li>
                            <a href="<?php get_website_url(); ?>transparence/services/">
                                <span>Services</span>
                                <span>Les services proposés</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_website_url(); ?>transparence/hebergement/">
                                <span>Hébergement</span>
                                <span>Nos solutions d’hébergement</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_website_url(); ?>transparence/os/">
                                <span>Systèmes d’exploitation</span>
                                <span>Les OS utilisés</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="links-pane size-1">
                    <ul>
                        <li>
                            <a href="<?php get_website_url(); ?>transparence/moderation/" class="soon">
                                <span>Team modération</span>
                                <span>Notre équipe modération</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_website_url(); ?>transparence/securite-acces/">
                                <span>Sécurité et accès aux serveurs</span>
                                <span>Connexion et sécurité</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_website_url(); ?>transparence/protection-donnees/" class="soon">
                                <span>Protection des données</span>
                                <span>Mesures de protection mises en œuvre</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="links-pane size-2 focus-bg">
                    <picture>
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-hands-geometric-shapes-on-paper-and-question-marks-light-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-hands-geometric-shapes-on-paper-and-question-marks-light-768w.webp 768w" type="image/webp">
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-hands-geometric-shapes-on-paper-and-question-marks-light-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-hands-geometric-shapes-on-paper-and-question-marks-light-768w.png 768w" type="image/png">
                        <img class="dark ratio ratio-4x3" src="<?php get_website_url(); ?>img/bonbon-line-hands-geometric-shapes-on-paper-and-question-marks-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                    </picture>
                    <picture>
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-hands-geometric-shapes-on-paper-and-question-marks-dark-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-hands-geometric-shapes-on-paper-and-question-marks-dark-768w.webp 768w" type="image/webp">
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-hands-geometric-shapes-on-paper-and-question-marks-dark-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-hands-geometric-shapes-on-paper-and-question-marks-dark-768w.png 768w" type="image/png">
                        <img class="light ratio ratio-4x3" src="<?php get_website_url(); ?>img/bonbon-line-hands-geometric-shapes-on-paper-and-question-marks-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                    </picture>
                    <a href="<?php get_website_url(); ?>transparence/a-propos/">
                        <span>À propos de notre politique de transparence</span>
                        <span>Nous offrons et promouvons des services Internet éthiques, sans publicité et sans traçage. De manière humaine depuis 2018.</span>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="association" role="tabpanel" aria-labelledby="association-tab">
                <div class="links-pane size-1">
                    <ul>
                        <li>
                            <a href="<?php get_website_url(); ?>association/devenir-membre/">
                                <span>Devenir membre</span>
                                <span>Rejoinde l'association</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_website_url(); ?>association/statuts/">
                                <span>Statuts</span>
                                <span>Les statuts</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="links-pane size-1">
                    <ul>
                        <li>
                            <a href="<?php get_website_url(); ?>association/partenaires/" class="soon">
                                <span>Nos partenaires</span>
                                <span>Ils nous font confiance</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php get_website_url(); ?>association/logos-medias/" class="soon">
                                <span>Logos & médias</span>
                                <span>Téléchargement officiel</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="links-pane size-2 focus-bg">
                    <picture>
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-light-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-light-768w.webp 768w" type="image/webp">
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-light-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-light-768w.png 768w" type="image/png">
                        <img class="dark ratio ratio-4x3" src="<?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                    </picture>
                    <picture>
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-dark-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-dark-768w.webp 768w" type="image/webp">
                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-dark-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-dark-768w.png 768w" type="image/png">
                        <img class="light ratio ratio-4x3" src="<?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                    </picture>
                    <a href="<?php get_website_url(); ?>association/a-propos/">
                        <span>À propos de notre association</span>
                        <span>Nous proposons des outils sociaux respectant la vie privée numérique et encourageons une meilleure hygiène informatique en accompagnant nos utilisateurs.</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-dark navbar-expand-xl d-block d-xl-none p-0">
    <div class="container-fluid align-items-center h-100 m-0 p-0">
        <div class="bar">
            <a class="navbar-brand d-flex align-items-center" href="<?php get_website_url(); ?>">FairSocialNet</a>
            <button class="navbar-toggler d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#burger-menu" aria-controls="burger-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse-wrapper px-4">
            <div class="collapse navbar-collapse px-3" id="burger-menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="services-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="services-dropdown">
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>services/peertube/">PeerTube</a></li>
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>services/mastodon/">Mastodon</a></li>
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>services/pixelfed/">PixelFed</a></li>
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>services/jitsi/">Jitsi Meet</a></li>
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>services/mobilizon/">Mobilizon</a></li>
                            <li><a class="dropdown-item soon" href="<?php get_website_url(); ?>services/bbb/">BigBlueButton</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">À propos de nos services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="transparence-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Transparence
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="transparence-dropdown">
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>transparence/services/">Services</a></li>
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>transparence/hebergement">Hébergement</a></li>
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>transparence/os/">Systèmes d'exploitation</a></li>
                            <li><a class="dropdown-item soon" href="<?php get_website_url(); ?>transparence/moderation/">Team modération</a></li>
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>transparence/securite-acces/">Sécurité et accès aux serveurs</a></li>
                            <li><a class="dropdown-item soon" href="<?php get_website_url(); ?>transparence/protection-donnees/">Protection des données</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>transparence/a-propos/">A propos de notre politique de transparence</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="association-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Association
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="association-dropdown">
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>association/devenir-membre/">Devenir membre</a></li>
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>association/statuts/">Statuts</a></li>
                            <li><a class="dropdown-item soon" href="<?php get_website_url(); ?>association/partenaires/">Nos partenaires</a></li>
                            <li><a class="dropdown-item soon" href="<?php get_website_url(); ?>association/logos-medias/">Logos & medias</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php get_website_url(); ?>association/a-propos/">A propos de notre association</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php get_website_url(); ?>finances/">Finances</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php get_website_url(); ?>visioconference-rapide/">Visioconférence rapide</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>