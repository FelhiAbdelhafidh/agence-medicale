<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a ><i class="fa fa-phone"></i> +00 216 23 255 173</a></li>
                            <li><a ><i class="fa fa-envelope"></i>E-Mail:felhiabdelhafidh@gmail.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a ><i class="fa fa-facebook"></i></a></li>
                            <li><a ><i class="fa fa-twitter"></i></a></li>
                            <li><a ><i class="fa fa-linkedin"></i></a></li>
                            <li><a ><i class="fa fa-dribbble"></i></a></li>
                            <li><a ><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

        <div class="carousel-inner">
            <div class="item active">
                <div class="col-sm-6">
                    <h1><span>A</span>-MEDICALE</h1>
                </div>
            </div>
        </div>
    </div><!--/header_top-->


    <div class="header-bottom"><!--header-bottom-->

        <div class="container">

            <div class="row">
                <div class="col-sm-9">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.php" >Accueil</a></li>
                            <li ><a href="produits.php">Services</a></li> 
                            <li class="dropdown"><a href="#">Produits<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <?php Obtenirfamille();
                                    ?>

                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">À propos<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="qui_sommes_nous.php">Qui sommes nous ?</a></li>
                                    <li><a href="Nos_real.php">Nos realisations</a></li>
                                    <li><a href="contact-us.php">Contact</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">


                    <form method="get" action="results.php" enctype="multipart/form-data">
                        <input type="text" name="user_query" placeholder="chercher produit" />
                        <input type="submit" name="search" value="Search" />

                    </form>

                </div>
            </div>

        </div>
    </div><!--/header-bottom-->

</header><!--/header-->