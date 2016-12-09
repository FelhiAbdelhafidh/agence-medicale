<!Doctype>
<?php
include("../config/db.php");
?>
<html>
    <head>
        <title>Inserer Marque</title>

    </head>
    <body bgcolor="DimGray">



        <form action="insert_marq.php" method="post" enctype="multipart/form-data" >

            <table align="center" width="700" border="2" bgcolor="DodgerBlue   ">
                <img  src="product_images/admin.png" style="float:left;margin:0 10px 0 20px;/>
                      <tr align="center">
                      <td colspan="7"><h2>Inserer nouvelle marque</h2></td>
                </tr>


                <tr>
                    <td align="right" ><b>Nom Marque:</b></td>
                    <td><input type="text" name="product_title" size ="60"  /></td>
                </tr>
                <tr>
                    <td align="right"><b>Image Produit:</b></td>
                    <td><input type="file" name="product_image" /></td>
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

//image

    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($product_image_tmp, "product_images/$product_image");





    $insert_product = "insert into marque(marq_nom,marq_image) 
		values ('$product_title','$product_image')";

    $insert_pro = mysqli_query($con, $insert_product);
    if ($insert_pro) {

        echo "<script>alert('ajout réussie !')</script>";
        echo "<script>window.open('insert_marq.php','_self')</script>";
    } else {

        echo "<script>alert('ajout non fait!')</script>";
    }
}
?>


