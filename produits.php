<?php include("functions/functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Agence Médicale</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/home/AM.ico" />
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">

    </head><!--/head-->

    <body>
        <?php
        include_once "header.php";
        ?>

        <section id="slider"><!--slider-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-carousel" data-slide-to="1"></li>
                                <li data-target="#slider-carousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-6">
                                        <h1><span>A</span>-MEDICALE</h1>

                                        <p>Découvrez tous nos produits.</br>Marériel médicale et materiel</br> d'urgence !!! </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="images/produits/fauteil1.jpg" class="girl img-responsive" alt="" />

                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1><span>A</span>-MEDICALE</h1>

                                        <p>Proposez vos avis professionelles! </br>Soyez le bienvenue !!!</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="images/produits/2.jpg" class="girl img-responsive" alt="" />

                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1><span>A</span>-MEDICALE</h1>

                                        <p> Bénéficiez des services inattendus !!! </br>Des nouveaux collections !!!</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="images/produits/sac1.jpg" class="girl img-responsive" alt="" />

                                    </div>
                                </div>

                            </div>

                            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section><!--/slider-->

        <section>
            <div class="container">
                <div class="row">


                    <?php include_once "catmarq.php"; ?>






                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">CARACTÉRISTIQUES DES ARTICLES</h2>

                            <?php
                            getAllPro();
                            obtenirProduitMarq();
                            obtenirProduitFamil();
                            ?>



                        </div><!--features_items-->





                    </div>
                </div>
            </div>
        </section>

        <?php
        include_once "footer.php";
        ?>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>