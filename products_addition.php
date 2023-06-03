<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Product addition</title>
        <link rel="stylesheet" href="products_addition_style.css">
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
                <div class="title">Product addition</div>
                    <form method="post" action="process_products_addition.php" enctype="multipart/form-data">
                        <div class="user_details">
                            <div class="input_box">
                                <span class="details">Product Name</span>
                                <input class="input" type="text" placeholder="Enter the product name" id="product_name" name="productName" required>
                            </div>
                            <div class="input_box">
                                <span class="details">Product Description</span>
                                <textarea class="input" placeholder="Enter the product description" id="product_description" 
                                name="productDescription" rows="5" columns="100" required></textarea>
                            </div>
                            <div class="input_box">
                                <span class="details">Product Size</span>
                                <input class="input" type="text" placeholder="Enter the product size" id="product_size" name="productSize" required>
                            </div>
                            <div class="input_box">
                                <span class="details">Product colour</span>
                                <input class="input" type="text" placeholder="Enter the product colour" id="product_colour" name="productColour" required>
                            </div>
                            <div class="input_box">
                                <span class="details">Product Image</span>
                                <input class="input" type="file" id="product_image" name="productImage" required>
                            </div>
                            <div class="input_box">
                                <span class="details">Product Unit Price</span>
                                <input class="input" type="text" placeholder="Enter the product price" id="product_unit_price" name="productUnitPrice" required>
                            </div>
                            <div class="input_box">
                                <span class="details">Product Quantity</span>
                                <input class="input" type="text" placeholder="Enter the product Quantity" id="product_quantity" name="productQuantity" required>
                            </div>
                            <div class="input_box">
                                <span class="details">Category</span>
                                <select class="input" name="categoryID" id="category_ID">
                                <?php
                                    require_once("categoriesdb.php");
                                    for($i = 0; $i < count($test); $i++){
                                ?>
                                    <option value=<?php echo $test[$i]['categoryID']; ?>><?php echo $test[$i]['categoryName']; ?></option>  
                                <?php }
                                ?>
                                </select>
                            </div>
                            <div class="input_box">
                                <span class="details">Sub-category</span>
                                <select class="input" name="subCategoryID" id="sub_category_ID">
                                <?php
                                    require_once("subcategoriesdb.php");
                                    for($i = 0; $i < count($test); $i++){
                                ?>
                                    <option value=<?php echo $test[$i]['subCategoryID']; ?>><?php echo $test[$i]['subCategoryName']; ?></option>  
                                <?php }
                                ?>
                                </select>
                            </div>
                        </div>
                                <input class="button" type="submit" value="Add">
                            </div>
                        </div>
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