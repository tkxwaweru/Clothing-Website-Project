<?php
//print_r($_POST);

//assigning variables to keys

require("connect.php");

$firstName=$_POST['fName'];
//echo $firstName;

$lastName=$_POST['lName'];
//echo $lastName;

$sex=$_POST['sex'];
//echo $Sex;

$phoneNumber=$_POST['phone_number'];
//echo $phoneNumber;

$E_mail=$_POST['email'];
//echo $E_mail;

$P_word=$_POST['password'];
//echo $P_word;

$sql="INSERT INTO `users` (`fName`, `lName`, `sex`, `phone_number`, `email`, `password`) 
VALUES ('$firstName','$lastName','$sex','$phoneNumber','$E_mail','$P_word')";

if(mysqli_query($conn, $sql)){
    echo "Details saved successfully";
}
else{
    echo "Error: Record not saved".mysqli_error($conn);
}

?>