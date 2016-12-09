<?php

include("config/db.php");

//obtenir categories

function ObtenirCats() {
    global $con;
    $get_cats = "select * from categorie order by cat_ordre ";

    $run_cats = mysqli_query($con, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)) {
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_nom'];
        $cat_ordre = $row_cats['cat_ordre'];
        echo "
	
			<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
										
											
								<h4 class='panel-title'><a href='index.php?cat=$cat_id'>$cat_title </h4>
										
									
								</div>
								
							</div>

	";
    }
}

//obtenir marques

function ObtenirMarqs() {
    global $con;
    $get_brands = "select * from marque";

    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $marq_id = $row_brands['marq_id'];
        $marq_nom = $row_brands['marq_nom'];
        $marq_image = $row_brands['marq_image'];
        echo "
	<div class='brands-name'>
								<ul class='nav nav-pills nav-stacked'>
									<li>$marq_nom</li>
									<li><a href='index.php?marq=$marq_id'> <span class='pull-right'></span><img src='admin/product_images /$marq_image'  /></a></li>
									
									
								</ul>
	</div>
	
	
	";
    }
}

//obtenir familles

function Obtenirfamille() {
    global $con;
    $get_brands = "select * from famille order by fam_ordre";

    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $fam_id = $row_brands['fam_id'];
        $fam_nom = $row_brands['fam_nom'];
        $fam_ordre = $row_brands['fam_ordre'];
        $cat_id = $row_brands['cat_id'];
        echo "
	
		<li><a href='index.php?fam=$fam_id'>$fam_nom</a></li>
		";
    }
}

//obtenir produit
function getPro() {
    if (!isset($_GET['cat'])) {
        if (!isset($_GET['marq'])) {
            if (!isset($_GET['fam'])) {
                global $con;
                $get_pro = "select * from produit order by prod_ordre LIMIT 0,6 ";
                $run_pro = mysqli_query($con, $get_pro);
                while ($row_pro = mysqli_fetch_array($run_pro)) {
                    $pro_id = $row_pro['prod_id'];
                    $prod_nom = $row_pro['prod_nom'];
                    $prod_image = $row_pro['prod_image'];
                    $cat_id = $row_pro['cat_id'];
                    $fam_id = $row_pro['fam_id'];
                    $marq_id = $row_pro['marq_id'];
                    $prod_spec = $row_pro['prod_spec'];
                    $prod_desc = $row_pro['prod_desc'];
                    $prod_ordre = $row_pro['prod_ordre'];
                    $prod_etat = $row_pro['prod_etat'];

                    if ($prod_etat == 'nouveaute') {
                        echo "
	
	<div class='col-sm-4'>
							<div class='product-image-wrapper'>
			<div class='single-products'>
				<div class='productinfo text-center'>
					<img onClick='click()' src='admin/product_images/$prod_image' />
						<h2>$prod_nom</h2>
						<p>$prod_spec</p>
	
				</div>
				<div class='product-overlay'>
					<div class='overlay-content'>
											
			
			       <p>$prod_desc</p>
			
			
		            </div>
						</div>
			
			
			<img src='admin/product_images/new.png' class='new'  />
			</div> 
			
			</div>
						</div>
						
			
			";
                    } else {


                        echo "
	
	<div class='col-sm-4'>
							<div class='product-image-wrapper'>
			<div class='single-products'>
				<div class='productinfo text-center'>
					<img src='admin/product_images/$prod_image' />
						<h2>$prod_nom</h2>
						<p>$prod_spec</p>
	
				</div>
				<div class='product-overlay'>
					<div class='overlay-content'>
											
			
			       <p>$prod_desc</p>
			
			
		            </div>
						</div>
			
			
			<img src='admin/product_images/sale.png' class='new'  />
			</div> 
			
			</div>
						</div>
						
			
			";
                    }
                }
            }
        }
    }
}

// obtenir tous les produits

function getAllPro() {
    if (!isset($_GET['cat'])) {
        if (!isset($_GET['marq'])) {
            if (!isset($_GET['fam'])) {
                global $con;
                $get_pro = "select * from produit order by prod_ordre  ";
                $run_pro = mysqli_query($con, $get_pro);
                while ($row_pro = mysqli_fetch_array($run_pro)) {
                    $pro_id = $row_pro['prod_id'];
                    $prod_nom = $row_pro['prod_nom'];
                    $prod_image = $row_pro['prod_image'];
                    $cat_id = $row_pro['cat_id'];
                    $fam_id = $row_pro['fam_id'];
                    $marq_id = $row_pro['marq_id'];
                    $prod_spec = $row_pro['prod_spec'];
                    $prod_desc = $row_pro['prod_desc'];
                    $prod_ordre = $row_pro['prod_ordre'];
                    $prod_etat = $row_pro['prod_etat'];

                    if ($prod_etat == 'nouveaute') {
                        echo "
	
	<div class='col-sm-4'>
							<div class='product-image-wrapper'>
			<div class='single-products'>
				<div class='productinfo text-center'>
					<img onClick='click()' src='admin/product_images/$prod_image' />
						<h2>$prod_nom</h2>
						<p>$prod_spec</p>
	
				</div>
				<div class='product-overlay'>
					<div class='overlay-content'>
											
			
			       <p>$prod_desc</p>
			
			
		            </div>
						</div>
			
			
			<img src='admin/product_images/new.png' class='new'  />
			</div> 
			
			</div>
						</div>
						
			
			";
                    } else {


                        echo "
	
	<div class='col-sm-4'>
							<div class='product-image-wrapper'>
			<div class='single-products'>
				<div class='productinfo text-center'>
					<img src='admin/product_images/$prod_image' />
						<h2>$prod_nom</h2>
						<p>$prod_spec</p>
	
				</div>
				<div class='product-overlay'>
					<div class='overlay-content'>
											
			
			       <p>$prod_desc</p>
			
			
		            </div>
						</div>
			
			
			<img src='admin/product_images/sale.png' class='new'  />
			</div> 
			
			</div>
						</div>
						
			
			";
                    }
                }
            }
        }
    }
}

//plus visionnes
function getProVisonActi() {
    if (!isset($_GET['cat'])) {
        if (!isset($_GET['marq'])) {
            if (!isset($_GET['fam'])) {
                global $con;
                $get_pro = "select * from produit where prod_etat='nouveaute' order by RAND() LIMIT 0,3 ";
                $run_pro = mysqli_query($con, $get_pro);
                while ($row_pro = mysqli_fetch_array($run_pro)) {
                    $pro_id = $row_pro['prod_id'];
                    $prod_nom = $row_pro['prod_nom'];
                    $prod_image = $row_pro['prod_image'];
                    $cat_id = $row_pro['cat_id'];
                    $fam_id = $row_pro['fam_id'];
                    $marq_id = $row_pro['marq_id'];
                    $prod_spec = $row_pro['prod_spec'];
                    $prod_desc = $row_pro['prod_desc'];
                    $prod_ordre = $row_pro['prod_ordre'];
                    $prod_etat = $row_pro['prod_etat'];


                    echo "
<div class='col-sm-4'>
										<div class='product-image-wrapper'>
											<div class='single-products'>
												<div class='productinfo text-center'>
												<h2>$prod_nom</h2>
													<img  src='admin/product_images/$prod_image' />
													
												</div>
												
											</div>
										</div>
									</div>
   ";
                }
            }
        }
    }
}

//les produits d'une marque qlq

function obtenirProduitMarq() {
    if (isset($_GET['marq'])) {

        $brand_id = $_GET['marq'];

        global $con;
        $get_brand_pro = "select * from produit where marq_id='$brand_id '";
        $run_brand_pro = mysqli_query($con, $get_brand_pro);

        $count_brand = mysqli_num_rows($run_brand_pro);

        if ($count_brand == 0) {
            echo "<h2 style='padding:20px;color:red;'>Pas de produit pour cette marque !</h2>";
        }


        while ($row_pro = mysqli_fetch_array($run_brand_pro)) {


            $pro_id = $row_pro['prod_id'];
            $prod_nom = $row_pro['prod_nom'];
            $prod_image = $row_pro['prod_image'];
            $cat_id = $row_pro['cat_id'];
            $fam_id = $row_pro['fam_id'];
            $marq_id = $row_pro['marq_id'];
            $prod_spec = $row_pro['prod_spec'];
            $prod_desc = $row_pro['prod_desc'];
            $prod_ordre = $row_pro['prod_ordre'];
            $prod_etat = $row_pro['prod_etat'];

            echo "
	
	<div class='col-sm-4'>
							<div class='product-image-wrapper'>
			<div class='single-products'>
				<div class='productinfo text-center'>
					<img src='admin/product_images/$prod_image' />
						<h2>$prod_nom</h2>
						<p>$prod_spec</p>
	
				</div>
				<div class='product-overlay'>
					<div class='overlay-content'>
											
			
			       <p>$prod_desc</p>
			
			
		            </div>
						</div>
			
			
			
			</div> 
			
			</div>
						</div>
						
			
			";
        }
    }
}

//les produits d'une famille qlqc

function obtenirProduitFamil() {
    if (isset($_GET['fam'])) {

        $brand_id = $_GET['fam'];

        global $con;
        $get_brand_pro = "select * from produit where fam_id='$brand_id '";
        $run_brand_pro = mysqli_query($con, $get_brand_pro);

        $count_brand = mysqli_num_rows($run_brand_pro);

        if ($count_brand == 0) {
            echo "<h2 style='padding:20px;color:red;'>Pas de produit pour cette famille !</h2>";
        }


        while ($row_pro = mysqli_fetch_array($run_brand_pro)) {


            $pro_id = $row_pro['prod_id'];
            $prod_nom = $row_pro['prod_nom'];
            $prod_image = $row_pro['prod_image'];
            $cat_id = $row_pro['cat_id'];
            $fam_id = $row_pro['fam_id'];
            $marq_id = $row_pro['marq_id'];
            $prod_spec = $row_pro['prod_spec'];
            $prod_desc = $row_pro['prod_desc'];
            $prod_ordre = $row_pro['prod_ordre'];
            $prod_etat = $row_pro['prod_etat'];

            echo "
	
	<div class='col-sm-4'>
							<div class='product-image-wrapper'>
			<div class='single-products'>
				<div class='productinfo text-center'>
					<img src='admin/product_images/$prod_image' />
						<h2>$prod_nom</h2>
						<p>$prod_spec</p>
	
				</div>
				<div class='product-overlay'>
					<div class='overlay-content'>
											
			
			       <p>$prod_desc</p>
			
			
		            </div>
						</div>
			
			
			
			</div> 
			
			</div>
						</div>
						
			
			";
        }
    }
}

//recherche
function chercher() {


    if (isset($_GET['search'])) {

        $search_query = $_GET['user_query'];

        global $con;
        $get_pro = "select * from produit where prod_desc like '%$search_query%' order by prod_ordre ";
        $run_pro = mysqli_query($con, $get_pro);

        $count_prod = mysqli_num_rows($run_pro);

        if ($count_prod == 0) {
            echo "<h2 style='padding:20px;color:red;'>Pas de produit pour ce recherche!</h2>";
        }

        while ($row_pro = mysqli_fetch_array($run_pro)) {
            $pro_id = $row_pro['prod_id'];
            $prod_nom = $row_pro['prod_nom'];
            $prod_image = $row_pro['prod_image'];
            $cat_id = $row_pro['cat_id'];
            $fam_id = $row_pro['fam_id'];
            $marq_id = $row_pro['marq_id'];
            $prod_spec = $row_pro['prod_spec'];
            $prod_desc = $row_pro['prod_desc'];
            $prod_ordre = $row_pro['prod_ordre'];
            $prod_etat = $row_pro['prod_etat'];

            if ($prod_etat == 'nouveaute') {
                echo "
	
	<div class='col-sm-4'>
							<div class='product-image-wrapper'>
			<div class='single-products'>
				<div class='productinfo text-center'>
					<img src='admin/product_images/$prod_image' />
						<h2>$prod_nom</h2>
						<p>$prod_spec</p>
	
				</div>
				<div class='product-overlay'>
					<div class='overlay-content'>
											
			
			       <p>$prod_desc</p>
			
			
		            </div>
						</div>
			
			
			<img src='admin/product_images/new.png' class='new'  />
			</div> 
			
			</div>
						</div>
						
			
			";
            } else {


                echo "
	
	<div class='col-sm-4'>
							<div class='product-image-wrapper'>
			<div class='single-products'>
				<div class='productinfo text-center'>
					<img src='admin/product_images/$prod_image' />
						<h2>$prod_nom</h2>
						<p>$prod_spec</p>
	
				</div>
				<div class='product-overlay'>
					<div class='overlay-content'>
											
			
			       <p>$prod_desc</p>
			
			
		            </div>
						</div>
			
			
			<img src='admin/product_images/sale.png' class='new'  />
			</div> 
			
			</div>
						</div>
						
			
			";
            }
        }
    }
}

//categorie des familles
?>