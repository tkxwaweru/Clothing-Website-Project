<?php
//137931 Trevor Waweru ICS (2B)

require("connect.php");

$sub_category_name=$_POST['subCategoryName'];
$sub_category_description=$_POST['subCategoryDescription'];

$sql="INSERT INTO `subcategories` (`subCategoryName`, `subCategoryDescription`) 
VALUES ('$sub_category_name','$sub_category_description')";

if(mysqli_query($conn, $sql)){
    echo "Details saved successfully";
}
else{
    echo "Error: Record not saved".mysqli_error($conn);
}

?>