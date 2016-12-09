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

                    <div class="col-sm-99">
                        <div class="blog-post-area">

                            <h2 class="title text-center">Présentation</h2>
                            <div class="single-blog-post">
                                <?php
                                require_once 'config/connection.php';
                                global $pdo;
                                $query = $pdo->prepare("SELECT * FROM q_s_n ");
                                $query->execute();
                                $data = $query->fetchColumn();
                                print_r($data);
                                ?>
                            </div>
                            <h2 class="title text-center">Historique</h2>
                            <div class="single-blog-post">
                                <?php
                                require_once 'config/connection.php';
                                global $pdo;
                                $query = $pdo->prepare("SELECT * FROM q_s_n ");
                                $query->execute();
                                $data = $query->fetchColumn(1);
                                print_r($data);
                                ?>
                            </div>
                            <h2 class="title text-center">Savoir faire</h2>
                            <div class="single-blog-post">
                                <?php
                                require_once 'config/connection.php';
                                global $pdo;
                                $query = $pdo->prepare("SELECT * FROM q_s_n ");
                                $query->execute();
                                $data = $query->fetchColumn(2);
                                print_r($data);
                                ?>
                            </div>

                        </div><!--/blog-post-area-->

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