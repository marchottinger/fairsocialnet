<header><?php
    get_progressbar();
    get_menu(); ?>
    <div class="features container text-center">
        <div class="row">
            <div class="col-12 illustration">
                <picture>
                    <source srcset="<?php get_website_url(); ?>img/illustration-light-1024w.webp 1024w, <?php get_website_url(); ?>img/illustration-light-768w.webp 768w" type="image/webp">
                    <source srcset="<?php get_website_url(); ?>img/illustration-light-1024w.png 1024w, <?php get_website_url(); ?>img/illustration-light-768w.png 768w" type="image/png">
                    <img class="parallax light ratio ratio-4x3" src="<?php get_website_url(); ?>img/illustration-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                </picture>
                <picture>
                    <source srcset="<?php get_website_url(); ?>img/illustration-dark-1024w.webp 1024w, <?php get_website_url(); ?>img/illustration-dark-768w.webp 768w" type="image/webp">
                    <source srcset="<?php get_website_url(); ?>img/illustration-dark-1024w.png 1024w, <?php get_website_url(); ?>img/illustration-dark-768w.png 768w" type="image/png">
                    <img class="parallax dark ratio ratio-4x3" src="<?php get_website_url(); ?>img/illustration-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
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
            <div class="col d-flex justify-content-center support-us">
                <a href="#" class="btn btn-fsn my-2 mx-2">Nous soutenir par un don</a>
                <a href="#" class="btn btn-fsn my-2 mx-2">Participer à nos actions</a>
            </div>
        </div>
    </div>
</header>