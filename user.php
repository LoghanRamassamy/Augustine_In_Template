<!DOCTYPE html>
<html lang="fr">
<?php 

    include_once('assets/inc/bdd_conf.php');
    include_once('assets/inc/fonctions.php');

?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Augustine</title>
    <!--  Bootstrap Style -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--  Font-Awesome Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--  Animation Style -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--  Pretty Photo Style -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--  Custom Style -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="pre-div">
        <div id="loader">
        </div>
    </div>
    <!--/. PRELOADER END -->
    <div class="navbar navbar-default navbar-fixed-top move-me ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- LOGO PROJET -->

                <!--<a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" class="navbar-brand-logo " alt="" />

                </a>-->

                <a class="navbar-brand" href="http://www.vinci-melun.org/">
                    <img src="assets/img/img/logo-ldv.jpg" class="navbar-brand-logo " alt="" />
                </a>

                <a class="navbar-brand" href="http://www.diderot.org/">
                    <img src="assets/img/img/logo-diderot.jpg" class="navbar-brand-logo " alt="" />
                </a>

            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">

                    <li >
                        <a href="#home"> Vers le site </a>
                    </li>
                    <li >
                        <a href="#monCompte"> Mon compte </a>
                    </li>
                    <li >
                        <a href="logout.php"> Déconexion </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--./ NAV BAR END -->
    <div id="home" >
        <div class="overlay">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-9 col-md-9 head-text">
                        <h1 id="divDisp" > Bonjour </h1>
                        <span >
                            <i class="fa fa-lightbulb-o " ></i>Augustine
                                <p>
                                Ce projet est née par l'association de deux lyc&eacutees. Le <a href="http://www.vinci-melun.org">lyc&eacutee L&eacuteonard de Vinci</a><!--space-->
                                de Melun (BTS CPI et BAC Pro technicien d'usinage), qui se concentre sur la conception de la coque.
                                <!--space-->
                                Et le <a href="http://www.diderot.org">lycée Diderot</a> de Paris (BTS IRIS) qui se
                                concentre sur la partie &eacutel&eacutectronique de la voiture.
                                </p>
                        </span>
                        <span >
                            <i class="fa fa-lightbulb-o " ></i>D'où vient le nom de ce projet ?
                                <p>
                                Augustin... Augustine. Ce nom vient tout simplement de <a
                                href="http://fr.wikipedia.org/wiki/Augustin_Mouchot" target="_blank">Augustin Mouchot</a>, l'homme
                                qui a invent&eacute le capteur solaire.
                                </p>
                        </span>

                        <span>
                            <i class="fa fa-lightbulb-o" ></i>Challenge EducEco
                                <p>
                                Le but de ce challenge est de consommer le moins d'&eacutenergie possible pour parcourir 17,14Km avec
                                une vitesse moyenne <!--space-->
                                minimum de 25Km/h. Une demie-journ&eacutee est r&eacuteserv&eacutee &agrave la d&eacutecouverte de la piste et aux essais
                                libres. Les <!--space-->
                                contraintes du circuit urbain ne sont pas celles d'une piste de circuits automobile ainsi, les
                                v&eacutehicules seront appel&eacutes <!--space-->
                                par groupes homog&egravene class&eacutes selon:
                                </p>
                                <p>
                                Le groupe des v&eacutehicules &eacuteco-citadins (tous vecteurs d'&eacutenergie);
                                <br/>
                                Le groupe des v&eacutehicules prototypes thermiques (tous carburants);
                                <br/>
                                Le groupe des v&eacutehicules prototype &eacutelectriques.
                                </p>
                                <p>
                                Pour un acc&egraves au site <a href="http://www.educeco.net/" target="_blank">Cliquez ici</a>
                                </p>
                        </span>
                        
                        <span >
                            <i class="fa fa-lightbulb-o" ></i>Association Tournesol
                            <p>
                            Une association d’intérêt général. <!--space-->
                            Tournesol, Artistes à l’Hôpital développe depuis 1990 une présence artistique dans une quarantaine d’hôpitaux de court, moyen et long séjour.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ HOME SECTION END -->
    <div id="footser-end">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    by RAMASSAMY Loghan - Anis - 2014/2015
                </div>
            </div>

        </div>
    </div>
    <!--./ FOOTER SECTION END -->
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
     <!--  WOW Script -->
    <script src="assets/js/wow.min.js"></script>
    <!--  Scrolling Script -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  PrettyPhoto Script -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>