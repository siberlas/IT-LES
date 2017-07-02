<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT-LES</title>
    <meta name="description" content="IT-LES"/>
    <meta name="keywords" content="esport, e-sport, école, informatique, supérieur, IT-LES, université"/>
    <meta name="author" content="Pshiit"/>
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
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/logo-active.png" alt="ITLES"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1" style="">
            <ul class="nav navbar-nav">

                <li class="text-center"><a href="index.php" class="orange">Accueil</a></li>
                <li class="text-center"><a href="index.php#section">Team</a></li>
                <li class="dropdown text-center"><a data-target="#" href="#etudes" class="dropdown-toggle" id="drop1"
                                                    data-toggle="dropdown" role="button" aria-haspopup="true"
                                                    aria-expanded="true">
                        Plan pédagogique<span class="caret"></span> </a>
                    <ul class="dropdown-menu" aria-labelledby="drop1">
                        <li><a href="compo.html">Composition équipe projet</a></li>
                        <li><a href="cursus.html">Diplômes</a></li>
                        <li><a href="projet.html">Projets</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="text-center"><a href="#" class="orange" data-toggle="modal"
                                           data-target="#modal1">Inscription</a></li>
                <li class="text-center"><a href="#intro" style="font-size: xx-large">↑</a></li>
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
                        <h2 class="light white"><b>I</b>nformation <b>T</b>echnology <b>- L</b>earning & <b>ES</b>port
                        </h2>
                        <h3 class="light white"></h3>
                        <h1 class="white typed">Une vision claire de votre avenir</h1>
                        <span class="typed-cursor">|</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-md-offset-3 col-md-6 text-center">
                        <?php
                        if (isset($_GET['validate'])) echo('<div class="alert alert-warning alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button><strong>Well done!</strong> </br></br> Vous etes maintenant pré-inscrit. Nous reviendrons vers vous après études des informations transmises. A bientot !</div>');
                        ?>
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
            <h2>IT-LeS : plus qu'une simple école</h2></br></br>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0 text-center accroche">
                <h4>
                    <strong>ITLES</strong> vous garantit un environnement de travail qui reproduit celui présent dans
                    <strong>les plus grandes entreprises.</strong><br><br>
                    Nous mettons en place une équipe qui évolue dans un but commun : <strong>le développement des
                        compétences
                        personnelles pour l'obtention d'un diplôme certifié.</strong><br><br>
                     Nous utilisons tout simplement <strong>les forces des uns pour palier aux faiblesses des
                        autres.</strong><br><br>
                </h4>
            </div>
            <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 text-center accroche2">
                <h4>
                    Ensemble, nous participons aux développements de <strong>projets réels</strong> permettant
                    d'enrichir
                    vos
                    connaissances théoriques et votre expérience professionel.<br><br>

                    <!-- L'implication au niveau des projets <strong>générent des gains</strong> répartis à part égale.<br>-->
                    Notre devise : <strong>Q</strong>ualité, <strong>M</strong>otivation et
                    <strong>C</strong>arrière.<br><br><br>
                </h4>
                <h3><strong>With us, everyone is someone.</strong></h3>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4 text-center inscrit">
                <h4><strong>Inscription en cours..</strong></h4>
                <h4 class="heading small-heading no-margin regular">
                    <?php
                    $nbCreator = $bdd->query('select COUNT(*) as creator from candidat where candidatType = "creator" ');
                    if (isset($nbCreator)) {
                        $nbCreator = $nbCreator->fetch();
                        echo 'Full Time : <strong>' . ($nbCreator['creator']);
                    }
                    ?>
                    </strong></h4>
                <h4 class="heading small-heading no-margin regular"><span
                            class="open-blink"></span><?php $nbGamer = $bdd->query('select COUNT(*) as gamer from candidat where candidatType = "gamer" ');
                    $nbGamer = $nbGamer->fetch();
                    echo 'eSport :  <strong>' . ($nbGamer['gamer']) . '</strong>' ?></h4>
                <a data-toggle="modal" data-target="#modal1" class="btn btn-blue"
                   style="margin-top: 10px;">Inscription</a>
            </div>
        </div>
    </div>

</section>
<section id="section" class="section-padded section-bg">
    <div class="row text-center title ">
        <div class="col-xs-12 col-md-offset-3 col-md-6">
            <h2 class="white">Caractéristiques des Equipes</h2>
        </div>
    </div>
    <div class="row text-center title ">
        <div class="col-xs-12 col-md-6">

        </div>
        <div class="col-xs-12 col-md-6">

        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-2 text-center">
            <ul class="list-group">
                <h3 class="white">Equipe Full Time</h3>
                <li class="list-group-item">20 personnes</li>
                <li class="list-group-item">100% projet</li>
                <li class="list-group-item">Cours individuels</li>
                <li class="list-group-item">Partage de connaissances</li>
                <li class="list-group-item">Profits identiques sur projet</li>
            </ul>
        </div>
        <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-2 text-center">
            <ul class="list-group">
                <h3 class="white">Equipe eSport</h3>
                <li class="list-group-item">5 personnes</li>
                <li class="list-group-item">League of Legend compétitif</li>
                <li class="list-group-item">80% eSport</li>
                <li class="list-group-item">20% projet</li>
                <li class="list-group-item">Profits eSport & projet</li>
            </ul>
        </div>
    </div>
    <div class="row text-center title">
        <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4 text-center">
            <h3 class="white">Caractéristiques partagées</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4 text-center">
            <ul class="list-group">
                <li class="list-group-item">Mêmes projets</li>
                <li class="list-group-item">Mêmes diplômes</li>
                <li class="list-group-item">Cohésion d'équipe forte</li>
                <li class="list-group-item">Accès aux locaux 24/24, 7/7</li>
                <li class="list-group-item">Mêmes objectifs</li>
            </ul>
        </div>
    </div>
</section>
<section id="etudes" class="section section-padded gray-bg">

    <div class="container">
        <div class="row text-center title">
            <h2>Plan pédagogique</h2>
            <h4 class="light muted">Explorez les sections pour trouver toutes les informations sur notre plan
                pédagogique.</h4>
        </div>
        <div class="row services">
            <div class="col-md-4  col-md-offset-1 col-xs-12">
                    <div class="service">
                        <a href="PAPLearning.html">
                            <div class="icon-holder-esport">
                                <img src="img/icons/pap.png" alt="" class="icon">
                            </div>
                            <h4 class="heading">PAP Learning</h4>
                            <p class="description">Explorez la nouvelle pédagogie qui fait l'identité de IT-LeS</p>
                        </a>
                    </div>
            </div>
            <div class="col-md-4 col-md-offset-2 col-xs-12">
                <div class="service">
                    <a href="cursus.html">
                        <div class="icon-holder-esport">
                            <img src="img/icons/cup.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Les Diplômes</h4>
                        <p class="description">Retrouvez le détail, les débouchés et les pré-requis de tous nos
                            diplômes.</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4  col-md-offset-1 col-xs-12">
                <div class="service">
                    <a href="compo.html">
                        <div class="icon-holder-esport">
                            <img src="img/icons/icon-team.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Composition équipe projet</h4>
                        <p class="description">Découvrez l'organisation de l'équipe projet avec le détail des
                            différents postes et leurs diplômes correspondants</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-2 col-xs-12">
                <div class="service">
                    <a href="projet.html">
                        <div class="icon-holder-esport">
                            <img src="img/icons/spherier.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Les Projets</h4>
                        <p class="description">Examinez un projet type et le planning des projets sur une année</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>


<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <h3 class="white">Inscription</h3>
            <form class="form-horizontal popup-form" method="POST" action="actionv2.php" name="InsCreateurForm"
                  id="InsCreateurForm">
                <select name="typeCandidat" class="form-control form-white dropdown animated fadeIn" role="menu"
                        aria-labelledby="dLabel">
                    <option class="orange" disabled selected><a href="#">Choisir son équipe..</a></option>
                    <option class="orange" value="creator"><a href="#">Full time</a></option>
                    <option class="orange" value="gamer"><a href="#">eSport</a></option>
                </select>
                <input type="email" class="form-control form-white" placeholder="Email Address" name="mail" required>
                <input type="tel" class="form-control form-white" placeholder="Numéro" name="phone" required>

                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <input type="checkbox" value="None" id="squaredOne" name="check" required/>
                        <label for="squaredOne"><span>J'accepte <strong>de recevoir un email de confirmation</strong></span></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Submit</button>
            </form>
        </div>
    </div>
</div>



<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 text-center-mobile">
                <h3 class="white">Pré inscription</h3>
                <h5 class="light regular light-white">Remplir le formulaire en 10 secondes !</h5>
                <a data-toggle="modal" data-target="#modal1" class="btn btn-blue ripple trial-button">Inscription en
                    ligne</a>
            </div>
            <div class="col-xs-12 col-md-6 text-center-mobile">
                <h3 class="white">Ouverture de l'école<span class="open-blink"
                                                            style=" background-color: orange !important"></span></h3>
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
                <p>&copy; 2017 All Rights Reserved.
                <p>
            </div>
            <div class="col-xs-12 col-md-4 text-right text-center-mobile">
                <ul class="social-footer">
                    <li><a href="https://www.facebook.com/Information-Technology-Learning-Esport-283532272073075/"><i
                                    class="fa fa-facebook"></i></a></li>
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
