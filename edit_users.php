<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit users</title>
        <link rel="stylesheet" href="registration_style.css">
    </head>
    <body>
        <div class="af_container1">
            <div class="navigation_bar">
                <input type="text" placeholder="Search"></li>
                <div class="logo">
                    <img src="Images/Logo.png" width="150px"> 
                </div>
                <nav>
                    <ul>
                        <li><a href="sign_in.php">Account</a></li>
                        <li><a href="support_page.html"></a>Support</li>
                        <li><a href="wishlist.html"></a>Wishlist</li>
                        <li><a href="cart.html"></a>Cart</li>                      
                    </ul>
                </nav> 
            </div> 
        </div>
        <div class="register_space">
            <div class="content_container">
                <div class="title">Edit User Details</div>
                <form class="search-form" action="" method="get" class="input_box">
                <section class="registration">
                            <ul>
                                <br><br>
                             
                                    <label for="userID">Enter user ID</label>
                                    <input type="text" class="input" name="userID" value="<?php if(isset($_GET["userID"])){echo $_GET["userID"];}  ?>">
                                    <br><br>
                                    <input type="submit" class="button" value="SEARCH" name="search">                       
                </section>
                </form>
                <hr>
                <?php 
                require("connect.php");

                    if(isset($_GET['userID'])){
                        $user_id = $_GET['userID'];
                        $sql = "select * from users where userID ='$user_id'";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                            foreach($result as $row){

                        ?>
                        <form action="" method="POST" class="input_box">

                            <label for="email">Email</label>
                                <input type="text" class="input" value="<?php echo $row['email']; ?>" name="email">
                            <br><br>
                         
                            <label for="phone_number">Phone Number</label>
                                <input type="text" class="input" value="<?php echo $row['phone_number']; ?>" name="phone_number">
                            <br><br>
                                
                            <label for="password">Password</label>
                                <input type="text" class="input" value="<?php echo $row['password']; ?>" name="password">
                            <br><br>

                            <label for="isDeleted">Account Deleted?</label>
                                <input type="text" class="input" value="<?php echo $row['isDeleted']; ?>" name="isDeleted">
                            <br><br>
                            
                                <input type="submit" class="button"  value="UPDATE" name="update">
                                <?php
                                    if(isset($_POST['update'])){
                                        $user_id = $_GET['userID'];
                                        $sql = "UPDATE `users` SET email='$_POST[email]',`password`='$_POST[password]'
                                        ,phone_number='$_POST[phone_number]', isDeleted='$_POST[isDeleted]' WHERE `userID`='$user_id'";
                                        $execute = mysqli_query($conn, $sql);
                                        
                                        if($execute){
                                            echo "<h5 style=color:black;>Records updated Succesfully!</h5>";
                                        } else {echo "<h5 style=color:red;>Records not updated</h5>";}
                                    }
                                ?>
                            <br><br>
                        
                        <?php
                    }
                        } else{ echo "<h3 style=color:red;text-align:center;>No users found!</h3>";}
                    }
                    
                    
                    ?>
                </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="f_container">
                <div class="row">
                    <div class="column">
                        <img src="Images/Logo.png" width="125PX"> 
                        <p>We here at 254 Urban aim to satisfy each and every
                            one of our valued customers.<br>We offer you high value clothing
                            items that will bestow upon you the pride of Africa.<br><br>@TRADEMARK 2022
                        </p>   
                    </div>
                    <div class="column">
                        <h3>Useful links</h3>
                        <ul>
                            <li>Home</li>
                            <li>Shop mens</li>
                            <li>Shop womens</li>
                            <li>Shop kids</li>
                            <li>Offers</li>
                            <li>Cart</li>
                            <li>Wishlists</li>
                            <li>Coupons</li>
                        </ul>                          
                    </div>
                    <div class="column">
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Snapchat</li>
                            <li>Linked in</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>