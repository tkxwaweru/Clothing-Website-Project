<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Administrator menu</title>
        <link rel="stylesheet" href="admin_menu.css">
    </head>
    <body>
        <h1>Welcome Administrator</h1>
        <h2>What would you like to do today?</h2>
        <br>
        <div class="optionsList1">
            <div class="option1">
                <img src="Images\Admin_menu\add_product.jpg" style="width:100%">
                <br><a href="products_addition.php" class="o_button">ADD PRODUCT</a>
            </div>
            <div class="option1">
                <img src="Images\Admin_menu\add_category.jpg" style="width:100%">
                <br><a href="categories.php" class="o_button">ADD CATEGORY</a>
            </div>
            <div class="option1">
                <img src="Images\Admin_menu\add_sub_category.jpg" style="width:100%">
                <br><a href="sub_categories.php" class="o_button">ADD SUB-CATEGORY</a>
            </div>
        </div> 
        <br>   
        <div class="optionsList2">
            <div class="option2">
                <img src="Images\Admin_menu\view_products.jpg" style="width:100%">
                <br><a href="display_products.php" class="o_button">VIEW PRODUCTS</a>
            </div>
            <div class="option2">
                <img src="Images\Admin_menu\view_users.jpg" style="width:100%">
                <br><a href="user_records.php" class="o_button">VIEW USERS</a>
            </div>
            <div class="option2">
                <img src="Images\Admin_menu\log_out.jpg" style="width:100%">
                <br><a href="admin_sign_in.php" class="o_button">LOG OUT</a>
            </div>
        </div>    
    </body>
</html>
