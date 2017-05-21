<!DOCTYPE html>
<html lang="en">
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

    </script><script type="text/javascript" src="js/validationForm.js"></script>

</head>

<body>
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
					<li><a href="#general">Générales</a></li>
					<li><a href="#esport">Baccalauréat</a></li>
					<li><a href="#postBac">Post BAC</a></li>
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
						<div class="col-md-12 text-center">
							<h2 class="light white"><b>I</b>nformation <b>T</b>echnology <b>- L</b>earning & <b>ES</b>port </h2>
							<h1 class="white typed">Inscription gratuite et rapide..</h1>							
							<span class="typed-cursor">|</span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-3 col-md-6 text-center">
							<?php 
								if(isset($_GET['validate']))echo('<div class="alert alert-success alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button><strong>Well done!</strong> </br></br> Vous etes maintenant pré-inscrit. Nous reviendrons vers vous après études des informations transmises. A bientot !</div>');
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

		<!---------------------------------------Début formulaire inscription Createur--------------------------------->

    <form class="form-horizontal" method="POST" action="actionv2.php" name="InsCreateurForm" id="InsCreateurForm">
        <section id="general" class="section section-padded">
            <div class="container" style="color: black">
                <div class="row text-center title">
                    <h2>Informations Générales</h2>
                    <h4 class="light muted">Cela nous permet de mieux vous identifier..</h4>
                </div>
                <!-- <div class="row">
                    <div class="form-group">
                      <div class="col-sm-offset-2">
                            <h4><label for="inputCursus" class="col-sm-3 control-label" name="cursus">Choix cursus :</label></h4>
                        </div>
                        <div class="col-sm-6" id="inputCursus"  style="margin-top: 1%">
                            <select name="cursus" style="color: black;">
                                <option>BAC +2 : Designer graphique</option>
                                <option>BAC +2 : Analyste développeur</option>
                                <option>BAC +2 : Chargé de Marketing Digital</option>
                                <option>BAC +3 : Concepteur webdesigner</option>
                                <option>BAC +3 : Licence Professionnelle systèmes informatiques et logiciels</option>
                                <option>BAC +3 : Community manager</option>
                                <option>BAC +5 : Directeur (trice) artistique en design graphique et digital</option>
                                <option>BAC +5 : MASTER Informatique, spécialité Système intelligents et applications</option>
                                <option>BAC +5 : Information et Communication spécialité « E-Rédactionnel »</option>
                                <option>BAC +5 : Expert(e) en étude et développement du SI</option>
                                <option>BAC +5 : MASTER Informatique, spécialité MIAGE </option>
                            </select>
                        </div>
                    </div>-->

                 <div class="form-group">
                     <div class="col-sm-offset-2">
                         <h3><label for="inputCivility" class="col-sm-2 control-label" >Civilité</label></h3>
                     </div>
                     <div class="col-sm-6" id="inputCivility" name="civility">
                         <label class="radio-inline"><input type="radio"name="civility" value="M" checked>M.</label>
                         <label class="radio-inline"><input type="radio" name="civility" value="Mme" >Mme.</label>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-offset-2">
                         <h3><label for="inputLastName" class="col-sm-2 control-label" >Nom</label></h3>
                     </div>
                     <div class="col-sm-6">
                         <input type="text" class="form-control" id="inputLastName" placeholder="Nom" name="lastname" required>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-offset-2">
                         <h3><label for="inputFirstName" class="col-sm-2 control-label" >Prénom</label></h3>
                     </div>
                     <div class="col-sm-6">
                         <input type="text" class="form-control" id="inputFirstName" placeholder="Prénom"  name="firstname" required>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-offset-2">
                         <h3><label for="inputEmail" class="col-sm-2 control-label"  >Email</label></h3>
                     </div>
                     <div class="col-sm-6">
                         <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="mail" required>
                     </div>
                 </div>

             <div class="form-group">
                 <div class="col-sm-offset-2">
                     <h3><label for="inputPhone" class="col-sm-2 control-label"  >Téléphone</label></h3>
                 </div>
                 <div class="col-sm-6">
                     <input type="tel" class="form-control" id="inputPhone" placeholder="Numéro" name="phone" required>
                 </div>
             </div>
                <!--
            <div class="form-group">
                <div class="col-sm-offset-2">
                    <h3><label for="inputDOB" class="col-sm-2 control-label">Date de Naissance</label></h3>
                </div>
                <div class="col-sm-6">
                    <input type="date" class="form-control" id="inputDOB" placeholder="Date" name="dob" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2">
                    <h3><label for="inputPOB" class="col-sm-2 control-label">Lieux de Naissance</label></h3>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputPOB" placeholder="Ville" name="pob" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2">
                    <h3><label for="inputNationality" class="col-sm-2 control-label">Nationalité</label></h3>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputNationality" placeholder="Pays" name="nationality" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2">
                    <h3><label for="inputLastDegree" class="col-sm-2 control-label">Dernier diplôme</label></h3>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputLastDegree" placeholder="BAC - BAC +2 etc..." name="lastDegree" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-10">
                            <h4>Votre niveau d’études actuel :</h4>
                        </div>
                        <div class="col-sm-offset-5 col-sm-10">
                            <div class="col-sm-6" id="inputCurentLevel">
                                <input type="radio" name="curentLevel" value="2"  checked> Vous êtes en Bac + 2<br>
                                <input type="radio" name="curentLevel" value="3" > Vous êtes en Bac + 3<br>
                                <input type="radio" name="curentLevel" value="4" > Vous êtes en Bac + 4<br>
                                <input type="radio" name="curentLevel" value="5" > Autres cas <input type="text" size="40" placeholder=" (Précisez) "><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8">
                            <h4>Pourquoi avez choisi IT-LeS ?</h4>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                            <textarea required  class="form-control" rows="5" cols="100" name="lesChoice" form="lesChoice" id="lesChoice" placeholder="500 mots minimum..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
   </div>
    </div>
    <div class="cut cut-bottom"></div>-->
     </section>
        <!--
     <section id="esport" class="section section-padded gray-bg">
         <div class="container">
             <div class="row text-center title">
                 <h2>Informations Baccalauréat</h2>
                 <h4 class="light muted">Les détails sur votre baccalauréat..</h4>
             </div>
             <div class="row">
                 <div class="form-group">
                     <div class="col-sm-offset-2">
                         <h3><label for="inputStream" class="col-sm-2 control-label">Série</label></h3>
                     </div>
                     <div class="col-sm-6">
                         <input type="text" class="form-control" id="inputStream" placeholder="S - ES - L - STI - etc..." name="stream" required>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-offset-2">
                         <h3><label for="inputDistinction" class="col-sm-2 control-label">Mention</label></h3>
                     </div>
                     <div class="col-sm-6">
                         <input type="text" class="form-control" id="inputDistinction" placeholder="Bien, Très bien..." name="distinction">
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-offset-2">
                         <h3><label for="inputBacSchoolName" class="col-sm-2 control-label">Nom Ecole</label></h3>
                     </div>
                     <div class="col-sm-6">
                         <input type="text" class="form-control" id="inputBacSchoolName" placeholder="Nom établissement" name="bacSchoolName" required>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-offset-2">
                         <h3><label for="inputBacCity" class="col-sm-2 control-label">Ville</label></h3>
                     </div>
                     <div class="col-sm-6">
                         <input type="text" class="form-control" id="inputBacCity" placeholder="Ville" name="bacSchoolCity" required>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-offset-2">
                         <h3><label for="inputBacCountry" class="col-sm-2 control-label">Pays</label></h3>
                     </div>
                     <div class="col-sm-6">
                         <input type="text" class="form-control" id="inputBacCountry" placeholder="Pays" name="bacCountry" required>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="col-sm-offset-2">
                         <h3><label for="inputBacYear" class="col-sm-2 control-label">Année Obtention</label></h3>
                     </div>
                     <div class="col-sm-6">
                         <input type="date" class="form-control" id="inputBacYear" placeholder="2001.." name="bacYear" required>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     -->
        <!--
     <section id="postBac" class="section section-padded">
         <div class="container">
             <div class="row text-center title">
                 <h2>Etudes supérieures </h2>
                 <h4 class="light muted">(Diplôme préparé, prépas, Bac+ x, crédit ECTS, autres)</h4>
             </div>
             <div class="row"  style=" color:black;width: 80%; margin-left: 15%; margin-top: 5%;">
                 <div class="col-lg-12">

                     <div class="form-group">
                         <div class=" col-sm-3 " >
                             <input type="text" placeholder="Diplôme" size="29" name="postDegree1" onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-3 " >
                             <input  type="text" placeholder="Nom de l'école" size="29" name="postSchoolName1"  onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-2 " >
                             <input type="text" placeholder="Pays" size="18" name="postCountry1"  onkeyup="validPostbac()">
                         </div>
                         <div class="col-sm-2 " >
                             <input type="text" placeholder="Ville" size="18" name="postCity1"   onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-1 ">
                             <input type="date" placeholder="Année" size="10" name="postYear1"  onblur="validPostbac()">
                         </div>
                     </div>

                     <div class="form-group">
                         <div class=" col-sm-3 " >
                             <input type="text" placeholder="Diplôme" size="29" name="postDegree2"   onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-3 " >
                             <input type="text" placeholder="Nom de l'école" size="29" name="postSchoolName2"   onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-2 " >
                             <input type="text" placeholder="Pays" size="18" name="postCountry2"   onkeyup="validPostbac()">
                         </div>
                         <div class="col-sm-2 " >
                             <input type="text" placeholder="Ville" size="18" name="postCity2"   onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-1 ">
                             <input type="date" placeholder="Année" size="10" name="postYear2"   onblur="validPostbac()">
                         </div>
                     </div>

                     <div class="form-group">
                         <div class=" col-sm-3 " >
                             <input type="text" placeholder="Diplôme" size="29" name="postDegree3"    onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-3 " >
                             <input type="text" placeholder="Nom de l'école" size="29" name="postSchoolName3"  onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-2 " >
                             <input type="text" placeholder="Pays" size="18" name="postCountry3"   onkeyup="validPostbac()">
                         </div>
                         <div class="col-sm-2 " >
                             <input type="text" placeholder="Ville" size="18" name="postCity3" onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-1 ">
                             <input type="date" placeholder="Année" size="10" name="postYear3"  onblur="validPostbac()">
                         </div>
                     </div>

                     <div class="form-group">
                         <div class=" col-sm-3 " >
                             <input type="text" placeholder="Diplôme" size="29" name="postDegree4"  onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-3 " >
                             <input type="text" placeholder="Nom de l'école" size="29" name="postSchoolName4"   onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-2 " >
                             <input type="text" placeholder="Pays" size="18" name="postCountry4"   onkeyup="validPostbac()">
                         </div>
                         <div class="col-sm-2 " >
                             <input type="text" placeholder="Ville" size="18" name="postCity4"    onkeyup="validPostbac()">
                         </div>
                         <div class=" col-sm-1 ">
                             <input type="date" placeholder="Année" size="10" name="postYear4" onblur="validPostbac()">
                         </div>
                     </div>

                 </div>

             </div>
         </div>

     </section>
     -->
     <section id="submit" class="section">
         <div class="row">
             <div class="col-sm-offset-4 col-sm-5">
                 <button type="submit" class="btn btn-blue" name="insertCreatorForm">Submit</button>
             </div>
         </div>
     </section>

 </form>
<section class="section section-padded blue-bg">
 <div class="container">
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
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
             <div class="col-sm-6 col-sm-offset-4 text-center-mobile">
                 <h3 class="white">Ouverture de l'école<span class="open-blink" style=" background-color: orange !important"></span></h3>
                 <div class="row opening-hours">
                     <div class="col-sm-2 text-center-mobile">
                         <h5 class="light-white light">Day</h5>
                         <h3 class="regular white">01</h3>
                     </div>
                     <div class="col-sm-4 text-center-mobile">
                         <h5 class="light-white light">Month</h5>
                         <h3 class="regular white">Septembre</h3>
                     </div>
                     <div class="col-sm-3 text-center-mobile">
                         <h5 class="light-white light">Year</h5>
                         <h3 class="regular white">2017</h3>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row bottom-footer text-center-mobile">
             <div class="col-sm-8">
                 <p>&copy; 2017 All Rights Reserved.<p>
             </div>
             <div class="col-sm-4 text-right text-center-mobile">
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
