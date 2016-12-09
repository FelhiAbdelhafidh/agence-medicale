<!Doctype>
<?php
include("../config/db.php");
?>
<html>
    <head>
        <title>Inserer Famille</title>

    </head>
    <body bgcolor="DimGray">



        <form action="insert_famil.php" method="post" >

            <table align="center" width="700" border="2" bgcolor="DodgerBlue   ">
                <img  src="product_images/admin.png" style="float:left;margin:0 10px 0 20px;/>
                      <tr align="center">
                      <td colspan="7"><h2>Inserer nouvelle famille</h2></td>
                </tr>


                <tr>
                    <td align="right" ><b>Nom Famille:</b></td>
                    <td><input type="text" name="product_title" size ="60"  /></td>
                </tr>
                <tr>
                    <td align="right"><b>Categorie Famille:</b></td>
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
                    <td align="right" ><b>Ordre Famille:</b></td>
                    <td><input type="text" name="product_ordr" size ="60"  /></td>
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
    $product_ordr = $_POST['product_ordr'];



    $insert_product = "insert into famille(fam_nom,fam_ordre,cat_id) 
		values ('$product_title','$product_ordr','$product_cat')";

    $insert_pro = mysqli_query($con, $insert_product);
    if ($insert_pro) {

        echo "<script>alert('ajout réussie !')</script>";
        echo "<script>window.open('insert_famil.php','_self')</script>";
    } else {

        echo "<script>alert('ajout non fait!')</script>";
    }
}
?>


