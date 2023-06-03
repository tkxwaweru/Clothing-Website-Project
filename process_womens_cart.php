<?php

require("connect.php");

require("order_womens.php");

require("process_user_login.php");

$_SESSION['email'] = $email;

if(isset($_POST['checkout'])){
$sql="INSERT INTO `cart` (`userEmail`,`productID`, `productImage`, `productName`, `productQuantity`) 
VALUES ('$email','$id','$image','$name','$quantity')";

if(mysqli_query($conn, $sql)){ 
    echo "Items stored successfully.<br><br>";

    echo "<a href='checkout.php'>PROCEED TO CHECKOUT</a>";
    
}
else{
    echo "Error: Bad input".mysqli_error($conn);
}
}

?>