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
                        <a href="#home"> Accueil </a>
                    </li>
                    <li >
                        <a href="#about"> Actualités </a>
                    </li>

                    <li >
                        <a href="#port-folio"> Galerie </a>
                    </li>

                    <li >
                        <a href="#help"> Historique </a>
                    </li>

                    <li >
                        <a href="#sponsor"> Sponsor </a>
                    </li>

                    <li >
                        <a href="#contact"> Contact </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--./ NAV BAR END -->
    <div id="home" >
        <?php

        if(isset($_POST['connexion']))
        {
            getUserByNamePw($_POST);
        }

        if(isset($_POST['inscription']))
        {
            createUser($_POST);
        }

    ?>
        <div class="overlay">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-9 col-md-9 head-text">
                        <h1 id="divDisp" > Qu'est-ce donc Augustine ?</h1>
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
                    <div class="col-lg-3 col-md-3 div-trans text-center">
                        <h2 >Connexion</h2>
                        <div class="col-lg-12 col-md-12 col-sm-12" >
                            <form action="user.php" method="POST">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" required="required" placeholder="Pseudo">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" required="required" placeholder="Mot de passe">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="connexion" class="btn btn-success btn-block btn-lg">Connexion</button>
                                </div>
                            </form>
                         </div>
                         Pas de compte ?
                        <h2 >Inscription</h2>
                        <div class="col-lg-12 col-md-12 col-sm-12" >
                            <form action="index.php" method="POST">
                                <div class="form-group">
                                    <input type="text" name="nom"  class="form-control" required="required" placeholder="Nom">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="prenom" class="form-control" required="required" placeholder="Prenom">
                                </div>
                                <div class="form-group">
                                    <input type="text"  name ="username" class="form-control" required="required" placeholder="Pseudo">
                               </div>
                               <div class="form-group">
                                   <input type="password" name="password" class="form-control" required="required" placeholder="Mot de passe">
                               </div>
                               <div class="form-group col-lg-6 col-md-3">
                                    <button type="submit" name="inscription" class="btn btn-success btn-block btn-lg">S'inscrire</button>
                                </div>
                                <div class="form-group col-lg-6 col-md-3">
                                    <button type="reset" class="btn btn-success btn-block btn-lg">Annuler</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ HOME SECTION END -->
    <!-- ACTUALITE SECTION -->
    <div id="about" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 sub-head">
                    <h2  data-wow-delay="0.3s" class="wow rollIn animated" ><strong>Actualités </strong></h2>
                    <p class="sub-head">Un peu de news... </p>
                </div>
            </div>
            <div class="row ">
                <?php
                $actualite = getAllActualite();

                if ($actualite) 
                {
                    $i=0;
                    // Répète l'opération selon le nombre de commentaire dans la bdd
                    while ($i < count($actualite)) 
                    {
                        $actu = $actualite[$i++];

                        echo'   <div class="col-lg-3 col-md-2">
                                    <div class="media wow rotateIn animated" data-wow-delay="0.2s">
                                        <div class="pull-left">
                                            <i class="fa fa-history fa-4x  "></i>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">'.$actu["title"].'</h3>
                                            <p >
                                                '.$actu["texte"].'
                                            </p>
                                            <p >
                                                '.$actu["timePost"].'
                                            </p>
                                        </div>
                                    </div>
                                </div>';
                    }
                }
                ?>
            </div>
            <div class="row pad-top-botm wow flipInX animated" data-wow-delay="0.7s">
                <div class="col-lg-8 col-md-8 col-sm-8 " >
                    <h3><strong>Commentaire ?</strong></h3>
                    <form>
                        <!-- Si l'utilisateur est connecté, alors son pseudo sera entré directement, sinon 'Pseudonyme' sera la valeur par défaut. -->
                        <!--<input type="text" name="com_user" value="<?php echo $user ?>">-->
                        <!-- Permet de noter l'actualité de 1 à 5-->
                        <p>
                        Qu'elle actualité ? <select name="num_actu">
                        <option value="1" selected="selected">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select> / 4  -- 
                        Notez cette actualité : <select name="com_note">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" selected="selected">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select> / 5
                        </p>
                        <div class="form-group">
                            <textarea name="com"  required="required" data-wow-delay="0.7s" class="wow rotateIn animated form-control" style="min-height: 150px;" placeholder="Commentaire"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block btn-lg wow rotateIn animated " data-wow-delay="0.8s">Valider</button>
                        </div>
                        <!-- Bouton pour soumettre son commentaire -->
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center" >
                    <i class="fa fa-lightbulb-o big-icon "></i>
                </div>
            </div>
        </div>
    </div>
    <!--./ ACTUALITE SECTION END -->
    <!--./ AFFICHAGE COMMENTAIRE SECTION -->
    <div class="donars-section">
        <div class="overlay">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12 col-md-12 ">
                        <div id="testimonials" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#testimonials" data-slide-to="0" class=""></li>
                                <li data-target="#testimonials" data-slide-to="1" class=""></li>
                                <li data-target="#testimonials" data-slide-to="2" class="active"></li>
                            </ol>

                            <div class="carousel-inner">
                                            <?php // Commentaires

                                            $commentaires = getAllCommentaires();

                                            if ($commentaires) 
                                            {
                                                $i=0;
                                                // Répète l'opération selon le nombre de commentaire dans la bdd
                                                while ($i < count($commentaires)) 
                                                {
                                                    $com = $commentaires[$i++];
                                                    
                                                    // Affiche le pseudo, la date, l'heure,
                                                    //  la note de l'actualité et le commentaire
                                                    echo'   <div class="item active">
                                                                <div class="container center">
                                                                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                                                        <h4><i class="fa fa-quote-left"> </i>' . $com['texte'] . ' <i class="fa fa-quote-right"></i> <br/> Date '. $com['dateCom'] .' <br/> Note '. $com['note'].'/5 </h4>
                                                                        <h5 class="pull-right"><strong class="c-black"> By '. $com['pseudo'] .'</strong></h5>
                                                                    </div>
                                                                </div>
                                                            </div>  ';
                                                }
                                            }
                                            else // Sinon, le code affiche cela
                                            {
                                                echo'   <div class="item active">
                                                                <div class="container center">
                                                                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                                                        <h4><i class="fa fa-quote-left"> Aucun commentaire <i class="fa fa-quote-right"></i></h4>
                                                                    </div>
                                                                </div>
                                                            </div>  ';
                                            }
                                            
                                            ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ AFFICHAGE COMMENTAIRE SECTION END-->
    <!--./ GALERIE SECTION -->
    <div id="port-folio" class="pad-top-botm" >
        <div class="container">
            <div class="row text-center ">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2 data-wow-delay="0.3s" class="wow rollIn animated"><strong>GALERIE </strong></h2>
                    <p class="sub-head">Voici quelques images de moment important du projet.</p>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-4 ">

                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.4s">


                        <img src="assets/img/portfolio/aug1.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class="preview  " title="Image Title Here" href="assets/img/portfolio/aug1.jpg"><i class="fa fa-search-plus fa-5x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">

                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.5s">


                        <img src="assets/img/portfolio/aug2.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class="preview " title="Image Title Here" href="assets/img/portfolio/aug2.jpg"><i class="fa fa-search-plus fa-5x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">

                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.6s">


                        <img src="assets/img/portfolio/aug3.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                          <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class="preview " title="Image Title Here" href="assets/img/portfolio/aug3.jpg"><i class="fa fa-search-plus fa-5x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">

                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.7s">


                        <img src="assets/img/portfolio/aug4.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                           <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class="preview  " title="Image Title Here" href="assets/img/portfolio/aug4.jpg"><i class="fa fa-search-plus fa-5x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">

                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.8s">


                        <img src="assets/img/portfolio/aug5.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class="preview " title="Image Title Here" href="assets/img/portfolio/aug5.jpg"><i class="fa fa-search-plus fa-5x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.9s">
                        <img src="assets/img/portfolio/aug6.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                          <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class="preview " title="Image Title Here" href="assets/img/portfolio/aug6.jpg"><i class="fa fa-search-plus fa-5x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.9s">
                        <img src="assets/img/portfolio/aug7.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                          <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class="preview " title="Image Title Here" href="assets/img/portfolio/aug7.jpg"><i class="fa fa-search-plus fa-5x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.9s">
                        <img src="assets/img/portfolio/aug8.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                          <p>
                                <span>
                                Taille Image: 750x500
                                </span>
                               
                                Projet Augustine
                            </p>
                            <a class="preview " title="Image Title Here" href="assets/img/portfolio/aug8.jpg"><i class="fa fa-search-plus fa-5x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ GALERIE SECTION END -->
    <!--./ HISTORY SECTION -->
    <div id="help" >
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <h2 data-wow-delay="0.3s" class="wow rollIn animated"><strong>Historique</strong></h2>
                        <p class="sub-head"> Le projet évolue ! </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 wow bounceInDown animated" style="padding: 10px;" data-wow-delay="0.6s"   >
                    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item">

                                <img src="assets/img/slider/2011.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/img/slider/2012.jpg" class="img-thumbnail" alt="">
                            </div>
                            <div class="item active">
                                <img src="assets/img/slider/2013.jpg" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <!--INDICATORS-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-slider" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-slider" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-slider" data-slide-to="2" class="active"></li>
                        </ol>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="media wow rotateIn animated" data-wow-delay="0.4s">
                        <div class="pull-left">
                            <i class="fa fa-star-o fa-4x  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">2011</h3>
                            <p>
                                Premier projet r&eacutealis&eacute par le Lyc&eacutee L&eacuteonard de Vinci; toujours en partenariat avec le Lyc&eacutee Diderot.
                            </p>
                        </div>
                    </div>
                    <div class="media wow rotateIn animated" data-wow-delay="0.5s">
                        <div class="pull-left">
                            <i class="fa fa-life-ring fa-4x  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">2012</h3>
                            <p>
                                Second projet &eacutegalement en partenariat avec le Lyc&eacutee Diderot. Il s'agit de la premi&egravere version d'Augustine.
                            </p>
                        </div>
                    </div>
                    <div class="media wow rotateIn animated" data-wow-delay="0.5s">
                        <div class="pull-left">
                            <i class="fa fa-lightbulb-o fa-5x  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">2013</h3>
                            <p>
                                Toisi&egraveme projet sous le nom d'Augustine II.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ HISTORY SECTION END -->
    <!--./ SPONSOR SECTION -->
    <div id="sponsor" class="pad-top-botm" >
        <div class="container">
            <div class="row text-center ">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2 data-wow-delay="0.3s" class="wow rollIn animated"><strong>SPONSOR </strong></h2>
                    <br/>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.4s">
                        <img src="assets/img/sponsor/Advixys.jpg" class="img-responsive " alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.5s">
                        <img src="assets/img/sponsor/Decathlon.jpg" class="img-responsive " alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.6s">
                        <img src="assets/img/sponsor/Eauridis.jpg" class="img-responsive " alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.7s">
                        <img src="assets/img/sponsor/Kartland.jpg" class="img-responsive " alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ SPONSOR SECTION END -->
    <!--./ CONTACT SECTION -->
    <div id="contact" >
    <?php

        if(isset($_POST['Envoyer']))
        {
            getMsgContact($_POST);
            echo '<body onLoad="alert(\'Message envoyer !\')">';
        }

    ?>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2 data-wow-delay="0.3s" class="wow rollIn animated"><strong>Contact </strong></h2>
                    <p class="sub-head">Si vous souhaitez d'autres renseignements ou bien nous faire parvenir vos avis</p>

                    <p class="sub-head  wow rotateIn animated" data-wow-delay="0.4s"><strong>Adresse :</strong> Rue Edouard Branly, Melun 77000</p>
                </div>
            </div>
            <div class="row  text-center wow rotateIn animated" data-wow-delay="0.4s">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <a href="http://facebook.com/projetaugustinemelun">  <img src="assets/img/Social/facebook.png" alt="" /> </a>
                     <a href="#"> <img src="assets/img/Social/google-plus.png" alt="" /></a>
                     <a href="http://twitter.com/ProjetAugustine"> <img src="assets/img/Social/twitter.png" alt="" /></a>
                    </div>
                </div>
            <div class="row pad-top-botm">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form action="index.php" method="POST">
                            <div class="form-group">
                                <select class="form-control" name="civilite" value="">
                                    <option>Mr</option>
                                    <option>Mme</option>
                                    <option>Mlle</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nom" class="form-control wow rotateIn animated" data-wow-delay="0.5s" required="required" placeholder="Nom">
                            </div>
                            <div class="form-group">
                                <input type="text" name="prenom" class="form-control wow rotateIn animated" required="required" data-wow-delay="0.6s" placeholder="Prenom">
                            </div>
                            </tr>   
                        <div class="form-group">
                            <input type="text" name="objet" class="form-control wow rotateIn animated" required="required" data-wow-delay="0.6s" placeholder="Objet">
                        </div>
                        <div class="form-group">
                            <textarea name="message"  required="required" data-wow-delay="0.7s" class="wow rotateIn animated form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="Envoyer" class="btn btn-success btn-block btn-lg wow rotateIn animated " data-wow-delay="0.8s" >Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--./ CONTACT SECTION END -->
    <div id="footser-end">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    by RAMASSAMY Loghan - Hamoudi Anis - 2014/2015
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