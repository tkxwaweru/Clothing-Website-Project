<?php
//137931 Trevor Waweru ICS (2B)

require("connect.php");

/*$sql="INSERT INTO `products` (`productID`, `productName`, `productDescription`, `productColour`, 
`productImage`, `productPrice`,`productQuantity`, `categoryID`, `subCategoryID`, `createdAT`, `updatedAT`, `isDeleted`) 
VALUES ('$product_ID','$product_name','$product_description','$product_colour','$product_image','$product_price',
'$product_quantity','$category_ID','$sub_category_ID','$created_at','$updated_at','$is_deleted')";*/

$sql="SELECT * FROM `categories` WHERE `categoryID` = 1 ";
$result=mysqli_query($conn,$sql);
print_r($result);

/*if(mysqli_query($conn, $sql)){
    echo "<br><br>Content selected successfully";
}
else{
    echo "Error: content not selected ".mysqli_error($conn);
}*/

if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    while($row=mysqli_fetch_assoc($result)){
        echo "<pre>";
        print_r($row);
        echo "<br><br>";
        echo "<pre>";

    }
}

?>