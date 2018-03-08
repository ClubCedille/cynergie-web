<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cynergie</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel='shortcut icon' href='http://cedille.etsmtl.ca/favicon.ico' type='image/x-icon' />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/animate.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>

</head>

<body>
    <section class="hero is-success is-fullheight  backgroundHome">
        <div class="hero-head ">
            <nav class="navbar  is-fixed-top  ">
                <div class="container">
                    <div class="navbar-brand ">
                        <a class="navbar-item" href="/">
                            <img src="img/cynergie-logo-white.png"  class="" alt="Logo">
                        </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu ">
                        <div class="navbar-end">
                            <a href="#" class="navbar-item is-active">
                                Projet
                            </a>
                            <a href="#maitrîse" class="navbar-item ">
                                Maitrîse
                            </a>
                            <a href="#technologie" class="navbar-item ">
                                Technologie
                            </a>
                            <a href="#partenaires" class="navbar-item ">
                                Partenaires
                            </a>
                            <a class="navbar-item" href="contact">
                                Contact
                            </a>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined is-small" href="http://cedille.etsmtl.ca/">
                                    <span class="icon">
                                        <i class="far fa-copyright"></i>
                                    </span>
                                    <span>Club cedille</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="hero-body" >

            <div class="container has-text-centered">
                <h1 class="title animated flipInX">
                    Çynergie
                </h1>
                <h2 class="subtitle animated flipInX">
                    Consommation énergétique en temps réel
                
            </div>
            
        </div>
    </section>
    <section id="resumer" class="section">
        <div class="intro column is-8 is-offset-2">
            <div class="content has-text-centered">
                <h3>Çynergie a pour but de fournir une interface de visualisation en temps réel de la consommation des ressources
                    énergétiques de l'École de technologie supérieure(ETS). Cela peut inclure la consommation d'eau, d'électricité,
                    de gas, etc.</h3>
            </div>
        </div>
        <div  class="tile is-ancestor">
            <div class="tile is-4 is-parent">
                <div class="tile is-child box">
                    <div class="content">
                        <p class="title">
                            Temps réel
                        </p>
                        <p class="content center">
                            Recuperer les donnees de la consommation energetique de l Ets en temps reel a partir des controleurs connectes aux reseaux.
                            Ainsi, on peut recuperer les donnes de la consommation electrique ,d eau, et de gas des differents
                            batiement de L'École de technologie supérieure. la recuperation des donnees sera fait de facon
                            efficace pour que celles-ci peuvent etre fiable et donc utiliser par les etudiants ou les professeurs
                            pour de la recherche ou autres .
                            <br>
                            <br>

                        </p>
                        <div id="container"></div>
                    </div>

                </div>
            </div>
            <div class="tile is-4 is-parent">
                <div class="tile is-child box">
                    <p class="title">
                        Graphiques et tableaux
                    </p>
                    <p class="content center">
                        Un premier portail est disponible pour la visualisation des donnees a l aide de graphiques et de tableaux. cette platforme
                        se nomant Grafana est utilise par plusieurs professionnels pour le monitorage de systeme, pour le
                        projet Cynergie elle sera utilise pour afficher des graphiques et des tableaux qui illustre la consommation
                        d energie des differents modules de L'École de technologie supérieure. Pour moment le portail grafana
                        sera accessible avec une authentification unique pour des raisons de securite.
                    </p>
                    <div id="container2"></div>

                </div>
            </div>
            <div class="tile is-4 is-parent">
                <div class="tile is-child box">
                    <p class="title">
                        Portail et API
                    </p>
                    <p class="content center">
                        Un deuxieme portail Cynergie sera implemente pour permettre aux etudiants ou professeurs de telecharger facilement les donnees
                        dynamiquement et les exporter en des fichiers CSV ou JSON ,il peut aussi offrir des infomations suplementaires
                        sur les donnes disponibles. De plus une API sera disponible pour faciliter l acces aux donnees et
                        permettre a l utilisateur de les exploiter quelques soit le logiciel qu il utilise.
                        <br>
                        <br>

                    </p>
                    <div id="container3"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="mongrad">
        <section id="maitrîse" class="section">
            <div class="container ">
                <div class="columns">
                    <div class="column">
                        <div class="content">
                            <h1 class="has-text-white">Projet de maitrîse : </h1>

                            <h3 class="has-text-white">Portée : </h3>
                            <p class="has-text-white">
                                Ce projet concerne la création d’une plateforme permettant de grouper différentes sources de données. Le but est de pouvoir
                                y agréger des données filtrées et fournir des données pouvant subir un post-traitement à
                                la fois pour une diffusion en temps réel que pour permettre un télé- chargement par lots.
                                Il est nécessaire d’identifier les sources de données pour être capable de les stocker en
                                ayant subi un prétraitement afin d’assurer une uniformité des données. Depuis la solution
                                de stockage il doit être possible de les distribuer, brutes ou ayant subi un post-traitement
                                de deux manières différentes. En tant que flux de données en temps réel ou par lots afin
                                d’accéder à des données historiques.*
                            </p>


                            <h3 class="has-text-white">Objectifs : </h3>
                            <p class="has-text-white">
                                Le produit s’adresse à la communauté étudiante dans son ensemble allant des utilisateurs souhaitant consulter les données
                                pour des projets d’exposition des données jusqu’à des équipes de chercheurs souhaitant valider
                                des théories. La plateforme propose une réponse à ce besoin d’uniformiser l’accès aux données
                                en proposant de centraliser un maximum de sources de données différentes et de les distribuer
                                ensuite dans des formats standards et documentés.*
                            </p>
                            <h3 class="has-text-white">Architecture du project Cynergie : </h3>
                            <img src="img/plateform_generic-page-001.jpg">
                            <figcaption class="has-text-white">
                                * Conception d’un portefeuille de projets exploitant les technologies de l’Internet des Objets pour la gestion des bâtiments
                                de l’ÉTS par Gautier COLAJANNI
                            </figcaption>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="backgroundNode">
        <section id="technologie" class="section">
            <div class="container contact ">
                <div class="content ">
                    <h1>Les technologies utilisées : </h1>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <div class="columns">
                <div class="column is-one-fifth">
                </div>
                <div class="column">
                    <a href="https://www.typescriptlang.org/">
                        <img src="img/TypeScript.png" height="200" width="200">
                    </a>
                    <br>
                    <a href="https://nodejs.org/en/">
                        <img src="img/nodejs.png" height="200" width="200">
                    </a>
                </div>
                <div class="column">
                    <h2>
                        
                        <br> ces langages sont utiliser pour implementer l adpateur qui permet de recuperer les donnees en temps
                        reeel et les exposer a la base a la database prometheus.
                    </h2>
                </div>
                <div class="column is-one-fifth">
                </div>
            </div>
        </section>
    </div>
    <div class="backgroundApi ">
        <section class="section">
            <div class="columns">
                <div class="column is-one-fifth">
                </div>
                <div class="column">
                    <a href="http://searchmicroservices.techtarget.com/definition/RESTful-API">
                        <img src="https://www.odoo.com/apps/icon_image?module_id=19345" height="200" width="200">
                    </a>
                </div>
                <div class="column">
                    <h2>
                        
                        <br> Ce type d API sera utilise pour faciliter l acces aux donnees de facon efficace et securitaire.
                    </h2>
                </div>
                <div class="column is-one-fifth">
                </div>
            </div>
        </section>
    </div>
    <div class="prometheus">
        <section class="section">

            <div class="columns">
                <div class="column is-one-fifth">
                </div>

                <div class="column">

                    <a href="https://prometheus.io/">
                        <img src="https://cdn.shopify.com/s/files/1/1300/8977/products/prometheus_PMS_7417_solid_bkgd_large.png?v=1468329127" height="200"
                            width="200" >
                    </a>
                </div>
                <div class="column ">

                    <div class="content ">
                        <h3 class="has-text-white">Prometheus</h3>
                    </div>

                    <p class="has-text-white " id="textsize">
                        Prometheus c'est un outils de monitorage et d'alerte de systèmes Open Source, créée à l'origine sur SoundCloud. Depuis sa
                        création en 2012, de nombreuses entreprises et organisations ont adopté Prometheus, et le projet
                        a une communauté de développeurs et d'utilisateurs très active. C'est maintenant un projet Open Source
                        autonome et maintenu indépendamment de toute entreprise. Pour souligner cela, et pour clarifier la
                        structure de gouvernance du projet, Prometheus a rejoint la Cloud Native Computing Foundation en
                        2016 en tant que deuxième projet hébergé, après Kubernetes.
                    </p>

                </div>
                <div class="column is-one-fifth">
                </div>
            </div>
        </section>
    </div>


    <div class="grafana">
        <section class="section">

            <div class="columns">
                <div class="column is-one-fifth">
                </div>

                <div class="column ">

                    <a href="https://grafana.com/">
                        <img src="img/grafana_logo.jpg" height="200" width="200">
                    </a>
                </div>
                <div class="column ">

                    <div class="content ">
                        <h3 class="has-text-white">Grafana</h3>
                    </div>
                    Grafana est le logiciel de facto pour l'analyse des séries temporelles, avec plus de 100 000 installations actives. Les clients
                    se tournent vers Grafana Labs pour rassembler leurs sources de données disparates, via des logiciels
                    neutres et open source.
                </div>
                <div class="column is-one-fifth">
                </div>
            </div>
        </section>
    </div>
    <section id="partenaires" class="section">
        <div class="container contact">
            <h4 class="title">
                Partenaires
                <br>
            </h4>
            <div class="columns features">

                <div class="column gap">
                    <div class="content center">

                        <a href="https://etsmtl.ca">
                            <img src="img/ets_logo.png" height="200" width="200">
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="content center">

                        <a href="https://cedille.etsmtl.ca">
                            <img src="img/Logo_Text & CEDILLE.png" height="200" width="200">
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="content center">
                        <a href="https://www.bnc.ca/">
                            <img src="img/bnc.jpg" height="400" width="400">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="columns features">
                <div class="column gap">
                    <div class="content is-offset-2 center">
                        <p class="has-text-centered"> Copyleft
                            <span class="Copyleft">©</span> Club Cedille</p>
                        <a class="button is-link is-outlined" href="https://www.facebook.com/clubcedille">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="button is-link is-outlined" href="#">
                            <i class="far fa-envelope"></i>
                        </a>
                        <a class="button is-link is-outlined" href="https://github.com/ClubCedille?utf8=%E2%9C%93&q=cynergie&type=&language=">
                            <i class="fab fa-github"></i>
                        </a>
                        <a class="button is-link is-outlined" href="https://www.linkedin.com/company/cedille">
                            <i class="fab fa-linkedin"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>