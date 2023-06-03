<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Administrator login page</title>
        <link rel="stylesheet" href="admin_sign_in.css">
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
        <div class="login_space">
            <div class="content_container">
                <div class="title">Administrator log in</div>
                    <form method="post" action="process_admin_login.php">
                        <div class="user_details">
                             <div class="input_box">
                                <span class="details">Email</span>
                                <input class="input" type="text" placeholder="Enter your email address" id="E_mail" name="email" required>
                            </div>
                            <div class="input_box">
                                <span class="details">Password</span>
                                <input class="input" type="password" placeholder="Enter your password" id="P_word" name="password" required>
                            </div>
                            </div>
                                <button  name="button1" class="button1" type="submit">SIGN IN</button>
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