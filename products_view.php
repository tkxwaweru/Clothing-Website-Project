<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Products</title>
        <link rel="stylesheet" href="products_view.css">
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
                        <li><a href="display_products.php"></a>Products</li>
                        <li><a href="cart.html"></a>Cart</li>                      
                    </ul>
                </nav> 
            </div> 
        </div>
        <br>
        <br>
        <div class="grid-container">
                <?php
                 require_once("productsdb.php");
                 foreach ($test as $key => $value){
                 ?>
            <div class="grid-item"><?php echo "<img src='".$value["productImage"]."' 
            style='width: 300px; height: 270px;'"?>
            <br>
            <br>
            <?php echo $value["productName"]?>
            <br>
            <?php echo "Size: ".$value["productSize"]?>
            <br>
            <?php echo "Colour: ".$value["productColour"]?>
            <br>
            <?php echo "Price: Ksh ".$value["productUnitPrice"] ?>
            <br>
            <a href="sign_in.php" class="f_button">SHOP NOW</a>
            </div>
            <?php }
             ?>
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
