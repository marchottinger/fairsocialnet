<header><?php
    get_progressbar();
    get_menu(); ?>
    <div class="features container text-center">
        <div class="row">
            <div class="col-12 illustration">
                <picture>
                    <source srcset="img/illustration-light-1024w.webp 1024w, img/illustration-light-768w.webp 768w" type="image/webp">
                    <source srcset="img/illustration-light-1024w.png 1024w, img/illustration-light-768w.png 768w" type="image/png">
                    <img class="parallax light ratio ratio-4x3" src="img/illustration-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                </picture>
                <picture>
                    <source srcset="img/illustration-dark-1024w.webp 1024w, img/illustration-dark-768w.webp 768w" type="image/webp">
                    <source srcset="img/illustration-dark-1024w.png 1024w, img/illustration-dark-768w.png 768w" type="image/png">
                    <img class="parallax dark ratio ratio-4x3" src="img/illustration-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                </picture>
            </div>
            <div class="col-12 mx-auto mb-2 main-title">
                <h1>Sérénité, confiance, sécurité</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto my-lg-5">
                <p class="lead text-center text-muted text-neg">Nous créons de l'Internet éthique et sans publicité, avec un haut niveau d'exigences pour votre vie privée. FairSocialNet œuvre depuis 2017 pour fournir des services en ligne de qualité, hébergés en Suisse Romande et gérés de manière associative.</p>
            </div>
        </div>
        <div class="row">
            <div class="btn-fsn-wrapper justify-content-center w-100">
                <div class="btn-fsn-wrapper">
                    <a href="https://fairsocialnet.ch/association/devenir-membre/#soutien" class="mx-3 mt-3 btn btn-fsn">Nous soutenir par un don</a>
                </div>
                <div class="btn-fsn-wrapper flex-column">
                    <a href="https://fairsocialnet.ch/association/devenir-membre/" class="mx-3 mt-3 btn btn-fsn">Participer à nos actions</a>
                    <span class="text-muted info mt-1 mx-auto">Adhérer à l'association</span>
                </div>
            </div>
            <div class="col d-flex justify-content-center support-us d-none">
                <a href="<?php get_website_url(); ?>association/devenir-membre/#soutien" class="btn btn-fsn my-2 mx-2">Nous soutenir par un don</a>
                <a href="<?php get_website_url(); ?>association/devenir-membre/" class="btn btn-fsn my-2 mx-2">Participer à nos actions</a>
            </div>
        </div>
    </div>
</header>