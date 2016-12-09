<!Doctype>
<?php
include("../config/db.php");
?>
<html>
    <head>
        <title>Inserer Produuit</title>
        <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>
    </head>
    <body bgcolor="DimGray">


        <form action="insert_product.php" method="post" enctype="multipart/form-data">

            <table align="center" width="700" border="2" bgcolor="DodgerBlue   ">
                <img  src="product_images/admin.png" style="float:left;margin:0 10px 0 20px;>

                      <tr align="center">
                      <td colspan="7"><h2>Inserer nouveau produit</h2></td>
                </tr>


                <tr>
                    <td align="right" ><b>Nom Produit:</b></td>
                    <td><input type="text" name="product_title" size ="60"  /></td>
                </tr>
                <tr>
                    <td align="right"><b>Image Produit:</b></td>
                    <td><input type="file" name="product_image" /></td>
                </tr>
                <tr>
                    <td align="right"><b>Categorie produit:</b></td>
                    <td>
                        <select name="product_cat" >
                            <option>Selection categorie</option>
                            <?php
                            $get_cats = "select * from categorie";

                            $run_cats = mysqli_query($con, $get_cats);

                            while ($row_cats = mysqli_fetch_array($run_cats)) {
                                $cat_id = $row_cats['cat_id'];
                                $cat_nom = $row_cats['cat_nom'];
                                echo "<option value='$cat_id'>$cat_nom</option>";
                            }
                            ?>

                        </select>


                    </td>
                </tr>

                <tr>
                    <td align="right"><b>famille Produit:</b></td>
                    <td>
                        <select name="product_fam" >
                            <option>Selection marque</option>
                            <?php
                            $get_brands = "select * from famille";

                            $run_brands = mysqli_query($con, $get_brands);

                            while ($row_brands = mysqli_fetch_array($run_brands)) {
                                $brand_id = $row_brands['fam_id'];
                                $brand_title = $row_brands['fam_nom'];
                                echo "<option value='$brand_id'>$brand_title</option>";
                            }
                            ?>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td align="right"><b>Marque Produit:</b></td>
                    <td>
                        <select name="product_brand" >
                            <option>Selection marque</option>
                            <?php
                            $get_brands = "select * from marque";

                            $run_brands = mysqli_query($con, $get_brands);

                            while ($row_brands = mysqli_fetch_array($run_brands)) {
                                $brand_id = $row_brands['marq_id'];
                                $brand_title = $row_brands['marq_nom'];
                                echo "<option value='$brand_id'>$brand_title</option>";
                            }
                            ?>

                        </select>
                    </td>
                </tr>



                <tr>
                    <td align="right"><b>Description Produit:</b></td>
                    <td><textarea  name="product_desc" cols="20" rows="5" ></textarea></td>
                </tr>
                <tr>
                    <td align="right"><b>Specidfication Produit:</b></td>
                    <td><textarea  name="product_spec" cols="20" rows="5" ></textarea></td>
                </tr>

                <tr>
                    <td align="right" ><b>Ordre Produit:</b></td>
                    <td><input type="text" name="product_ordr" size ="60"  /></td>
                </tr>



                <tr>
                    <td align="right"><b>Etat Produit:</b></td>
                    <td>
                        <select name="product_etat" >
                            <option>Etat</option>
                            <option value="promotion">promotion</option>
                            <option value="nouveaute">nouveaute</option>

                        </select>
                    </td>
                </tr>





                <tr align="center">

                    <td colspan="7"><input type="submit" name="insert_post"  value ="Inserer"/></td>
                </tr>








            </table>
        </form>
    </body>
</html>
<?php
if (isset($_POST['insert_post'])) {
    //obtenir text a partir du forml
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_fam = $_POST['product_fam'];
    $product_brand = $_POST['product_brand'];
    $product_spec = $_POST['product_spec'];
    $product_desc = $_POST['product_desc'];
    $product_ordr = $_POST['product_ordr'];
    $product_etat = $_POST['product_etat'];
//image

    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($product_image_tmp, "product_images/$product_image");

    $insert_product = "insert into produit(cat_id,marq_id,prod_nom,prod_spec,prod_desc,prod_image,fam_id,prod_ordre,prod_etat) 
		values ('$product_cat','$product_brand','$product_title','$product_spec','$product_desc','$product_image','$product_fam','$product_ordr','$product_etat')";

    $insert_pro = mysqli_query($con, $insert_product);
    if ($insert_pro) {

        echo "<script>alert('ajout réussie !')</script>";
        echo "<script>window.open('insert_product.php','_self')</script>";
    } else {

        echo "<script>alert('ajout non fait!')</script>";
    }
}
?>


