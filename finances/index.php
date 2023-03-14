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
    <section id="features" class="tiles module">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tile ratio ratio-1x1">
                        <div class="content">
                            <div class="media">
                            </div>
                            <article class="text default">
                                <header>
                                    <span>Les noms de domaine</span>
                                </header>
                                <main class="flex-column">
                                    <h2 class="h1">15.- / année <div class="text-muted">par domaine</div></h2>
                                    <p class="text-muted">Un nom de domaine est ce qui est utilisé quand vous joignez le service, comme tooting.ch ou peertube.ch, chaque nom a un coût annuel.</p>
                                    <p class="text-muted">Nous gérons les domaines suivants :
                                        <ul>
                                            <li>tooting.ch</li>
                                            <li>peertube.ch</li>
                                            <li>pixelfed.ch</li>
                                            <li>webconf.ch</li>
                                            <li>mobilisons.ch</li>
                                            <li>fairsocialnet.ch</li>
                                        </ul>
                                    </p>
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
                                    <span>Les serveurs</span>
                                </header>
                                <main>
                                    <h2 class="h1">100.- / mois <div class="text-muted">en serveurs</div></h2>
                                    <p class="text-muted">Nous louons plusieurs serveurs virtuels sur une machine physique auprès de SwissNeutralNet avec un coût en fonction de la capacité et du nombre des serveurs virtuels. Le coût peut fluctuer en fonction des serveurs déployés et des capacités requises.</p>
                                </main>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 d-none">
                    <div class="tile half-height">
                        <div class="content">
                            <div class="media">
                            </div>
                            <article id="donate" class="text split figure">
                                <header>
                                    <span>Chaque don compte</span>
                                </header>
                                <main>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="figure">
                                                <span class="key-figure">10.-</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="figure">
                                                <span class="key-figure">20.-&nbsp;?</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-none">
                                        <div class="col-6">
                                            <p class="text-muted">Chaque don nous permet de déployer de nouveaux services éthiques, vous êtes la seule source de financement car nous ne sommes pas sponsorisés.</p>
                                            
                                            <p>IBAN CH98 0076 6000 1031 2600 1 - Banque Cantonale Neuchâteloise - SWIFT BCNNCH22, clearing 766</p>
                                        </div>
                                    </div>
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
                                    <span>Site web et e-mails</span>
                                </header>
                                <main>
					<p>0.- / année (offert)</p>
                                    <p class="text-muted">Cette prestation nous est offerte annuellement par la société genevoise Infomaniak que nous remercions chaleureusement pour son service professionnel.</p>
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
                                    <span>Sauvegardes</span>
                                </header>
                                <main>
					<p>Environ 100.- / année</p>
                                    <p class="text-muted">Le coût des sauvegardes correspond à un ordinateur faible puissance tournant chez un·e de nos membres avec un gros disque dur.</p>
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
                                    <span>Logiciels libres</span>
                                </header>
                                <main>
					<p>Si budget</p>
                                    <p class="text-muted">Les logiciels libres (open source) demandent du temps à être développés, si nous le pouvons, nous ferons des dons aux équipes de développement.</p>
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
                                    <span>Locaux de réunion</span>
                                </header>
                                <main>
                                    <h2 class="h1">50.- par réunion <div class="text-muted">à Lausanne</div></h2>
                                    <p class="text-muted">Obtenir des locaux de réunion plusieurs fois par année a un coût, notamment dans une ville centrale en Suisse romande.</p>
                                    <p class="text-muted">En moyenne 3 fois par année pour les Assemblées Générales.</p>
                                    <div class="btn-fsn-wrapper">
                                        <a href="https://tooting.ch/" class="btn btn-fsn my-2 mx-2">Découvrez nos réunions</a>
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
                                    <h2 class="h1">Manifestations <div class="text-muted">et publicité</div></h2>
                                    <p class="text-muted">Bien que nous soyons économes, il y a selon les manifestations des coûts de participation afin de rendre visible nos actions.</p>
                                    <p class="text-muted">Montant en fonction des manifestations.</p>
                                    <div class="btn-fsn-wrapper">
                                        <a href="<?php get_website_url(); ?>association/a-propos/" class="btn btn-fsn my-2 mx-2">Découvrez les événements</a>
                                    </div>
                                </main>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <p class="d-none"></p>
    </main><?php
    get_footer();?>
</body>
</html>