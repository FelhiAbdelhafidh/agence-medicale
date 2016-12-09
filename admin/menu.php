<!Doctype>
<?php
include("../config/db.php");
?>
<html>
    <head>
        <title>Menu</title>
        <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>
    </head>
    <body bgcolor="DimGray">
        <form action="menu.php" method="post" enctype="multipart/form-data">

            <table align="center" width="700" border="2" bgcolor="DodgerBlue   ">
                <img  src="product_images/admin.png" style="float:left;margin:0 10px 0 50px;">

                <tr align="center">
                    <td colspan="7"><h2>Produit</h2></td>
                </tr>
                <tr>
                    <td align="right"><b>liste Produit:</b></td>
                    <td>
                        <select name="produit" >
                            <option>Selection produit</option>
                            <?php
                            $get_brands = "select * from produit";

                            $run_brands = mysqli_query($con, $get_brands);

                            while ($row_brands = mysqli_fetch_array($run_brands)) {
                                $brand_id = $row_brands['prod_id'];
                                $brand_title = $row_brands['prod_nom'];
                                echo "<option value='$brand_id'>$brand_title</option>";
                            }
                            ?>

                        </select>
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="7"><input type="submit" name="sup_prod"  value ="Supprimer" /></td>
                </tr>
                <?php
                if (isset($_POST['sup_prod'])) {
                    //obtenir text a partir du forml

                    $product_title = $_POST['produit'];
                    $delete_product = " DELETE   from produit where prod_nom ='$product_title'";
                    $delete_pro = mysqli_query($con, $delete_product);
                    if ($delete_pro) {
                        echo "<script>alert('supression réussie !')</script>";
                        echo "<script>window.open('menu.php','_self')</script>";
                    } else {
                        echo "<script>alert('supression non fait!')</script>";
                    }
                }
                ?>
                <tr align="center">
                    <td colspan="7"><input type="submit" name="insert_post"  value ="Modifier"/></td>
                </tr>
                <tr align="center">
                    <td colspan="7"><input type="button" name="insert_post"  value ="Ajouter" onclick="self.location.href = 'insert_product.php'" /></td>
                </tr>

                <tr align="center">
                    <td colspan="7"><h2>Categorie</h2></td>
                </tr>
                <tr>
                    <td align="right"><b>liste categorie:</b></td>
                    <td>
                        <select name="product_brand" >
                            <option>Selection categorie</option>
                            <?php
                            $get_brands = "select * from categorie";

                            $run_brands = mysqli_query($con, $get_brands);

                            while ($row_brands = mysqli_fetch_array($run_brands)) {
                                $brand_id = $row_brands['cat_id'];
                                $brand_title = $row_brands['cat_nom'];
                                echo "<option value='$brand_id'>$brand_title</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="7"><input type="submit" name="insert_post"  value ="Supprimer"/></td>
                </tr>

                <tr align="center">
                    <td colspan="7"><input type="submit" name="insert_post"  value ="Modifier"/></td>
                </tr>

                <tr align="center">

                    <td colspan="7"><input type="button" name="insert_post"  value ="Ajouter" onclick="self.location.href = 'insert_cat.php'" /></td>
                </tr>
                <tr align="center">
                    <td colspan="7"><h2>Famille</h2></td>
                </tr>
                <tr>
                    <td align="right"><b>liste famille:</b></td>
                    <td>
                        <select name="product_brand" >
                            <option>Selection famille</option>
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
                <tr align="center">
                    <td colspan="7"><input type="submit" name="insert_post"  value ="Supprimer"/></td>
                </tr>			
                <tr align="center">
                    <td colspan="7"><input type="submit" name="insert_post"  value ="Modifier"/></td>
                </tr>			
                <tr align="center">
                    <td colspan="7"><input type="button" name="insert_post"  value ="Ajouter" onclick="self.location.href = 'insert_famil.php'" /></td>			
                </tr>
                <tr align="center">
                    <td colspan="7"><h2>Marque</h2></td>
                </tr>
                <tr>
                    <td align="right"><b>liste marque:</b></td>
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
                <tr align="center">
                    <td colspan="7"><input type="submit" name="insert_post"  value ="Supprimer"/></td>
                </tr>			
                <tr align="center">
                    <td colspan="7"><input type="submit" name="insert_post"  value ="Modifier"/></td>
                </tr>			
                <tr align="center">
                    <td colspan="7"><input type="button" name="insert_post"  value ="Ajouter" onclick="self.location.href = 'insert_marq.php'" /></td>			
                </tr>
                <tr align="center">
                    <td colspan="7"><h2>Menu Principale</h2></td>
                </tr>
                <tr>
                    <td align="right"><b>Menu </b></td>
                    <td>
                        <select name="product_brand" >
                            <option>Selection menu</option>

                        </select>
                    </td>


                <tr align="center">
                    <td colspan="7"><input type="submit" name="insert_post"  value ="Modifier"/></td>
                </tr>
                <tr align="center">
                    <td colspan="7"><h2>Presentation site</h2></td>
                </tr>
                <tr>
                    <td align="right"><b>Presentation </b></td>
                    <td>
                        <select name="product_brand" >
                            <option>Selection partie</option>

                        </select>
                    </td>


                <tr align="center">
                    <td colspan="7"><input type="submit" name="insert_post"  value ="Modifier"/></td>
                </tr>


            </table>

        </form>
    </body>
</html>


