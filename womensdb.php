<?php
// 137931 Trevor Waweru ICS (2B)
require("connect.php");

$sqli="SELECT * FROM `products` WHERE `categoryID`=2";
$result = mysqli_query($conn , $sqli);
$test=mysqli_fetch_all($result, MYSQLI_ASSOC);

?>