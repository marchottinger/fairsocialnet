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
                    
                <div class="col-lg-4">
                        <div class="tile ratio ratio-1x1">
                            <div class="content">
                                <div class="media">
                                </div>
                                <article class="text">
                                    <header>
                                        <span>Anonyme</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">Pas besoin de compte pour joindre ou initier un appel vidéo ou audio. Cela vous évitera bien des tracas. Installez-vous conmfortablement et commencez à discuter.</p>
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
                                        <span>Privé, sûr et sécurisé</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">Encrypté et non-surveillé. Vos communications sont à l'abri des oreilles baladeuses. Et vous n'êtes pas identifiés par un compte lié à votre adresse mail ou votre numéro de téléphone.</p>
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
                                        <span>Flexible et pratique</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">Utilisez le service en ligne sur meet.jit.si ou l'une des applications mises à disposition ou connectez-vous à un serveur tel que celui geré par FairSocialNet.</p>
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
                                        <span>Puissant</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">Vidéo, partage d'écran et chat avec ou sans mot de passe, streaming et enregistrement du flux, etc… Vous ne manquerez pas de possibilités avec Jitsi Meet.</p>
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
                                        <span>Open Source</span>
                                    </header>
                                    <main>
                                        <p class="text-muted">Pour être sûr de ce que fait Jisti Meet, vous pouvez compter sur la transparence du code Open Source. En effet, au contraire de ses concurrents au code propriétaire, Jitsi Meet est Open Source.</p>
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
                                            <a href="<?php get_website_url(); ?>association/devenir-membre/#soutien" class="btn btn-fsn my-2 mx-2">Soutenez le future pixelfed.ch</a>
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