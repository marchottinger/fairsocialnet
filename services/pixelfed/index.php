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
                                <div class="media">
                                </div>
                                <article class="text">
                                    <header>
                                        <span>Puissant</span>
                                    </header>
                                    <main>
                                        <h2 class="h1">Vos images <div class="text-muted">rien que vos images</div></h2>
                                        <p class="text-muted">Ajoutez des filtres, floutez vos photos au contenu sensible, créez des albums.</p>
                                        <p class="text-muted">Laissez libre cours à votre imagination sans arrière-pensée aucune.</p>
                                        <p class="text-muted">Commentez et appréciez les photos des autres utilisateurs et découvrez des profils intéressants de manière aisée.</p>
                                    </main>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="tile ratio ratio-1x1">
                            <div class="content">
                                <div id="pixelfed-vs-instagram" class="media">
                                    <picture>
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-upload-files-to-cloud-storage-on-computer-1-light-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-upload-files-to-cloud-storage-on-computer-1-light-768w.webp 768w" type="image/webp">
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-upload-files-to-cloud-storage-on-computer-1-light-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-upload-files-to-cloud-storage-on-computer-1-light-768w.png 768w" type="image/png">
                                        <img class="light" src="<?php get_website_url(); ?>img/bonbon-line-upload-files-to-cloud-storage-on-computer-1-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                    </picture>
                                    <picture>
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-upload-files-to-cloud-storage-on-computer-1-dark-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-upload-files-to-cloud-storage-on-computer-1-dark-768w.webp 768w" type="image/webp">
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-upload-files-to-cloud-storage-on-computer-1-dark-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-upload-files-to-cloud-storage-on-computer-1-dark-768w.png 768w" type="image/png">
                                        <img class="dark" src="<?php get_website_url(); ?>img/illustration-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                    </picture>
                                    <!-- bonbon-line-upload-files-to-cloud-storage-on-computer-1 -->
                                </div>
                                <article class="text">
                                    <header>
                                        <span>Social</span>
                                    </header>
                                    <main>
                                        <h2 class="h1"><span class="strikethrough">Instagram</span><div class="text-muted">comme vous ne l'avez jamais vu</div></h2>
                                        <p class="text-muted">Importez vos données depuis Instagram et déménagez facilement vers une communauté qui appréciera réellement vos photos.</p>
                                        <p>Un réseau éminemment social, haut en couleurs.</p>
                                    </main>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div id="test-split" class="tile half-height">
                            <div class="content">
                                <div id="pixelfed-diverse" class="media">
                                    <picture>
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-light-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-light-768w.webp 768w" type="image/webp">
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-light-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-light-768w.png 768w" type="image/png">
                                        <img class="light" src="<?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                    </picture>
                                    <picture>
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-dark-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-dark-768w.webp 768w" type="image/webp">
                                        <source srcset="<?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-dark-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-scientist-studying-the-galaxy-through-a-telescope-dark-768w.png 768w" type="image/png">
                                        <img class="dark" src="<?php get_website_url(); ?>img/illustration-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                                    </picture>
                                    <!-- bonbon-line-scientist-studying-the-galaxy-through-a-telescope -->
                                </div>
                                <article class="text split figure">
                                    <header>
                                        <span>Diversifié</span>
                                    </header>
                                    <main>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="figure">
                                                    <span class="key-figure">100k</span>
                                                    <p class="text-muted">Utilisateurs et utilisatrices. <a href="https://fedidb.org/software/pixelfed" class="btn btn-fsn btn-info btn-inline my-2 mx-2">i</a></p>
                                                        
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="figure">
                                                    <span class="key-figure">276</span>
                                                    <p class="text-muted">Le nombre d'instance Pixelfed actives sur le web.</p>
                                                </div>
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
                                        <span>Sur-mesure</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">En plus de reprendre les fonctionnalités d'Instagram, le fonctionnement de PixelFed permet de joindre une instance qui convient à vos centres d'interêt.</p>
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
                                        <span>Décentralisé</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">Chaque instance peut suivre une ou plusieurs autres instances PixelFed afin de permettre à leurs membres respectifs d'interagir. Vous pouvez créer votre propre instance également.</p>
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
                                        <span>Fédéré</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">PixelFed utilise le protocole ActivityPub et peut interagir avec d'autres logiciels qui font partie du Fediverse, comme Mastodon ou PeerTube par exemple.</p>
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
                                            <a href="<?php get_website_url(); ?>association/devenir-membre/#soutien" class="btn btn-fsn my-2 mx-2">Soutenez le futur pixelfed.ch</a>
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