<?php

require("connect.php");

$firstName=$_POST['fName'];

$lastName=$_POST['lName'];

$phoneNumber=$_POST['phone_number'];

$E_mail=$_POST['email'];

$residence=$_POST['residence'];

$sql="INSERT INTO `orders` (`fName`, `lName`, `phone_number`, `email`, `residence`) 
VALUES ('$firstName','$lastName','$phoneNumber','$E_mail','$residence')";

if(mysqli_query($conn, $sql)){ ?>
    <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Checkout confirmation</title>
        <link rel="stylesheet" href="index_style.css">
    </head>
    <body>
    <div class="message">
    <h1>THANK YOU FOR SHOPPING WITH US!</h1>
    <br>
    <h2>Your clothing items shall be ready for delivery in the next 72 hours.</h2> 
    <h2>We shall notify you when they are ready via email.</h2>
    <br>
    <h3>Contact us at:<br>
        Tel: 0712345678<br>
        Email: 254urban@gmail.com
    </h3>
    <div>
    <br>
    <br>
    <a class="f_button" href="index.php">BACK TO HOMEPAGE</a>
    </body>
</html>
<?PHP
}
else{
    echo "Error: Bad input".mysqli_error($conn);
}

?>