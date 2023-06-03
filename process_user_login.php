<?php
require_once("connect.php");
session_start();

if (isset($_POST['button1'])){

$email = $_POST['email'];
$password = $_POST['password'];

if(empty($email) || empty($password)){
    echo "Please fill in your details";
} else {
    $sql = "select * from users where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
        $password = $row['password'];
        $_SESSION['email'] = $email;
        //echo "sign in successful";
        header("location:welcome_user.php");
    }   else {
        echo "Incorrect Password!";
    }

}   
}else{
    //echo "Check your query";
}
?>