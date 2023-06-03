<?php

require("connect.php");

require("order_kids.php");

if(isset($_POST['checkout'])){
$sql="INSERT INTO `cart` (`productID`, `productImage`, `productName`, `productQuantity`) 
VALUES ('$id','$image','$name','$quantity')";

if(mysqli_query($conn, $sql)){ 
    echo "Items stored successfully.<br><br>";

    echo "<a href='checkout.php'>PROCEED TO CHECKOUT</a>";
    
}
else{
    echo "Error: Bad input".mysqli_error($conn);
}
}

?>