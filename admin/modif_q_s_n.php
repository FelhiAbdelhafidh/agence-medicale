<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Agence Médicale</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/prettyPhoto.css" rel="stylesheet">
        <link href="../css/price-range.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">
        <link rel="shortcut icon" href="../images/home/AM.ico" />
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       


    </head><!--/head-->

    <body>

        <div id="contact-page" class="container">
            <div class="bg">

                <div class="row">  	

                    <div class="contact-form">
                        <h2 class="title text-center">Modifier Q_S_N</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" action="form.php" method="post">

                            <div class="form-group col-md-12">
                                Presentation:
                                <textarea name="message" id="message" required="required" class="form-control" rows="5" placeholder=""></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                Historique:
                                <textarea name="message" id="message" required="required" class="form-control" rows="5" placeholder=""></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                Savoir Faire
                                <textarea name="message" id="message" required="required" class="form-control" rows="5" placeholder=""></textarea>
                            </div>                        
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Valider">
                                <input type="reset" name="reset" class="btn btn-primary centr" value="Annuler">
                            </div>


                        </form>
                    </div>


                </div>  
            </div>	
        </div><!--/#contact-page-->





        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/gmaps.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>