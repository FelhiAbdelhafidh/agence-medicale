<!Doctype>
<?php
include("../config/db.php");
?>
<html>
    <head>
        <title>Inserer Famille</title>

    </head>
    <body bgcolor="DimGray">



        <form action="insert_cat.php" method="post" >

            <table align="center" width="700" border="2" bgcolor="DodgerBlue   ">
                <img  src="product_images/admin.png" style="float:left;margin:0 10px 0 20px;/>
                      <tr align="center">
                      <td colspan="7"><h2>Inserer nouvelle Categorie</h2></td>
                </tr>


                <tr>
                    <td align="right" ><b>Nom Categorie:</b></td>
                    <td><input type="text" name="product_title" size ="60"  /></td>
                </tr>

                <tr>
                    <td align="right" ><b>Ordre Categorie:</b></td>
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
    $product_ordr = $_POST['product_ordr'];



    $insert_product = "insert into categorie(cat_nom,cat_ordre) 
		values ('$product_title','$product_ordr')";

    $insert_pro = mysqli_query($con, $insert_product);
    if ($insert_pro) {

        echo "<script>alert('ajout réussie !')</script>";
        echo "<script>window.open('insert_cat.php','_self')</script>";
    } else {

        echo "<script>alert('ajout non fait!')</script>";
    }
}
?>


