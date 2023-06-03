<?php
// 137931 Trevor Waweru ICS (2B)
require("connect.php");

require("connect.php");

$sqli="SELECT * FROM `categories`";
$result = mysqli_query($conn , $sqli);
$test=mysqli_fetch_all($result, MYSQLI_ASSOC);
/*
echo "<pre>";
print_r($test);
echo "<pre>";

foreach($test as $key=>$value){
    //print_r($value);
    echo $value["categoryID"];

  
}
*/
?>