<?php
//137931 Trevor Waweru ICS (2B)
require("connect.php");

$product_name=$_POST['productName'];
$product_description=$_POST['productDescription'];
$product_size=$_POST['productSize'];
$product_colour=$_POST['productColour'];
$filename = $_FILES['productImage']['name'];
$temp_name = $_FILES['productImage']['tmp_name'];
$folder="Images/".$filename;
$product_image=$folder.basename($_FILES["productImage"]["name"]);
$product_unit_price=$_POST['productUnitPrice'];
$product_quantity=$_POST['productQuantity'];
$category_ID=$_POST['categoryID'];
$sub_category_ID=$_POST['subCategoryID'];

$sql="INSERT INTO `products` (`productName`, `productDescription`,`productSize`,`productColour`, 
`productImage`, `productUnitPrice`,`productQuantity`, `categoryID`, `subCategoryID`) 
VALUES ('$product_name','$product_description','$product_size','$product_colour','$folder','$product_unit_price',
'$product_quantity','$category_ID','$sub_category_ID')";

if(mysqli_query($conn, $sql)){
    if(move_uploaded_file($temp_name, $folder)){
    echo "<br><br>Details saved successfully";
    }
    else{
        echo "Failed to add product";
    }
}
else{
    echo "Error: Record not saved".mysqli_error($conn);
}

?>