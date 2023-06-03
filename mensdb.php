<?php
// 137931 Trevor Waweru ICS (2B)
require("connect.php");

$sqli="SELECT * FROM `products` WHERE `categoryID` = 1";
$result = mysqli_query($conn , $sqli);
$test=mysqli_fetch_all($result, MYSQLI_ASSOC);

/*
echo "<pre>";
print_r($test);
echo "<pre>";
*/

session_start();

$out = "";

if(!(isset($_SESSION['cart']))){
    $_SESSION['cart']=array();;
}

if(isset($_GET['productID'])){
    $productID = $_GET['productID'];
    $productQuantity = $_GET['productQuantity'];

    if($productQuantity > 0 && filter_var($productQuantity, FILTER_VALIDATE_INT)){
        if(isset($_SESSION['cart']['$productID'])){
            $_SESSION['cart']['productID'] += $productQuantity;
        }else{
            $_SESSION['cart']['productID'] = $productQuantity;
        }
    }else{
        $out = "Bad input";
    }
}



echo "<pre>";
print_r($_SESSION['cart']);
echo "<pre>";

?>