<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>254 Urban Apparel</title>
        <link rel="stylesheet" href="products.css">
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
        <h1>Products</h1>
        <br>
        <table>
            <thead>
                <th>Product</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Size</th>
                <th>Product Colour</th>
                <th>Product Unit Price</th>
                <th>Product Quantity</th>
            </thead>
            <tbody>
                 <?php
                 require_once("productsdb.php");
                 foreach ($test as $key => $value){
                 ?>
             <tr>
                 <td><?php echo "<img src='".$value["productImage"]."' style='width: 100px; height: 100px;'"?></td>
                 <td><?php echo $value["productName"] ?></td>
                 <td><?php echo $value["productDescription"] ?></td>
                 <td><?php echo $value["productSize"] ?></td>
                 <td><?php echo $value["productColour"] ?></td>
                 <td><?php echo $value["productUnitPrice"] ?></td>
                 <td><?php echo $value["productQuantity"] ?></td>
                 <td><button>Add to cart</button></td>
             </tr>
             <?php }
             ?>
         </tbody>
        </table>
        
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
