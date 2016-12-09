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
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <?php
        include_once "header1.php";
        ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">



                            <div class="shipping text-center"><!--shipping-->
                                <img src="images/home/bravo.jpg" alt="" />
                            </div><!--/shipping-->
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="blog-post-area">
                            <h2 class="title text-center">Nos Réalisations</h2>
                            <div class="single-blog-post">


                                <a href="">
                                    <img src="images/blog/témoignage.jpg" alt="">
                                    </div>
                                    <div class="single-blog-post">

                                        <div class="post-meta">
                                            <ul>
                                                <li><i class="fa fa-user"></i> 
                                                    <?php
                                                    require_once 'config/connection.php';
                                                    global $pdo;
                                                    $query = $pdo->prepare("SELECT nom,date_temoin,image,parole FROM temoignages ");
                                                    $query->execute();
                                                    $data = $query->fetchColumn();
                                                    print_r($data);
                                                    ?>
                                                </li>
                                                <li><i class="fa fa-calendar"></i> 
                                                    <?php
                                                    require_once 'config/connection.php';
                                                    global $pdo;
                                                    $query = $pdo->prepare("SELECT nom,date_temoin,image,parole FROM temoignages ");
                                                    $query->execute();
                                                    $data = $query->fetchColumn(1);
                                                    print_r($data);
                                                    ?>
                                                </li>		
                                            </ul>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </span>
                                        </div>
                                        <a href="">

                                            <img src="images/blog/blog-two.jpg" >
                                        </a>

                                        <?php
                                        require_once 'config/connection.php';
                                        global $pdo;
                                        $query = $pdo->prepare("SELECT nom,date_temoin,image,parole FROM temoignages ");
                                        $query->execute();
                                        $data = $query->fetchColumn(3);
                                        print_r($data);
                                        ?>
                                    </div>
                                    <div class="single-blog-post">
                                        <h3>---------------------------------------------------------
                                            -----------------------------------------------------------------------------------</h3>
                                        <div class="post-meta">
                                            <ul>
                                                <li><i class="fa fa-user"></i> Carolina </li>
                                                <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                                <li><i class="fa fa-calendar"></i> DEC 5, 2014</li>
                                            </ul>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </span>
                                        </div>
                                        <a href="">
                                            <img src="images/blog/blog-three.jpg" alt="">
                                        </a>
                                        <p> “Bonjour, ce témoignage pour vous remercier de la qualité de votre service médicale. J’utilise
                                            votre hotline ainsi que votre assistante,il m’a semblé important d’écrire ma satisfaction quant à votre méthode”.</p>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <?php
        include_once "footer.php";
        ?>



        <script src="js/jquery.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>