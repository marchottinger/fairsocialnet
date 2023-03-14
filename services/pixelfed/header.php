<header><?php
    get_progressbar();
    get_menu();?>
    <div class="aside features container">
        <div class="row">
            <div class="col-12 offset-lg-4 col-lg-12 illustration aside">
                <picture>
                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-airl-winks-and-takes-a-selfie-in-the-mirror-light-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-airl-winks-and-takes-a-selfie-in-the-mirror-light-768w.webp 768w" type="image/webp">
                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-airl-winks-and-takes-a-selfie-in-the-mirror-light-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-airl-winks-and-takes-a-selfie-in-the-mirror-light-768w.png 768w" type="image/png">
                    <img class="parallax light" style="min-height: 480px; height: 36vw; max-height: 680px" src="<?php get_website_url(); ?>img/bonbon-line-airl-winks-and-takes-a-selfie-in-the-mirror-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                </picture>
                <picture>
                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-airl-winks-and-takes-a-selfie-in-the-mirror-dark-1024w.webp 1024w, <?php get_website_url(); ?>img/bonbon-line-airl-winks-and-takes-a-selfie-in-the-mirror-dark-768w.webp 768w" type="image/webp">
                    <source srcset="<?php get_website_url(); ?>img/bonbon-line-airl-winks-and-takes-a-selfie-in-the-mirror-dark-1024w.png 1024w, <?php get_website_url(); ?>img/bonbon-line-airl-winks-and-takes-a-selfie-in-the-mirror-dark-768w.png 768w" type="image/png">
                    <img class="parallax dark" style="min-height: 480px; height: 36vw; max-height: 800px" src="<?php get_website_url(); ?>img/bonbon-line-airl-winks-and-takes-a-selfie-in-the-mirror-light.png" width="1024" height="768" alt="Illustration présentant une fenêtre de programme informatique et des mains collaborant à la construction d'un univers composé de formes géométriques et de composants d'interface.">
                </picture>
            </div>
            <div class="col-12 col-lg-8 main-title">
                <h1>Pixelfed</h1>
                <p class="text-muted">Partage de photos</p>
                <p class="lead">PixelFed est LE réseau social libre et fédéré de partage d'images. Excellente alternative à Instagram, il respecte votre vie privée en fonctionnant de manière décentralisée, sans publicité, et sans tracker.</p>
                <div class="btn-fsn-wrapper">
                    <a href="<?php get_website_url(); ?>association/devenir-membre/#soutien" class="btn btn-fsn my-2 mx-2">Soutenez le futur pixelfed.ch</a>
                </div>
            </div>
        </div>
    </div>
</header>