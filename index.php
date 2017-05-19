<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT-LES</title>
    <meta name="description" content="IT-LES" />
    <meta name="keywords" content="esport, e-sport, école, informatique, supérieur, IT-LES, université" />
    <meta name="author" content="Pshiit" />
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="css/school.css">
</head>

<body>
<?php
include("connection.php");
?>
<!--- partie a deplacer---->
<div class="preloader">
    <img src="img/loader.gif" alt="Preloader image">
</div>
<nav class="navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li><a href="#intro">BACK TOP</a></li>
                <li class="dropdown"><a data-target="#" href="#etudes" class="dropdown-toggle" id="drop1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> Etudes <span class="caret"></span> </a>
                    <ul class="dropdown-menu" aria-labelledby="drop1">
                        <li><a href="projetPedagogique.html">Projet Pédagogique</a></li>
                        <li><a href="cursus.html">Cursus & Admission</a></li>
                        <li><a href="debouche.html">Débouchés</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a data-target="#" href="#esport" class="dropdown-toggle" id="drop2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> eSport <span class="caret"></span> </a>
                    <ul class="dropdown-menu" aria-labelledby="drop2">
                        <li><a href="training.html">Training Session</a></li>
                        <li><a href="#">Tournois</a></li>
                        <li><a href="cursus.html">Cursus & Admission</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a data-target="#" href="#pricing" class="dropdown-toggle" id="drop3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> Inscription <span class="caret"></span> </a>
                    <ul class="dropdown-menu" aria-labelledby="drop3">
                        <li><a href="InsCreateur.php">Créateurs</a></li>
                        <li><a href="InsGamer.php">Gamers</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<header id="intro">
    <div class="container">
        <div class="table">
            <div class="header-text">
                <div class="row">
                    <div class="col-xs-12 col-md-12 text-center">
                        <h2 class="light white"><b>I</b>nformation <b>T</b>echnology <b>- L</b>earning & <b>ES</b>port </h2>
                        <h3 class="light white">Laissez vous tenter par..</h3>
                        <h1 class="white typed">Une expérience hors du commun..</h1>
                        <span class="typed-cursor">|</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="resume" class="section section-padded">
    <div class="cut cut-top"></div>
    <div class="container">
        <div class="row text-center title">
            <h2>IT-LeS, bien plus qu'une simple école !</h2></br></br>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-8 text-center">
                <h4>
                    <strong>Les formations classique que l'on subit depuis toujours ne fonctionnent pas</strong>, elles ne permettent pas d'acquérir de réels compétences. Rien ne permet aux jeunes d'être motivés à apprendre, les cours, les examens.. <strong>on en a marre !</strong></br></br>
                    Tout ça c'est fini, avec IT-LeS venez vous former au sein de <strong>l'Initial IT. Studio qui reprend les concepts des plus grande Start-up.</strong></br></br>
                    L'objectif du Studio, faire de <strong>vos idées une réalité !</strong> Créer les nouveaux jeux vidéo mobile du Play Store à la mode, ce qui permettra de <strong>valider les compétences nécessaire à l'obtention de vos diplômes.</strong> </br></br>
                    N'hesitez pas à remplir votre candidature en ligne : rapide, gratuit et ca pourrait changer votre vie!
                </h4>
            </div>

            <div class="col-xs-8 col-md-4">
                <div class="jumbotron">
                    <div class="row">
						<div class="col-xs-12 col-md-12">
                        <h4 class="heading small-heading no-margin regular"><strong>Inscription en cours..</strong></h4>
						</div>
					</div>
                    <div class="row">
					<div class="col-xs-12 col-md-12">
                        <h4 class="heading small-heading no-margin regular"><span class="open-blink"></span><?php $nbCreator= $bdd->query('select COUNT(*) as creator from candidat where candidatType = "creator" ');
$nbCreator = $nbCreator->fetch();
echo 'Créateurs inscrit: <strong>'.($nbCreator['creator']);?></strong></h4>
                    </div>
					</div>
                    <div class="row">
					<div class="col-xs-12 col-md-12">
                        <h4 class="heading small-heading no-margin regular"><span class="open-blink"></span><?php $nbGamer= $bdd->query('select COUNT(*) as gamer from candidat where candidatType = "gamer" ');
							$nbGamer = $nbGamer->fetch();
							echo 'Gamers inscrit :  <strong>'.($nbGamer['gamer']).'</strong>'?></h4>
                    </div>
					</div>
                    <div class="row" style="margin-top:10px;">
					<div class="col-xs-12 col-md-12 col-md-offset-2">
                            <a href="#pricing" class="btn btn-blue">Inscription</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cut cut-bottom"></div>
</section>
<section id="etudes" class="section section-padded gray-bg">

    <div class="cut cut-top"></div>
    <div class="container">
        <div class="row text-center title">
            <h2>Devenir un Créateur IT-LeS</h2>
            <h4 class="light muted">Les Créateurs forment le cœur de l’entreprise, ils rejoindront notre structure pour entreprendre, se former et surtout créer les nouvelles applications de jeu mobiles à succès.</h4>
        </div>
        <div class="row services">
            <div class="col-xs-12 col-md-4">
                <a href="projetPedagogique.html">
                    <div class="service">
                        <a href="projetPedagogique.html">
                            <div class="icon-holder-esport">
                                <img src="img/icons/heart-blue.png" alt="" class="icon">
                            </div>
                            <h4 class="heading">Projet Pédagogique</h4>
                            <p class="description">Découvrez un nouveau progamme pédagogique complétement basé sur la passion du jeu et les relations humaines</p>
                        </a>
                    </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <a href="cursus.html">
                    <div class="service">
                        <div class="icon-holder-esport">
                            <img src="img/icons/guru-blue.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Cursus & Admission</h4>
                        <p class="description">Retrouver les Cursus en informatique proposés et un processus d'Admission sur mesure.</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-md-4">
                <a href="debouche.html">
                    <div class="service">
                        <div class="icon-holder-esport">
                            <img src="img/icons/weight-blue.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Les Débouchés</h4>
                        <p class="description">Compléter votre diplômes et démarrer avec toutes les compétences rechercher par les entreprises.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="cut cut-bottom"></div>
</section>
<section id="esport" class="section section-padded">
    <div class="container">
        <div class="row text-center title">
            <h2>Devenir un Gamer IT-LeS</h2>
            <h4 class="light muted">Rejoignez notre structure pour jouer, entreprendre, se former et  surtout pour tenter de briller sur la scène esport actuel.</BR></BR>
                Véritable image de marque de notre structure, les Gamers auront la mission de représenter notre savoir-faire en matière de création de jeu vidéo à travers les plateformes de streaming et les différents événements esport.
            </h4>
        </div>
        <div class="row services">
            <div class="col-xs-12 col-md-4">
                <a href="training.html">
                    <div class="service">
                        <div class="icon-holder-esport">
                            <img src="img/icons/gamepad.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Training Session</h4>
                        <p class="description">Découvrez un nouveau progamme pédagogique complétement repensé basé sur la passion du jeu</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="service">
                    <div class="icon-holder-esport">
                        <img src="img/icons/cup.png" alt="" class="icon">
                    </div>
                    <h4 class="heading">Séléctions</h4>
                    <p class="description">Les Gamers devront passer l'épreuve des séléctions pour rejoindre IT-LeS.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <a href="cursus.html">
                    <div class="service">
                        <div class="icon-holder-esport">
                            <img src="img/icons/star.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Cursus & Admission</h4>
                        <p class="description">Retrouver les Cursus en informatique proposés et un processus d'Admission sur mesure.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="pricing" class="section">
    <div class="container">
        <div class="row title text-center">
            <h2 class="margin-top white">Vivre le rêve à tout Prix</h2>
            <h4 class="light white">Le tarifs pour intégrer l'école et les différentes offres</h4>
        </div>
        <div class="row no-margin">
            <div class="col-xs-12 col-md-7 no-padding col-md-offset-3 pricings text-center">
                <div class="pricing">
                    <div class="box-main active" data-img="img/pricing1.jpg">
                        <h4 class="white">Entrée des Créateurs</h4>
                        <h4 class="white regular light">6000€ <span class="small-font">/ an</span></h4>
                        <a href="InsCreateur.html" class="btn btn-white-fill">Je postule</a>
                        <i class="info-icon icon_question"></i>
                    </div>
                    <div class="box-second active">
                        <ul class="white-list text-left">
                            <li>3000€ à l'entrée</li>
                            <li>Entrez au Initial IT. Studio</li>
                            <li>40h project/week</li>
                            <li>Choix libre du diplôme</li>
                            <li>Accès illimité au locaux</li>
                        </ul>
                    </div>
                </div>
                <div class="pricing">
                    <div class="box-main" data-img="img/pricing2.jpg">
                        <h4 class="white">Entrée des Gamers</h4>
                        <h4 class="white regular light">4000€ <span class="small-font">/ an</span></h4>
                        <a href="InsGamer.html" class="btn btn-white-fill">Je postule</a>
                        <i class="info-icon icon_question"></i>
                    </div>
                    <div class="box-second">
                        <ul class="white-list text-left">
                            <li>1000€ à l'entrée</li>
                            <li>Integrer team eSport</li>
                            <li>32h training/week</li>
                            <li>Entrez au Initial IT. Studio</li>
                            <li>Choix libre d'un diplôme</li>
                            <li>8h project/week</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-padded blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="owl-twitter owl-carousel">
                    <div class="item text-center">
                        <i class="icon fa fa-twitter"></i>
                        <h4 class="white light">Nos projets ne sont pas jetter à la poubelle, ils sont exploités par toute notre équipe.</h4>
                        <h4 class="light-white light">#IT-LeS #projet #poubelle</h4>
                    </div>
                    <div class="item text-center">
                        <i class="icon fa fa-twitter"></i>
                        <h4 class="white light">Enfin une école qui avance à votre rythme et qui propose de se rémunerer avec les projets.</h4>
                        <h4 class="light-white light">#IT-LeS #€€€ #diplomes</h4>
                    </div>
                    <div class="item text-center">
                        <i class="icon fa fa-twitter"></i>
                        <h4 class="white light">10 diplômes différents, une équipe de 20 Créateurs et de 5 Gamers</h4>
                        <h4 class="light-white light">#IT-LeS #Createur #Gamer</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 text-center-mobile">
                <h3 class="white">Mon dossier</h3>
                <h5 class="light regular light-white">Remplir votre dossier d'admission !</h5>
                <a href="#" class="btn btn-blue ripple trial-button">Inscription en ligne</a>
            </div>
            <div class="col-xs-12 col-md-6 text-center-mobile">
                <h3 class="white">Ouverture de l'école<span class="open-blink" style=" background-color: orange !important"></span></h3>
                <div class="row opening-hours">
                    <div class="col-xs-12 col-md-2 text-center-mobile">
                        <h5 class="light-white light">Day</h5>
                        <h3 class="regular white">01</h3>
                    </div>
                    <div class="col-xs-12 col-md-4 text-center-mobile">
                        <h5 class="light-white light">Month</h5>
                        <h3 class="regular white">Septembre</h3>
                    </div>
                    <div class="col-xs-12 col-md-3 text-center-mobile">
                        <h5 class="light-white light">Year</h5>
                        <h3 class="regular white">2017</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom-footer text-center-mobile">
            <div class="col-xs-12 col-md-8">
                <p>&copy; 2017 All Rights Reserved.<p>
            </div>
            <div class="col-xs-12 col-md-4 text-right text-center-mobile">
                <ul class="social-footer">
                    <li><a href="https://www.facebook.com/Information-Technology-Learning-Esport-283532272073075/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/ITLesport"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/itlesport/"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Holder for mobile navigation -->
<div class="mobile-nav">
    <ul>
    </ul>
    <a href="#" class="close-link"><i class="arrow_up"></i></a>
</div>
<!-- Scripts -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/typewriter.js"></script>
<script src="js/jquery.onepagenav.js"></script>
<script src="js/main.js"></script>
</body>

</html>
