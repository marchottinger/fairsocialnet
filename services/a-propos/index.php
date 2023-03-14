<?php
$websiteRootDir = '';
$websiteRootPath = $_SERVER["DOCUMENT_ROOT"].$websiteRootDir;
$currentPath = dirname(__FILE__);
$websiteLoadPath = '/php/load.php';
require_once($websiteRootPath.$websiteLoadPath);
get_head();
get_header($currentPath);?>
    <main>
    <section>
            <div class="services container">
                <div class="row my-5">
                    <div class="col-10 mx-auto text-center">
                        <h2>Voici les services que nous proposons</h2>
                    </div>
                </div>
                <div class="services-list row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 py-5">
                    <div class="col">
                        <div class="card h-auto">
                            <div class="logo-wrapper">
                                <img id="peertube-logo" class="service-logo" src="<?php get_website_url(); ?>img/peertube.svg" width="103" height="124" alt="PeerTube">
                            </div>
                            <div class="mt-3 mb-5 text-center">
                                <h3 class="mb-0">PeerTube</h3><p class="mt-0 mb-0">Réseau social de vidéos</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-center flex-column">
                                <div class="btn-fsn-wrapper"><a href="<?php get_website_url(); ?>services/peertube/" type="button" class="mx-auto btn btn-fsn">Découvrir PeerTube</a></div>
                                <span class="info price mt-1 mx-auto">Payant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-auto">
                            <div class="logo-wrapper">
                                <img id="mastodon-logo-dark" class="service-logo mastodon-logo dark" src="<?php get_website_url(); ?>img/mastodon-dark.svg" width="253" height="63" alt="Mastodon">
                                <img id="mastodon-logo-light" class="service-logo mastodon-logo light" src="<?php get_website_url(); ?>img/mastodon-light.svg" width="253" height="63" alt="Mastodon">
                            </div>
                            <div class="mt-3 mb-5 text-center">
                                <h3 class="mb-0">Mastodon</h3><p class="mt-0 mb-0">Les petits messages publics</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-center flex-column">
                                <div class="btn-fsn-wrapper"><a href="<?php get_website_url(); ?>services/mastodon/" type="button" class="mx-auto btn btn-fsn">Découvrir Mastodon</a></div>
                                <span class="info price mt-1 mx-auto">Gratuit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-auto">
                            <div class="logo-wrapper">
                                <img id="pixelfed-logo" class="service-logo pixelfed-logo" src="<?php get_website_url(); ?>img/pixelfed.svg" width="95" height="95" alt="PixelFed">
                            </div>
                            <div class="mt-3 mb-5 text-center">
                                <h3 class="mb-0">PixelFed</h3><p class="mt-0 mb-0">Réseau social de photographie</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-center flex-column">
                                <div class="btn-fsn-wrapper"><a href="<?php get_website_url(); ?>services/pixelfed/" type="button" class="mx-auto btn btn-fsn">Découvrir PixelFed</a></div>
                                <span class="info price mt-1 mx-auto">Gratuit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-auto">
                            <div class="logo-wrapper">
                                <img id="jitsi-logo" class="service-logo jitsi-logo" src="<?php get_website_url(); ?>img/jitsi-light.png" width="170" height="128" alt="Visiconférence Jitsi Meet">
                            </div>
                            <div class="mt-3 mb-5 text-center">
                                <h3 class="mb-0">Jitsi Meet</h3><p class="mt-0 mb-0">Visioconférence simple et efficace</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-center flex-column">
                                <div class="btn-fsn-wrapper"><a href="<?php get_website_url(); ?>services/jitsi/" type="button" class="mx-auto btn btn-fsn">Découvrir Jitsi</a></div>
                                <span class="info price mt-1 mx-auto">Gratuit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-auto">
                            <div class="logo-wrapper">
                                <img id="mobilizon-logo-dark" class="service-logo mobilizon-logo dark" src="<?php get_website_url(); ?>img/mobilizon-dark.svg" width="221" height="42" alt="Événements Mobilizon">
                                <img id="mobilizon-logo-light" class="service-logo mobilizon-logo light" src="<?php get_website_url(); ?>img/mobilizon-light.svg" width="221" height="42" alt="Événements Mobilizon">
                            </div>
                            <div class="mt-3 mb-5 text-center">
                                <h3 class="mb-0">Mobilizon</h3><p class="mt-0 mb-0">Partager vos événements</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-center flex-column">
                                <div class="btn-fsn-wrapper"><a href="<?php get_website_url(); ?>services/mobilizon/" type="button" class="mx-auto btn btn-fsn">Découvrir Mobilizon</a></div>
                                <span class="info price mt-1 mx-auto">Gratuit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-auto">
                            <div class="logo-wrapper">
                                <img id="bbb-logo-dark" class="service-logo bbb-logo dark" src="<?php get_website_url(); ?>img/bbb-dark.svg" width="218" height="48" alt="Big Blue Button">
                                <img id="bbb-logo-light" class="service-logo bbb-logo light" src="<?php get_website_url(); ?>img/bbb-light.svg" width="218" height="48" alt="Big Blue Button">
                            </div>
                            <div class="mt-3 mb-5 text-center">
                                <h3 class="mb-0">Big Blue Button</h3><p class="mt-0 mb-0">La visioconférence avancée</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-center flex-column">
                                <div class="btn-fsn-wrapper"><a href="<?php get_website_url(); ?>services/bbb/" type="button" class="mx-auto btn btn-fsn soon">Découvrir BigBlueButton</a></div>
                                <span class="info price mt-1 mx-auto">Payant</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><?php
get_footer();?>