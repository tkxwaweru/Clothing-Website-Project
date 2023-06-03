
<?php
//137931 Trevor Waweru ICS (2B)

require("connect.php");

$category_name=$_POST['categoryName'];
$category_description=$_POST['categoryDescription'];

$sql="INSERT INTO `categories` (`categoryName`, `categoryDescription`) 
VALUES ('$category_name','$category_description')";

if(mysqli_query($conn, $sql)){
    echo "Details saved successfully";
}
else{
    echo "Error: Record not saved".mysqli_error($conn);
}

?>